<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boxscore extends Model
{
    //

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'boxscore_json' => 'array',
    ];

}
