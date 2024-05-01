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
        Schema::create('contenus', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('course_id');
        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        $table->string('title');
        $table->text('content');
        $table->text('introduction');
        $table->string('image');
        $table->unsignedBigInteger('team_id');
        $table->foreign('team_id')->references('id')->on('team')->onDelete('cascade');
       

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenus');
    }
};
