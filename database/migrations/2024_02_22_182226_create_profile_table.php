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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->longText('photo');
            $table->date('birthdate');
            $table->char('sex');
            $table->enum('typeProfile',[1,2])->default(1);
            $table->timestamps();

            //dato foraneo de la tabla users
            $table->unsignedBigInteger('user_id');

            //relacion con la tabla users : UNO A UNO
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
