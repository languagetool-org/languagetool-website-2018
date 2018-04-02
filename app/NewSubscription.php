<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewSubscription extends Model
{
    protected $fillable = [
        'email', 'subscription_months'
    ];

}
