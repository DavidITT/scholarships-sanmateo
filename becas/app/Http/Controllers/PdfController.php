<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aspirantes;
use App\Escuelas;
use Illuminate\Http\Request;


class PDFController extends Controller
{
  
    public function principal_PDF()
   {
   	return view("PDF.principal_pdf");
   }

    public function crear_reporte($tipo)
    {
        $vistaurl = "PDF.reporte";
   	    $becas = Aspirantes::orderby('promedio')->take(10)->get();
   	    return $this->crearPDF($becas, $vistaurl, $tipo);
    }

    public function crearPDF($datos,$vistaurl,$tipo)
    {
        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);        
        if($tipo==1){return $pdf->stream('reporte'); }
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }

    public function crear_talon_aspirante($id)
    {
        $vistaurl = "PDF.talon";
        $aspirante = Aspirantes::all();
        $talon = $aspirante->find($id);
        return $this->crearTalon($talon, $vistaurl, $id);
    }

    public function crearTalon($datos,$vistaurl,$id)
    {
        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);        
        return $pdf->stream('talon');
        
    }


}
