<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = ['nama_poli', 'keterangan'];

    public function daftarPolis()
    {
        return $this->hasMany(DaftarPoli::class, 'id_poli');
    }
}