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
         Schema::create('rekam_medis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pasien')->nullable();
        $table->string('tanggal_kunjungan')->nullable();
        $table->string('hari')->nullable();
        $table->string('keluhan')->nullable();
        $table->string('diagnosa')->nullable();
        $table->string('tindakan')->nullable();
        $table->string('resep_obat')->nullable();
        $table->string('nama_dokter')->nullable();
        $table->text('catatan_tambahan')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};