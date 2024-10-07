<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::all();

        return view('layouts.room', compact('room'));
    }
}
