<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guest = Guest::all();

        return view('guest.index', compact('guest'));
    }
}