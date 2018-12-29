<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatVisualizacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualizacao', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('visualizacao');
            $table->unsignedInteger('projetoId');
            $table->foreign('projetoId')->references('id')->on('projeto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visualizacao');
    }
}
