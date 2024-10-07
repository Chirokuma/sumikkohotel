<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();

        return view('guest.index', compact('reservation'));
    }
}
