<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('editoriaal_librooo_user', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio',5,2);
            $table->date('fecha');
            $table->integer('libro_id')->unsigned();//Para generar las relaciones de las llaves foraneas
            $table->foreign('libro_id')->references('id')->on('librooos')->onDelete('cascade');
            $table->integer('editorial_id')->unsigned();
            $table->foreign('editorial_id')->references('id')->on('editoriaals')->onDelete('cascade');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('Users')->onDelete('cascade');
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
        Schema::dropIfExists('editoriaal_librooo_user');
    }
}
