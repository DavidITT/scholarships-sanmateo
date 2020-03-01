<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Aspirantes;
use App\Barrio;
use App\Escuelas;
use App\Niv_Educativo;
use App\Http\Controllers\Controller;
use App\Http\Requests\AspirantesStoreRequest;
use App\Http\Requests\AspirantesUpdateRequest;



class AspirantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirantes = Aspirantes::orderBy('n_folio')->get();
        return view('Aspirantes.index')->with('aspirantes', $aspirantes);
                                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barrio = Barrio::select('id','nombre')->get();
        $escuela = Escuelas::select('id','nombre_esc')->get();
        $nivel = Niv_Educativo::select('id','nombreNiv')->get();
        return view('Aspirantes.create')->with('barrio', $barrio) 
                                        ->with('escuela', $escuela)
                                        ->with('nivel', $nivel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AspirantesStoreRequest $request)
    {
        $datos = $request->all();
        Aspirantes::create($datos);
        return redirect('/aspirantes')->with('success','Aspirante registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barrio = Barrio::select('id','nombre')->get();
        $escuela = Escuelas::select('id','nombre_esc')->get();
        $nivel = Niv_Educativo::select('id','nombreNiv')->get();

        $aspirantes = Aspirantes::find($id);
        return view('Aspirantes.edit')->with('aspirantes', $aspirantes)
                                      ->with('escuela', $escuela)
                                      ->with('nivel', $nivel)
                                      ->with('barrio', $barrio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AspirantesUpdateRequest $request, $id)
    {
        $datos = $request->all();
        $aspirantes = Aspirantes::find($id);
        $aspirantes->update($datos);
        return redirect('/aspirantes')->with('success','Aspirante actualizado correctamente');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aspirante = Aspirantes::find($id);
        $aspirante->destroy($id);
        return redirect('/aspirantes')->with('success','Aspirante Eliminado');;
    }
}
