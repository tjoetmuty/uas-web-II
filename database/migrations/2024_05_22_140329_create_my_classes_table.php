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
        Schema::create('my_classes', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('deskripsi');
            $table->string('nama_kelas');
            $table->string('hari');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->string('level');
            $table->string('topik');
            $table->string('pertemuan');
            $table->string('tahun_akademik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_classes');
    }
};
