<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('fone', 15);
            $table->string('email',50)->nullable();
            $table->string('nome_porteiro', 50);
            $table->unsignedInteger('moradores_id');
            $table->timestamps();
            
            $table->foreign('moradores_id')->references('id')->on('moradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
}
