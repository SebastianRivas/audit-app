<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMacroprocesoXPlanAuditoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macroproceso_x_plan_auditoria', function (Blueprint $table) {
            $table->id();
            $table->integer('macroproceso_id');
            $table->integer('plan_auditoria_id');
            $table->timestamps();

            $table->foreign('macroproceso_id')->references('id')->on('macroproceso');
            $table->foreign('plan_auditoria_id')->references('id')->on('plan_auditoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('macroproceso_x_plan_auditoria');
    }
}
