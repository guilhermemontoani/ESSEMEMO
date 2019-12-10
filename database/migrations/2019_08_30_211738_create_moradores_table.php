<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome', 50);
            $table->string('fone_res', 14)->nullable();
            $table->string('fone_cel', 15);
            $table->string('apartamento', 4);

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
        Schema::dropIfExists('moradores');
    }
}
