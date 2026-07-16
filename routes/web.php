<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/cinemas', [CinemaController::class, 'index']);

Route::get('/showtimes', [ShowtimeController::class, 'index']);
Route::get('/bookings', [BookingController::class, 'index']);