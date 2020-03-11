<?php

namespace App\Http\Controllers;
use App\Escuelas;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function combo($niv_educativo)
    {
    	$escuelas = Escuelas::select('id','nombre_esc')
    	->where('id_nivel',$niv_educativo)
    	->get();

    	return $escuelas;
    }
}
