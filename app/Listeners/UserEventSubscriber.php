<?php

namespace App\Listeners;

use App\User;
use App\UserActivity;

class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function onUserLogin($event) {
        if($event->user) {
            UserActivity::create([
                'action' => 'login',
                'user_id' => $event->user->id,
            ]);
        }
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event) {
        if($event->user) {
            UserActivity::create([
                'action' => 'logout',
                'user_id' => $event->user->id,
            ]);
            User::clearUserTokens($event->user);
        }
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscriber@onUserLogout'
        );
    }

}