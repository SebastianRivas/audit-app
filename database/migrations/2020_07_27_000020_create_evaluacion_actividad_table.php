<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_actividad', function (Blueprint $table) {
            $table->id();
            $table->integer('actividad_id');
            $table->text('acciones_mecanismos');
            $table->text('existencia');
            $table->text('diseno');
            $table->text('aplicacion');
            $table->text('porcentaje_excepciones');
            $table->text('hallazgos');
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
        Schema::dropIfExists('evaluacion_actividad');
    }
}
