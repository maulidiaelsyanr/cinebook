<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingApiController extends Controller
{
    // GET /api/bookings
    public function index()
    {
        return response()->json(Booking::all());
    }

    // GET /api/bookings/{id}
    public function show($id)
    {
        return response()->json(Booking::findOrFail($id));
    }

    // POST /api/bookings
    public function store(StoreBookingRequest $request)
    {
        return DB::transaction(function () use ($request) {

            $booking = Booking::create([
                'showtime_id'  => $request->showtime_id,
                'nama_pemesan' => $request->nama_pemesan,
                'jumlah_tiket' => $request->jumlah_tiket,
                'total_harga'  => $request->total_harga,
            ]);

            return response()->json([
                'message' => 'Booking berhasil dibuat',
                'data' => $booking
            ], 201);
        });
    }
}