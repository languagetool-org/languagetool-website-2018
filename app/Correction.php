<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sentence', 'correction', 'rule_id', 'accept_language', 'language', 'country', 'region', 'suggestion_pos', 'covered', 'replacement'
    ];
}
