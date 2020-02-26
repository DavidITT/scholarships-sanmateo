<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    protected $table = 'escuelas';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre_esc','matricula','id_nivel','direccion'];

    public function nivel()
    {
    	return $this->belongsTo('App\Niv_Educativo', 'id_nivel', 'id');
    }
}
