<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            //llave primaria
            $table->bigIncrements('id');
            //datos de alumno
            $table->integer('n_folio')->unique()->index();
            //datos del aspirante
            $table->string('aPaterno');
            $table->string('aMaterno');
            $table->string('nombre');
            //direccion
            $table->string('calle');
            $table->string('numero');
            $table->bigInteger('barrio')->unsigned();  //FK
            //telefono
            $table->unsignedInteger('telefono');
            //escuela
            $table->bigInteger('nivEducativo')->unsigned(); //FK
            $table->string('grado');
            $table->double('promedio', 10, 1);
            //escuela
            $table->bigInteger('nom_escuela')->unsigned(); //FK
            //Datos de papa
            $table->string('nPadre')->unique()->index();
            //Datos de mama
            $table->string('nMadre')->unique()->index();
            $table->timestamps();

            //Referencia a llaves foraneas
            $table->foreign('barrio')->references('id')->on('barrios');
            $table->foreign('nom_escuela')->references('id')->on('escuelas');
            $table->foreign('nivEducativo')->references('id')->on('niv_educativos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspirantes');
    }
}
