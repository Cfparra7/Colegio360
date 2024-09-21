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
        Schema::create('Student', function (Blueprint $table) {
            $table->increments('IdStudent');
            $table->unsignedInteger('IdUser');
            $table->date('FechaNacimiento');
            $table->foreign('IdUser')->references('IdUser')->on('User');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Student');
    }
};
