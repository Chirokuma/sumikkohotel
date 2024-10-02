<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserves;

class ReservesController extends Controller
{
    public function index()
    {
        $reserves = Reserves::all();

        return view('layouts.hotel', compact('reserves'));
    }
}
