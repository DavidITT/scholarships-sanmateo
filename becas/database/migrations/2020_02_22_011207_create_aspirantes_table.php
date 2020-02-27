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
            $table->bigInteger('id_Barrio')->unsigned();  //FK
            //escuela
            $table->bigInteger('id_Escuela')->unsigned(); //FK
            $table->string('niv_educativo');
            $table->string('grado');
            $table->double('promedio', 10, 1);
            //Datos de papa
            $table->string('nPadre')->unique()->index();
            //Datos de mama
            $table->string('nMadre')->unique()->index();
             //telefono
            $table->bigInteger('telefono');
            
            $table->timestamps();
            //Referencia a llaves foraneas
            $table->foreign('id_Barrio')->references('id')->on('barrios');
            $table->foreign('id_Escuela')->references('id')->on('escuelas');
            
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
