<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FalseAlarm extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sentence', 'covered_text', 'rule_id', 'accept_language', 'language', 'resolution', 'resolution_user_id', 'resolution_date'
    ];
}
