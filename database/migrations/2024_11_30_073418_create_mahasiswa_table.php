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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('tingkat');
            $table->string('jenis_kelamin');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('alamat');
            $table->string('ukm');
            $table->string('alasan');
            $table->string('cv')->nullable();
            $table->string('status')->default('belum diterima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};