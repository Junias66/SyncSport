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
        Schema::create('buts', function (Blueprint $table) {
            $table->id();
            $table->time('minute_but')->nullable();
            $table->foreignId('stat_individ')->references('id')->on('matche_user')->onDelete('cascade');
            $table->foreignId('type_but_marque')->references('id')->on('type_buts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buts');
    }
};
