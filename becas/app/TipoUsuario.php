<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipos_usuario';

    public function users()
    {
        return $this->hasMany('App\User', 'tipoUsuario', 'id');
    }
}
