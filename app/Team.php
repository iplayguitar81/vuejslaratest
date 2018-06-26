<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'team_json' => 'array',
    ];

}
