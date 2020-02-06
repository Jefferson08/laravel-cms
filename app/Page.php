<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = [
        'title', 'slug', 'body',
    ];

    public $timestamps = false;
}
