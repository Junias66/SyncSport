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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('adress_users')->nullable();
            $table->string('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->string('pics')->nullable();
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->float('height_players')->nullable();
            $table->float('weight_players')->nullable();
            $table->string('status')->nullable();
            $table->text('description')->nullable();
            $table->string('rôle_status')->nullable();
            $table->string('activation_token')->nullable();
            $table->boolean('is_active')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
