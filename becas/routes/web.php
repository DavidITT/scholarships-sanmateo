<?php

Route::get('/', function () {
	return view('public');
});

Route::get('public', function () {
	return view('public');
});


Route::get('principal', function () {
	return view('principal');
});

Route::get('registro', function () {
	return view('Aspirantes.create');
});

Route::get('escuelas', function () {
	return view('Escuelas.create');
});

//Ruta al controlador de aspirantes
Route::resource('aspirantes','AspirantesController');

//Ruta al controlador de escuelas
Route::resource('escuelas','EscuelasController');

//PDFS
Route::get('principal_pdf', 'PDFController@principal_PDF');
Route::get('crear_reporte_becas/{tipo}','PDFController@crear_reporte');


//Ruta para atrapar excepciones y errores 
Route::any('{catchall}', function() {
   return Response::view('Error.error404', [], 404);
})->where('catchall', '.*');






