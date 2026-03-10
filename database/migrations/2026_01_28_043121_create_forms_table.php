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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained()->cascadeOnDelete();
            $table->string('nama');
            $table->string('email');
            $table->string('jurusan');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('foto_pas');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nisn');
            $table->string('asal_sekolah');
            $table->string('nomor_telepon');
            $table->string('nik', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
