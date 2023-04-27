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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->text('nom_solicitante');
            $table->integer('no_cuenta');
            $table->integer('telefono');
            $table->text('unidad_aprendizaje');
            $table->text('profesor');
            $table->unsignedBigInteger('id_aula');
            $table->unsignedBigInteger('id_licenciatura');
            $table->text('id_insumo');
            $table->date('fecha_solicitud');
            $table->date('fecha_entrega');
            $table->timestamps();

            $table->foreign('id_aula')->references('id')->on('aulas');
            $table->foreign('id_licenciatura')->references('id')->on('licenciaturas');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
