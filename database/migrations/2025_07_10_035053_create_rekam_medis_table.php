<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Pasien')->nullable();
            $table->string('Poli')->nullable();
            $table->string('Diaknosa_Penyakit')->nullable();
            $table->string('Dokter')->nullable();
            $table->text('Resep_Obat')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
