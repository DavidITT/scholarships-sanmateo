<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Foundation\Http\FormRequest;

class CreateBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becas', function (Blueprint $table) {
            
            $table->bigIncrements('folio');
            //datos de alumno
            $table->integer('n_folio')->unique()->index();
            
            $table->string('est_paterno');
            $table->string('est_materno');
            $table->string('est_nombre');
            //direccion
            $table->string('est_calle');
            $table->string('est_numero');
            $table->string('est_barrio');
            //escuela
            $table->string('niv_educativo');
            $table->string('est_grado');
            $table->double('promedio', 10, 1);
            //escuela
            $table->string('nom_escuela');
            //Datos de papa
            $table->string('n_padre')->unique()->index();
            //Datos de mama
            $table->string('n_madre')->unique()->index();
            //numero de folio
           
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
        Schema::dropIfExists('becas');
    }
}
