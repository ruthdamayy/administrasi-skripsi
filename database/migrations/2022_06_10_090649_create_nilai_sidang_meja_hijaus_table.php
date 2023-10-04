<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSidangMejaHijausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sidang_meja_hijaus', function (Blueprint $table) {
            $table->string('nim', 9);
            $table->string('nip', 18);
            $table->float('sistematika_penulisan', 4,2);
            $table->float('substansi', 4,2);
            $table->float('kemampuan_menguasai_substansi',4, 2);
            $table->float('kemampuan_mengemukakan_pendapat', 4, 2);
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
        Schema::dropIfExists('nilai_sidang_meja_hijaus');
    }
}
