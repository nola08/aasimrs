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
        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Dokter')->nullable();
            $table->string('Spesialis')->nullable();
            $table->string('Hari_Praktek')->nullable();
            $table->time('Jam_Mulai')->nullable();
            $table->time('Jam_Selesai')->nullable();
            $table->string('Ruangan')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_dokter');
    }
};