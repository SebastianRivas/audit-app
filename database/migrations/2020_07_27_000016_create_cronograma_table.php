<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronogramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronograma', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_auditoria_id');
            $table->integer('tipo_cronograma_id');
            $table->integer('actividad_id');
            $table->integer('periodo_id');
            $table->timestamps();

            $table->foreign('plan_auditoria_id')->references('id')->on('plan_auditoria');
            $table->foreign('tipo_cronograma_id')->references('id')->on('tipo_cronograma');
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('periodo_id')->references('id')->on('periodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cronograma');
    }
}
