<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Becas;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;


class BecasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $ver_becas = Becas::orderBy('n_folio')->get();
        return view('Becas.index')->with('becas', $ver_becas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Becas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datos = $request->all();

       // Becas::create($datos);
       // return redirect('/becas');

        $datos = new Becas;
     
        $v = \Validator::make($request->all(), [
            
            'n_folio' => 'required|unique:becas',
            'est_paterno' => 'required',
            'est_materno' => 'required',
            'est_nombre' => 'required',
            'est_calle' => 'required',
            'est_numero' => 'required',
            'est_barrio' => 'required',
            'niv_educativo' => 'required',
            'est_grado' => 'required',
            'promedio' => 'required|Numeric|between:9.0,10.0',
            'nom_escuela' => 'required',
            'n_padre' => 'required|unique:becas',
            'n_madre' => 'required|unique:becas',
        ]);
 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        $datos = $request->all();
        Becas::create($datos);
        return redirect('/becas');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($folio)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($folio)
    {
        $becas = Becas::find($folio);
        return view('Becas.edit')->with('becas', $becas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $folio)
    {
        $datos = $request->all();
        $becas = Becas::find($folio);

        $v = \Validator::make($request->all(), [
            
            'n_folio' => ['required', 'unique:becas,n_folio,$becas'],
            'est_paterno' => 'required',
            'est_materno' => 'required',
            'est_nombre' => 'required',
            'est_calle' => 'required',
            'est_numero' => 'required',
            'est_barrio' => 'required',
            'niv_educativo' => 'required',
            'est_grado' => 'required',
            'promedio' => 'required',
            'nom_escuela' => 'required',

            'n_padre' => ['required', 'unique:becas,n_padre,$becas'],
            'n_madre' => ['required', 'unique:becas,n_madre,$becas'],
        ]);

        $becas->update($datos);
        return redirect('/becas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($folio)
    {
        
    }
}
