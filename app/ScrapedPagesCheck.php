<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrapedPagesCheck extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'url', 'rule_id', 'context', 'suggestions', 'offset', 'length', 'category', 'message'
    ];
}
