<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms_type;

class Rooms_typeController extends Controller
{
    public function index()
    {
        $rooms_type = Rooms_type::all();

        return view('layouts.Rooms_type', compact('Rooms_type'));
    }
}
