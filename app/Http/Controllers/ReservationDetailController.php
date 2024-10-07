<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationDetail;

class ReservationDetailController extends Controller
{
    public function index()
    {
        $reservationdetail = ReservationDetail::all();

        return view(
            'guest.index', compact('reservationdetail'));
    }
}
