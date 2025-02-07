<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->dateTime('tgl_pengaduan');
            $table->char('nik');
            $table->text('laporan');
            $table->string('foto');
            $table->enum('status',['0', 'proses', 'selesai']);
            $table->timestamps();


            $table->foreign('nik')->references('nik')->on('publik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
