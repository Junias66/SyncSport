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
        Schema::create('matche_user', function (Blueprint $table) {
            $table->id();
            $table->integer('nb_but')->nullable()->default(0);
            $table->integer('nb_passes_reussies')->nullable();
            $table->integer('nb_dribbles_reussies')->nullable();
            $table->integer('nb_dribbles')->nullable();
            $table->integer('passes')->nullable();
            $table->integer('nb_passes_decisive')->nullable();
            $table->integer('minute_joues')->nullable();
            $table->integer('nb_tirs_cadres');
            $table->decimal('note', 5,2)->nullable();
            $table->integer('nb_tacles')->nullable();
            $table->integer('nb_tacles_reussies')->nullable();
            $table->integer('nb_but_encaisses')->nullable();
            $table->integer('cleansheet')->nullable();
            $table->integer('nb_penalties_arretes')->nullable();
            $table->integer('nb_penalties_encaisses')->nullable();
            $table->integer('tirs_subit')->nullable();
            $table->integer('nb_hors_jeu_players')->nullable();
            $table->integer('nb_fautes_players')->nullable();
            $table->string('blessure')->nullable();
            $table->enum('statut_role', ['titulaire', 'remplacant'])->default('titulaire');
            $table->foreignId('player_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('match_id')->references('id')->on('matches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matche_user');
    }
};
