<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boxscore extends Model
{
    //

    protected $casts = [
        'boxscore_json' => 'array',
    ];

}
