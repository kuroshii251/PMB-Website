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
        Schema::create('daftar_ulangs', function (Blueprint $table) {
            $table->id();
$table->foreignId('user_id')->constrained()->cascadeOnDelete();
$table->string('nama');
$table->string('jurusan');
            $table->string('bukti_kelulusan');
            $table->string('ktp');
            $table->string('kartu_keluarga');
            $table->string('ijazah');
            $table->string('akte_kelahiran');
$table->string('nim')->nullable()->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_ulangs');
    }
};
