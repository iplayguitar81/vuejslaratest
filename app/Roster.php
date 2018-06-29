<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'roster_json' => 'array',
    ];
}
