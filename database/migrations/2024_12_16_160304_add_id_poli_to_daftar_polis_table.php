<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('daftar_polis', function (Blueprint $table) {
            $table->unsignedBigInteger('id_poli')->after('id_jadwal');
        });
    }

    public function down()
    {
        Schema::table('daftar_polis', function (Blueprint $table) {
            $table->dropColumn('id_poli');
        });
    }

};
