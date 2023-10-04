<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPenambahanDosbingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_penambahan_dosbings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->string('nama_admin');
            $table->string('nim',9);
            $table->string('nip_dosbing1', 18);
            $table->string('nip_dosbing2', 18);
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('nim')->references('nim')->on('dosen_pembimbings')->onDelete('cascade');
            $table->foreign('nip_dosbing1')->references('nip_dosbing1')->on('dosen_pembimbings')->onDelete('cascade');
            $table->foreign('nip_dosbing2')->references('nip_dosbing2')->on('dosen_pembimbings')->onDelete('cascade');
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
        Schema::dropIfExists('log_penambahan_dosbings');
    }
}
