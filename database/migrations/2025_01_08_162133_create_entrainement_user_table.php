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
        Schema::create('entrainement_user', function (Blueprint $table) {
            $table->id();
            $table->text('commentaire');
            $table->foreignId('coach_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('entrainement_id')->references('id')->on('entrainements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrainement_user');
    }
};
