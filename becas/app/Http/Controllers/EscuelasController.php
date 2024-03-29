<?php

namespace App\Http\Controllers;
use App\Escuelas;
use App\Niv_Educativo;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\EscuelasStoreRequest;
use App\Http\Requests\EscuelasUpdateRequest;

class EscuelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function __construct()
    {
        $this->middleware('usuarioAdmin');
    } 

    public function index()
    {
        $escuelas= Escuelas::orderBy('id')->get();
        return view('Escuelas.index')->with('escuelas', $escuelas);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivel = Niv_Educativo::select('id','nombreNiv')->get();
        return view('Escuelas.create')->with('nivel', $nivel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscuelasStoreRequest $request)
    {
        $datos = $request->all();
        Escuelas::create($datos);
        return redirect('/escuelas')->with('success','Escuela registrada');
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
        $nivel = Niv_Educativo::select('id','nombreNiv')->get();

        $escuelas = Escuelas::find($id);
        return view('Escuelas.edit')->with('escuelas', $escuelas)
                                      ->with('nivel', $nivel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EscuelasUpdateRequest $request, $id)
    {
        $datos = $request->all();
        $escuelas = Escuelas::find($id);
        $escuelas->update($datos);
        return redirect('/escuelas')->with('success','Escuela actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escuelas = Escuelas::find($id);
        $escuelas->destroy($id);
        return redirect('/escuelas')->with('success','Escuela eliminada');
    }
}
