<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
