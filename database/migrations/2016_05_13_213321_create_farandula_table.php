<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarandulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farandula', function (Blueprint $table) {
            $table->increments('id')->unique();
             $table->string('titulo');
            $table->string('descripcion');
            $table->string('URL');
            $table->string('referencia');
            $table->string('img');
             $table->string('estado');
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
        //
    }
}
