<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionAlcanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_alcance', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_auditoria_id');
            $table->integer('alcance_id');
            $table->text('aplica');
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
        Schema::dropIfExists('evaluacion_alcance');
    }
}
