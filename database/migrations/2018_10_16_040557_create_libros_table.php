<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('titulo_original')->nullable();
            $table->string('autor');
            $table->string('ilustrador')->nullable();
            $table->string('idioma')->nullable();
            $table->string('genero')->nullable();
            $table->string('isbn', 25);
            $table->integer('paginas')->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->string('editorial');
            $table->string('pais')->nullable();
            $table->longText('observaciones');
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
        Schema::dropIfExists('libros');
    }
}
