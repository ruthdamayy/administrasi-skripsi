<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPendaftaranSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_pendaftaran_skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('nama_pendaftar');
            $table->string('nim', 9);
            $table->string('judul_skripsi');
            $table->string('registered_by');
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
        Schema::dropIfExists('log_pendaftaran_skripsis');
    }
}
