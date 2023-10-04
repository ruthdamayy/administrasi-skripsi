<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenPembimbingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_pembimbings', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 9);
            $table->string('nip_dosbing1', 18);
            $table->string('nip_dosbing2', 18);
            $table->foreign('nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('nip_dosbing1')->references('nip')->on('dosens')->onDelete('cascade');
            $table->foreign('nip_dosbing2')->references('nip')->on('dosens')->onDelete('cascade');
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
        Schema::dropIfExists('dosen_pembimbings');
    }
}
