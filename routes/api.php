<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieApiController;
use App\Http\Controllers\Api\CinemaApiController;
use App\Http\Controllers\Api\ShowtimeApiController;
use App\Http\Controllers\Api\BookingApiController;

/*
|--------------------------------------------------------------------------
| Public API
|--------------------------------------------------------------------------
*/

// Movies
Route::get('/movies', [MovieApiController::class, 'index']);
Route::get('/movies/{id}', [MovieApiController::class, 'show']);

// Cinemas
Route::get('/cinemas', [CinemaApiController::class, 'index']);
Route::get('/cinemas/{id}', [CinemaApiController::class, 'show']);

// Showtimes
Route::get('/showtimes', [ShowtimeApiController::class, 'index']);
Route::get('/showtimes/{id}', [ShowtimeApiController::class, 'show']);

// Bookings
Route::get('/bookings', [BookingApiController::class, 'index']);
Route::get('/bookings/{id}', [BookingApiController::class, 'show']);


/*
|--------------------------------------------------------------------------
| Protected API (Login Required)
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

    // Booking dapat dilakukan oleh user yang sudah login
    Route::post('/bookings', [BookingApiController::class, 'store']);

    /*
    |--------------------------------------------------------------------------
    | Admin Only
    |--------------------------------------------------------------------------
    */

    Route::middleware('admin')->group(function () {

        Route::post('/movies', [MovieApiController::class, 'store']);
        Route::put('/movies/{id}', [MovieApiController::class, 'update']);
        Route::delete('/movies/{id}', [MovieApiController::class, 'destroy']);

    });

});