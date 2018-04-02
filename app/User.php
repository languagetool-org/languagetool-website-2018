<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notifiable;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_key'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    *  Clear user token for google or facebook after logout
    *  @var \App\User 
    */
    static public function clearUserTokens($user) {

        if($user->facebook_token !== '') {
            try {
                $fbHttpClient = new Client();
                $fbHttpClient->request('DELETE', 'https://graph.facebook.com/me/permissions?access_token=' . $user->facebook_token);
            } catch (ClientException $e) {
                Log::error($e);
            }
            $user->facebook_token = '';
        }

        if($user->google_token !== '') {
            try {
                $ggHttpClient = new Client();
                $ggHttpClient->request('GET', 'https://accounts.google.com/o/oauth2/revoke?token=' . $user->google_token);
            } catch (ClientException $e) {
                Log::error($e);
            }
            $user->google_token = '';
        }

        $user->save();
    }
    
    public function hasActivePremium() {
        return $this->has_premium &&
            (
                $this->premium_to == null ||
                $this->premium_to >= date("Y-m-d", strtotime('-24 hours', time()))  // because of time zones etc., add one day
            );
    }

    public function premiumHasRecentlyExpired() {
        return $this->premium_to != null &&
               $this->premium_to < date("Y-m-d", strtotime('-24 hours', time())) &&  // because of time zones etc., add one day
               $this->premium_to > date("Y-m-d", strtotime('-7 days', time()));
    }
}
