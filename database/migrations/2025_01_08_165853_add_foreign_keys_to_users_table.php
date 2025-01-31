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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('numero_id')->nullable()->references('id')->on('numeros')->onDelete('cascade');
            $table->foreignId('position_id')->nullable()->references('id')->on('positions')->onDelete('cascade');
            $table->foreignId('categage_id')->nullable()->references('id')->on('categ_ages')->onDelete('cascade');
            $table->foreignId('club_id')->nullable()->references('id')->on('clubs')->onDelete('cascade');
            $table->foreignId('team_id')->nullable()->references('id')->on('teams')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
