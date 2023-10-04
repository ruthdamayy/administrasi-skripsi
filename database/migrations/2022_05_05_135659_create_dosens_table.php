<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->string('nip', 18)->primary();
            $table->string('nama', 64);
            $table->string('kode', 5);
            $table->string('nidn', 10);
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('dosens');
    }
}
