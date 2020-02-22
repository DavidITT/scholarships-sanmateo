<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirantes extends Model
{
    protected $table = 'aspirantes';

    protected $primaryKey = 'id';

     protected $fillable = ['n_folio','aPaterno','aMaterno','nombre',
                           'calle','numero','barrio','telefono',
                           'nivEducativo','grado','promedio',
                           'nom_escuela',
                           'nPadre','nMadre'];
    
}
