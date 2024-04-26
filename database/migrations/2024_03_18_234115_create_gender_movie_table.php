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
        Schema::create('gender_movie', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('movie_id');

            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gender_movie');
    }
};
