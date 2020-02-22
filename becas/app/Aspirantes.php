<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirantes extends Model
{
    protected $table = 'aspirantes';

    protected $primaryKey = 'id';

     protected $fillable = ['n_folio','aPaterno','aMaterno','nombre',
                           'calle','numero','id_Barrio',
                           'id_Escuela','niv_educativo',
                           'grado','promedio',
                           'nPadre','nMadre','telefono'];

    public function barrio()
    {
    	return $this->belongsTo('App\Barrio', 'id_Barrio', 'id');
    }

    public function escuela()
    {
    	return $this->belongsTo('App\Escuelas', 'id_Escuela', 'id');
    }

    
    
}
