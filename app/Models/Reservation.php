<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id','id');
    }
}
