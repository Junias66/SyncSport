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
        Schema::create('entrainements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entrainement');
            $table->date('date_ent');
            $table->time('heure_ent');
            $table->text('description')->nullable();
            $table->string('statut')->nullable();
            $table->foreignId('lieu_id')->references('id')->on('lieu_terrains')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrainements');
    }
};
