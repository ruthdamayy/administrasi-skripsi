<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenPengujisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_pengujis', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 9);
            $table->string('penguji1', 18);
            $table->string('penguji2', 18);
            $table->foreign('nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('penguji1')->references('nip')->on('dosens')->onDelete('cascade');
            $table->foreign('penguji2')->references('nip')->on('dosens')->onDelete('cascade');
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
        Schema::dropIfExists('dosen_pengujis');
    }
}
