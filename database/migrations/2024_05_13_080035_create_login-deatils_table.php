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
        Schema::create('login-details', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',255);
            $table->string('password',255);
            $table->string('role',255);
            $table->boolean('Is_Active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login-details');
    }
};