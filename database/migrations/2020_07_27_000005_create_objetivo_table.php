<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivo', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_auditoria_id');
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->timestamps();

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
        Schema::dropIfExists('objetivo');
    }
}
