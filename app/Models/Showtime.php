<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table = 'showtimes';
    protected $primaryKey = 'showtime_id';
    public $timestamps = false;

    protected $fillable = [
        'movie_id',
        'studio_id',
        'tanggal_tayang',
        'jam_mulai',
        'harga_tiket'
    ];

    // Casts
    protected $casts = [
        'tanggal_tayang' => 'date',
        'jam_mulai' => 'datetime:H:i:s',
        'harga_tiket' => 'decimal:2',
    ];

    // Relasi ke Movie
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    // Relasi ke Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'showtime_id');
    }

    // Query Scope
    public function scopeTanggal($query, $tanggal)
    {
        return $query->where('tanggal_tayang', $tanggal);
    }
}