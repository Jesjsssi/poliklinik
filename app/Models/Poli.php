<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    // Tabel yang digunakan
    protected $table = 'polis';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_poli',
        'keterangan',
    ];

    // Jika diperlukan, tambahkan relasi
    public function dokters()
    {
        return $this->hasMany(Dokter::class, 'id_poli');
    }
}
