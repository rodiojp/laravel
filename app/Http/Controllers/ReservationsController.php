<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function bookRoom($client_id, $room_id, $date_id, $date_out)
    {
        __METHOD__ . '/' . $client_id . '/' . $room_id . '/' . $date_id . '/' . $date_out;
    }
}
