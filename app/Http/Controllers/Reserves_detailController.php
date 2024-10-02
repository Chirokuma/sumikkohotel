<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserves_detail;

class Reserves_detailController extends Controller
{
    public function index()
    {
        $reserves_detail = Reserves_detail::all();

        return view(
        'layouts.Reserves_detail', compact('Reserves_det'));
    }
}
