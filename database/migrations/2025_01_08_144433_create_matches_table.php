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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->date('match_date');
            $table->time('match_time');
            $table->string('terrain');
            $table->string('arbitre_name');
            $table->string('team_name');
            $table->string('team_adverse');
            $table->string('match_status')->nullable();
            $table->string('match_pics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
