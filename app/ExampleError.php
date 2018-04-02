<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExampleError extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sentence', 'correction', 'url', 'user_id', 'rule_id', 'accept_language', 'language',
    ];
}
