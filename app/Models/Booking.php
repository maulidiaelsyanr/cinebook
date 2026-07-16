<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';
    public $timestamps = false;

    protected $fillable = [
        'showtime_id',
        'nama_pemesan',
        'jumlah_tiket',
        'total_harga'
    ];

    // Casts
    protected $casts = [
        'jumlah_tiket' => 'integer',
        'total_harga' => 'decimal:2',
    ];

    // Relasi ke Showtime
    public function showtime()
    {
        return $this->belongsTo(Showtime::class, 'showtime_id');
    }

    // Query Scope
    public function scopeJumlahTiket($query, $jumlah)
    {
        return $query->where('jumlah_tiket', $jumlah);
    }
}