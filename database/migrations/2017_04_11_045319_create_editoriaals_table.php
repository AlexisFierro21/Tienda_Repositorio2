<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditoriaalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editoriaals', function (Blueprint $table) {
            $table->increments('id');/* 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade')->onUpdate('cascade');           
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');*/
            $table->string('nombre',255);
            $table->string('rfc',255);
            //$table->string('code',5);
            //$table->string('pass',8);
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
        Schema::dropIfExists('editoriaals');
    }
}
