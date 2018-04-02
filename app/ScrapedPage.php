<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrapedPage extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'url', 'start_url', 'html', 'text', 'title'
    ];
}
