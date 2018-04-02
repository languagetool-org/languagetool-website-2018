<?php

namespace App\Http\Controllers\Auth;

use App\NewSubscription;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Jrean\UserVerification\Exceptions\UserNotFoundException;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use Jrean\UserVerification\Exceptions\UserIsVerifiedException;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use VerifiesUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]);
    }
    public function getVerificationError()
    {
        return redirect('/TokenMismatch?message=email-token');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Log::info('Creating user for email '.$data['email']);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        // Maybe the user has bought a subscription without having an account, in that case,
        // activate their premium access now:
        $newSubscription = NewSubscription::where('email', $data['email'])->orderBy('updated_at', 'desc')->take(1)->get();
        if (sizeof($newSubscription) > 0) {
            Log::info('Setting premium access because user was found in new_subscriptions table: '.$data['email']);
            $user->has_premium = true;
            $user->premium_from = date("Y-m-d");
            $user->subscription_months = $newSubscription[0]->subscription_months;
            $user->save();
        } else {
            Log::info('create: User not found in new_subscriptions table, not premium user (yet): '.$data['email']);
        }
        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegistrationRequest $request)
    {
        $user = $this->create($request->all());
        if ($request->cookie('affiliate', null) != null) {
            $user->affiliate = $request->cookie('affiliate');
            $user->save();
        }

        event(new Registered($user));

        $this->guard()->login($user);

        UserVerification::generate($user);

        UserVerification::send($user, env('APP_NAME') . ' - Activate your account');

        notify()->flash(__('messages.register_success_title'), 'success', [
            'timer' => 3000,
            'text' => __('messages.register_success_text'),
        ]);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Handle the user verification.
     *
     * @param  string  $token
     * @return \Illuminate\Http\Response
     */
    public function getVerification(Request $request, $token)
    {
        if (! $this->validateRequest($request)) {

            return redirect($this->redirectIfVerificationFails());
        }

        try {

            $user = UserVerification::process($request->input('email'), $token, $this->userTable());
        } catch (UserNotFoundException $e) {

            return redirect($this->redirectIfVerificationFails());
        } catch (UserIsVerifiedException $e) {
            notify()->flash(__('messages.verify_success_title'), 'success', [
                'timer' => 3000,
                'text' => __('messages.verify_already_verified'),
            ]);
            return redirect($this->redirectIfVerified());
        } catch (TokenMismatchException $e) {
            return redirect($this->redirectIfVerificationFails());
        }

        if (config('user-verification.auto-login') === true) {
            auth()->loginUsingId($user->id);
        }

        notify()->flash(__('messages.verify_success_title'), 'success', [
            'timer' => 3000,
            'text' => __('messages.verify_success_text'),
        ]);

        return redirect($this->redirectAfterVerification());
    }

}
