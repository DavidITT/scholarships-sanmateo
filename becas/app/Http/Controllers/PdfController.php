<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Becas;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function principal_pdf()
   {
   	return view("PDF.principal_pdf");
   }


  public function crearPDF($datos,$vistaurl,$tipo)
    {
        $data = $datos;
        
        $date = date('Y-m-d');


        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


   public function crear_reporte($tipo){
   	$vistaurl = "PDF.reporte";
   	$becas = Becas::orderby('n_folio')->get();
   	return $this->crearPDF($becas, $vistaurl, $tipo);
   }
}