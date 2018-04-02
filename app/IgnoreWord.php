<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IgnoreWord extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ignore_word', 'user_id',
    ];
}
