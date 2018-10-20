<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellio_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento')->nullable();;
            $table->string('curp', 19)->nullable();
            $table->enum('sexo', ['M', 'F'])->ddefault('M');
            $table->string('telefono_celular')->nullable();
            $table->string('telefono_local')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('pais')->nullable();
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('localidad')->nullable();
            $table->string('colonia')->nullable();
            $table->string('calle')->nullable();
            $table->integer('numero_exterior')->nullable();
            $table->integer('numero_interior')->nullable();
            $table->integer('codigo_postal')->nullable();

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
        Schema::dropIfExists('personas');
    }
}
