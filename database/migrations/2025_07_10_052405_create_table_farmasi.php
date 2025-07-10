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
        Schema::create('farmasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat')->nullable();
            $table->string('kode_obat')->nullable();
            $table->string('bentuk_sediaan')->nullable();
            $table->string('dosis')->nullable();
            $table->Integer('stok')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->string('expired_date')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmasi');
    }
};
