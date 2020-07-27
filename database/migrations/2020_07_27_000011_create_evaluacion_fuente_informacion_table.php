<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionFuenteInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_fuente_informacion', function (Blueprint $table) {
            $table->id();
            $table->integer('fuente_informacion_id');
            $table->text('relacion');
            $table->text('apartado');
            $table->text('disponibilidad');
            $table->text('revisado');
            $table->text('objetivo_institucional');
            $table->text('concluido');
            $table->timestamps();

            $table->foreign('fuente_informacion_id')->references('id')->on('fuente_informacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_fuente_informacion');
    }
}
