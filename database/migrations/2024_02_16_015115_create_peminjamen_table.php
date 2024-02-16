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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('id_iventaris');
            $table->string('nama_barang');
            $table->string('nama_peminjam');
            $table->string('tanggal_peminjam');
            $table->string('tanggal_kembali');
            $table->enum('status', ['proses', 'sudah_kembali', 'belum_kembali'])->default('proses');
            $table->string('petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
