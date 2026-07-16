<?php

namespace App\Http\Controllers;

use App\Models\Showtime;

class ShowtimeController extends Controller
{
    public function index()
    {
        $showtimes = Showtime::all();

        return view('showtimes', compact('showtimes'));
    }
}