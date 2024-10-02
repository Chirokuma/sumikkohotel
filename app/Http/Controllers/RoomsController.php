<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();

        return view(
        'layouts.Rooms', compact('Rooms'));
    }
}
