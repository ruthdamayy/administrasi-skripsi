<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogMahasiswaLulusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_mahasiswa_luluses', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 9);
            $table->string('nama');
            $table->string('judul_skripsi');
            $table->string('bidang_ilmu');
            $table->string('nip_dosbing1', 18);
            $table->string('nama_dosbing1',);
            $table->string('nip_dosbing2', 18);
            $table->string('nama_dosbing2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_mahasiswa_luluses');
    }
}
