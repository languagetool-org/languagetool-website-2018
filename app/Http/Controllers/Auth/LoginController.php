<?php

namespace App\Http\Controllers\Auth;

use App\NewSubscription;
use App\User;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    use VerifiesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(\Illuminate\Http\Request $request, $user)
    {
        // Maybe the user has bought a subscription without being logged in (but having an account), in that case,
        // activate their premium access now (code mostly taken from RegisterController.php):
        $newSubscription = NewSubscription::where('email', $user->email)->orderBy('updated_at', 'desc')->take(1)->get();
        if (sizeof($newSubscription) > 0) {
            if (!$user->has_premium && $user->premium_from == null) {
                Log::info('Login: Setting premium access because user was found in new_subscriptions table: '.$user->email);
                $user->has_premium = true;
                $user->premium_from = date("Y-m-d");
                $user->subscription_months = $newSubscription[0]->subscription_months;
                $user->save();
            } else {
                Log::info('Login: Not setting premium access despite user found in new_subscriptions table: '.$user->email.' - user has has_premium and premium start date already');
            }
        } else {
            Log::info('Login: User not found in new_subscriptions table, not premium user (yet): '.$user->email);
        }
        notify()->flash(__('messages.login_success_title'), 'success', [
            'timer' => 3000,
            'text' => __('messages.login_success_text'),
        ]);
        return redirect()->intended($this->redirectPath());
    }

    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->scopes(['email'])->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        $this->guard()->login($authUser);
        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $provider_id = $provider . '_user_id';
        $user_token = $provider . '_token';
        $authUser = User::where($provider_id, $user->id)->orWhere('email', $user->email)->first();
        if ($authUser) {
            $authUser->{$provider_id} = $user->id;
            $authUser->{$user_token} = $user->token;
            $authUser->save();
            notify()->flash(__('messages.login_success_title'), 'success', [
                'timer' => 3000,
                'text' => __('messages.login_success_text'),
            ]);
            return $authUser;
        }
        notify()->flash(__('messages.register_success_title'), 'success', [
            'timer' => 3000,
            'text' => __('messages.register_success_text'),
        ]);

        $newUser = User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => bcrypt(str_random(8)),
            $provider_id => $user->id,
            $user_token => $user->token,
        ]);
        UserVerification::generate($newUser);
        UserVerification::send($newUser, env('APP_NAME') . ' - Activate your account');
        return $newUser;
    }


}
