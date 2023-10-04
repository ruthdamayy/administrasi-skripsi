<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPengubahanSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_pengubahan_skripsis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('nama_pengubah');
            $table->string('nim');
            $table->string('old_judul_skripsi', 18);
            $table->string('new_judul_skripsi', 18);
            $table->string('old_bidang_ilmu', 18);
            $table->string('new_bidang_ilmu', 18);
            $table->string('edited_by');
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
        Schema::dropIfExists('log_pengubahan_skripsis');
    }
}
