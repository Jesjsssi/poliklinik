<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_daftar_poli',
        'tgl_periksa',
        'biaya_periksa',
        'catatan',
        'id_obat', 
    ];

    // Relasi ke DaftarPoli
    public function daftarPoli()
    {
        return $this->belongsTo(DaftarPoli::class, 'id_daftar_poli');
    }

    public function obats()
    {
        return $this->belongsToMany(Obat::class, 'periksa_obat', 'id_periksa', 'id_obat');
    }

}
