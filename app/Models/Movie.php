<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'movie_id';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'sinopsis',
        'durasi',
        'rating_usia'
    ];

    // Casts
    protected $casts = [
        'durasi' => 'integer',
    ];

    // Relasi ke Showtime
    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'movie_id');
    }

    // Query Scope
    public function scopeRating($query, $rating)
    {
        return $query->where('rating_usia', $rating);
    }
}