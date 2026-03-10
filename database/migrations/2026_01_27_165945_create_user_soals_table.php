<?php

use App\Models\User;
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
    Schema::create('user_soals', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->foreignId('soal_id')
              ->constrained('soals')
              ->cascadeOnDelete();

        $table->text('jawaban')->nullable();
        $table->integer('nilai')->nullable();

        $table->timestamps();

        $table->unique(['user_id', 'soal_id']);
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_soals');
    }
};
