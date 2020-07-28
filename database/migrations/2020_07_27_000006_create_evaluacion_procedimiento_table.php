<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionProcedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_procedimiento', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_auditoria_id');
            $table->integer('procedimiento_id');
            $table->boolean('cobertura');
            $table->text('alcance');
            $table->text('informes_asociados');
            $table->text('normas_asosiadas');
            $table->text('enfoque');
            $table->text('observaciones');
            $table->timestamps();

            $table->foreign('plan_auditoria_id')->references('id')->on('plan_auditoria');
            $table->foreign('procedimiento_id')->references('id')->on('procedimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_procedimiento');
    }
}
