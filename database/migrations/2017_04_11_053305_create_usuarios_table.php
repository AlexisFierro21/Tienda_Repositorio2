<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');/*
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade')->onUpdate('cascade')->nullable()->change();*/
            $table->string('nombre',255);
            $table->string('ap_paterno',255);
            $table->string('ap_materno',255);
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
        Schema::dropIfExists('usuarios');
    }
}
