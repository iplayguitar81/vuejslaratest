<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $casts = [
        'team_json' => 'array',
    ];

}
