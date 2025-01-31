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
        Schema::create('coach_type_user', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('statut_type')->nullable();
            $table->foreignId('coach_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('typ_coach_id')->references('id')->on('coach_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_type_user');
    }
};
