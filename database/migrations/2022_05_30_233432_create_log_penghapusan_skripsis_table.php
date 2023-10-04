<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPenghapusanSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_penghapusan_skripsis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->string('nama_admin');
            $table->string('nim');
            $table->string('judul_skripsi', 18);
            $table->string('bidang_ilmu', 18);
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
        Schema::dropIfExists('log_penghapusan_skripsis');
    }
}
