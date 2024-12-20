<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPeriksa extends Model
{
    use HasFactory;

    protected $table = 'jadwal_periksas'; // Pastikan nama tabel sesuai dengan migrasi
    protected $fillable = [
        'id_dokter',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'is_active'
    ];

    // Relasi ke model Dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    // Menambahkan scope untuk hanya mengambil jadwal aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function poli()
    {
        return $this->dokter->poli(); // Poli diambil dari relasi dokter
    }


    public function daftarPolis()
    {
        return $this->hasMany(DaftarPoli::class, 'id_jadwal');
    }
}
