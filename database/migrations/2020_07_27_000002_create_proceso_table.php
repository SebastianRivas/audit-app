<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso', function (Blueprint $table) {
            $table->id();
            $table->integer('macroproceso_id');
            $table->string('nombre', 100);
            $table->text('alcance');
            $table->text('objetivo_general');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('macroproceso_id')->references('id')->on('macroproceso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proceso');
    }
}
