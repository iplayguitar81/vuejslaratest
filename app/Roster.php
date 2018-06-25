<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{

    protected $casts = [
        'roster_json' => 'array',
    ];
}
