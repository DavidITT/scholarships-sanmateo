<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    protected $table = 'escuelas';

    protected $primaryKey = 'id';

     protected $fillable = ['nombre_escuela ','id_nivel '];


    public function nivel()
    {
    	return $this->belongsTo('App\Niv_Educativo', 'id_nivel', 'id');
    }
}
