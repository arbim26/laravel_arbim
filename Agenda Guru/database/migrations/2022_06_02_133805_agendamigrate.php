<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('guru_id');
            $table->foreignId('mapel_id');
            $table->foreignId('kelas_id');
            $table->string('materi_pelajaran');
            $table->string('jam_pelajaran');
            $table->text('siswa_absen')->nullable();
            $table->enum('jenis_pembelajaran', ['daring','tatap muka']);
            $table->string('link')->nullable();
            $table->string('dokumentasi');
            $table->string('keterangan');
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
        //
    }
};
