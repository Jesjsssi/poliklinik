<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToJadwalPeriksasTable extends Migration
{
    public function up()
    {
        Schema::table('jadwal_periksas', function (Blueprint $table) {
            // Menambahkan kolom status
            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif')->after('jam_selesai');
        });
    }

    public function down()
    {
        Schema::table('jadwal_periksas', function (Blueprint $table) {
            // Menghapus kolom status jika migrasi di-rollback
            $table->dropColumn('status');
        });
    }
}

