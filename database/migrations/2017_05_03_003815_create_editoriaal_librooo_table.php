<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditoriaalLibroooTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editoriaal_librooos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('editoriaal_id')->unsigned();
            $table->foreign('editoriaal_id')->references('id')->on('editoriaals')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('librooo_id')->unsigned();
            $table->foreign('librooo_id')->references('id')->on('librooos')->onDelete('cascade')->onUpdate('cascade');
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
         Schema::drop('editoriaal_librooos');
    }
}
