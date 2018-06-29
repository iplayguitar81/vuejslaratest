<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //



    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'schedule_json' => 'array',
    ];
}
