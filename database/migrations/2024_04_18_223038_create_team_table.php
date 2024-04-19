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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('nomComplete');
            $table->string('specialites');
            $table->string('image'); // Assuming you store the image path
            $table->string('linkfacebook')->nullable();
            $table->string('linktwitter')->nullable();
            $table->string('linkinstagram')->nullable();
            $table->string('linklinkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
