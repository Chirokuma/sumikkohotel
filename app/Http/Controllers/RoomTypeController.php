<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomtype = RoomType::all();

        return view('guest.index', compact('roomtype'));
    }
}
