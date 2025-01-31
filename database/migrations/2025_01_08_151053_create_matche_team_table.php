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
        Schema::create('matche_team', function (Blueprint $table) {
            $table->id();
            $table->decimal('possession', 5,2)->nullable();
            $table->integer('nb_tirs')->nullable();
            $table->integer('nb_tirs_cadres')->nullable();
            $table->integer('nb_fautes')->nullable();
            $table->integer('nb_corners')->nullable();
            $table->integer('nb_hors_jeu')->nullable()->default(0);
            $table->integer('nb_passes_total')->nullable();
            $table->integer('nb_passes_reussies')->nullable();
            $table->string('homme_match')->nullable();
            $table->integer('score_eq_int');
            $table->integer('score_eq_ext')->nullable();
            $table->integer('nb_blesses')->nullable()->default(0);
            $table->integer('nb_remplacement')->nullable()->default(0);
            $table->integer('nb_penalties')->nullable()->default(0);
            $table->integer('nb_penalties_marque')->nullable()->default(0);
            $table->integer('nb_carton')->nullable()->default(0);
            $table->foreignId('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreignId('match_id')->references('id')->on('matches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matche_team');
    }
};
