<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiUjiProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_uji_programs', function (Blueprint $table) {
            $table->string('nim', 9);
            $table->string('nip', 18);
            $table->float('nilai_kemampuan_dasar_program', 4,2);
            $table->float('nilai_kecocokan_algoritma', 4,2);
            $table->float('nilai_penguasaan_program',4, 2);
            $table->float('nilai_penguasaan_ui', 4, 2);
            $table->float('nilai_validasi_output', 4, 2);
            $table->date('tanggal');
            $table->time('waktu');
            $table->foreign('nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('dosens')->onDelete('cascade');
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
        Schema::dropIfExists('nilai_uji_programs');
    }
}
