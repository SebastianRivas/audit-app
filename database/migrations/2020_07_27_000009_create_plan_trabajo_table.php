<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_trabajo', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_auditoria_id');
            $table->integer('alcance_id');
            $table->text('prueba');
            $table->text('tipo_prueba');
            $table->text('estado_prueba');
            $table->text('evidencia');
            $table->text('resultado_prueba');
            $table->text('referencias_accion');
            $table->timestamps();

            $table->foreign('plan_auditoria_id')->references('id')->on('plan_auditoria');
            $table->foreign('alcance_id')->references('id')->on('alcance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_trabajo');
    }
}
