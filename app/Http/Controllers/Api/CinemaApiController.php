<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cinema;

class CinemaApiController extends Controller
{
    // GET /api/cinemas
    public function index()
    {
        return response()->json(Cinema::all());
    }

    // GET /api/cinemas/{id}
    public function show($id)
    {
        return response()->json(Cinema::findOrFail($id));
    }
}