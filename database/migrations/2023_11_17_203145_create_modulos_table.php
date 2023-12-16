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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('codigo');
            $table->string('materia');
            $table->integer('h_semanales');
            $table->integer('h_totales');
            $table->string('disitribucion')->nullable();
            $table->foreignId('curso_id')->constrained('cursos');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('especialidad_id')->constrained('especialidades');
            // $table->integer('especialidad_id');
            // $table->integer('curso_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('modulos', function (Blueprint $table) {
        //     $table->dropForeign('user_id');
        //     $table->dropForeign('especialidad_id');
        // });
        Schema::dropIfExists('modulos');
    }
};
