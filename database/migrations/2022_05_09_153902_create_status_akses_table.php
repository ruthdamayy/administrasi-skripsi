<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_akses', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 9);
            $table->unsignedBigInteger('no_statusAkses');
            $table->foreign('no_statusAkses')->references('no_statusAkses')->on('keterangan_status_akses');
            $table->foreign('nim')->references('nim')->on('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_akses');
    }
}
