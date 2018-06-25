<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //

    protected $casts = [
        'schedule_json' => 'array',
    ];
}
