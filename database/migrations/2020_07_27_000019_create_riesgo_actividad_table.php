<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiesgoActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgo_actividad', function (Blueprint $table) {
            $table->id();
            $table->integer('actividad_id');
            $table->text('descripcion');
            $table->text('riesgo_inherente');
            $table->text('accion');
            $table->text('resultado_prueba');
            $table->text('solidez');
            $table->text('riesgo_residual');
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riesgo_actividad');
    }
}
