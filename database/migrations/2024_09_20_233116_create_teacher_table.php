<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Teacher', function (Blueprint $table) {
            $table->increments('IdTeacher');
            $table->unsignedInteger('IdUser');
            $table->string('TituloProfesional', 100);
            $table->foreign('IdUser')->references('IdUser')->on('User')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Teacher');
    }
};
