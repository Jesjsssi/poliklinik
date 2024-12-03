<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPolisTable extends Migration
{
    public function up()
    {
        Schema::create('daftar_polis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasiens')->onDelete('cascade');
            $table->foreignId('id_jadwal')->constrained('jadwal_periksas')->onDelete('cascade');
            $table->text('keluhan');
            $table->integer('no_antrian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daftar_polis');
    }
}
