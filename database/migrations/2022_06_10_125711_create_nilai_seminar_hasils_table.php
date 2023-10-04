<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSeminarHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_seminar_hasils', function (Blueprint $table) {
            $table->string('nim', 9);
            $table->string('nip', 18);
            $table->float('abstrak', 4,2);
            $table->float('pendahuluan', 4,2);
            $table->float('landasan_teori',4, 2);
            $table->float('metodologi', 4, 2);
            $table->float('implementasi', 4, 2);
            $table->float('kesimpulan', 4, 2);
            $table->float('kemampuan_mengemukakan_substansi', 4, 2);
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
        Schema::dropIfExists('nilai_seminar_hasils');
    }
}
