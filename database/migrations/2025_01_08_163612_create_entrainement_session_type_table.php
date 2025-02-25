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
        Schema::create('entrainement_session_type', function (Blueprint $table) {
            $table->id();
            $table->string('statut')->nullable();
            $table->time('duree')->nullable();
            $table->text('commentaire')->nullable();
            $table->foreignId('entrainement_id')->references('id')->on('entrainements')->onDelete('cascade');
            $table->foreignId('sessiontype_id')->references('id')->on('session_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrainement_session_type');
    }
};
