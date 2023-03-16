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
            $table->unsignedBigInteger('id_insumo');
            $table->unsignedBigInteger('id_numero');
            $table->date('fecha_solicitud');
            $table->date('fecha_entrega');
            $table->unsignedBigInteger('id_hora');
            $table->timestamps();

            $table->foreign('id_aula')->references('id')->on('aulas');
            $table->foreign('id_licenciatura')->references('id')->on('licenciaturas');
            $table->foreign('id_insumo')->references('id')->on('insumos');
            $table->foreign('id_numero')->references('id')->on('numeros');
            $table->foreign('id_hora')->references('id')->on('horas');
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
