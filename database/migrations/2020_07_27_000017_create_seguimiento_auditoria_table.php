<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoAuditoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_auditoria', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_auditoria_id');
            $table->integer('actividad_id');
            $table->integer('semana_id');
            $table->timestamps();

            $table->foreign('plan_auditoria_id')->references('id')->on('plan_auditoria');
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('semana_id')->references('id')->on('mes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimiento_auditoria');
    }
}
