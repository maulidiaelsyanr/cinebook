<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinemas';
    protected $primaryKey = 'cinema_id';

    public $timestamps = false;

    protected $fillable = [
        'nama_cabang',
        'alamat',
        'kota'
    ];

    // Casts
    protected $casts = [
        'cinema_id' => 'integer',
    ];

    // Query Scope
    public function scopeKota($query, $kota)
    {
        return $query->where('kota', $kota);
    }
}