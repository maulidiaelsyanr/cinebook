<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Showtime;

class ShowtimeApiController extends Controller
{
    // GET /api/showtimes
    public function index()
    {
        return response()->json(Showtime::all());
    }

    // GET /api/showtimes/{id}
    public function show($id)
    {
        return response()->json(Showtime::findOrFail($id));
    }
}