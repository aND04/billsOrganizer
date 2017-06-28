<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];

    public function place()
    {
        return $this->belongsTo('App\Place', 'places_id');
    }
}
