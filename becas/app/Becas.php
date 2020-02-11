<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Becas extends Model
{
    protected $table = 'becas';

    protected $primaryKey = 'folio';

    protected $fillable = ['n_folio','est_paterno','est_materno','est_nombre',
                           'est_calle','est_numero','est_barrio',
                           'niv_educativo','est_grado','promedio',
                           'nom_escuela',
                           'n_padre','n_madre'];
}
