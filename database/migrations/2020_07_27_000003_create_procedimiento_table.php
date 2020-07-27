<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimiento', function (Blueprint $table) {
            $table->id();
            $table->integer('proceso_id');
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('proceso_id')->references('id')->on('proceso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimiento');
    }
}
