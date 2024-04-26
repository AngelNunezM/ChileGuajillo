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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('releaseDate');
            $table->text('synopsis');
            $table->longText('urlTrailer');
            $table->longText('image');
            $table->timestamps();

            $table->unsignedBigInteger('clasification_id');
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('user_id');

           // $table->foreign('clasification_id')->references('id')->on('clasifications')->onDelete('cascade');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            $table->foreign('clasification_id')->references('id')->on('clasifications')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
