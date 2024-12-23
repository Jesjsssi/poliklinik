<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksasTable extends Migration
{
    public function up()
    {
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_daftar_poli')->constrained('daftar_polis')->onDelete('cascade');
            $table->datetime('tgl_periksa');
            $table->text('catatan')->nullable();
            $table->integer('biaya_periksa');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periksas');
    }
}
