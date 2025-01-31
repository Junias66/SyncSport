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
        Schema::create('cartons', function (Blueprint $table) {
            $table->id();
            $table->enum('type_carton', ['jaune', 'rouge'])->nullable();
            $table->time('minute')->nullable();
            $table->string('motif')->nullable();
            $table->foreignId('joueurconc_id')->references('id')->on('matche_user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartons');
    }
};
