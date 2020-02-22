<?php

//Ruta al welcome
Route::get('welcome', function () {
	return view('welcome');
});

//Vista a la pagina principal
Route::get('/', function () {
	return view('principal.principal_master');
});

//Vista a la pagina principal
Route::get('principal', function () {
	return view('principal.principal_master');
});

//Vista a la pagina de registro de aspirante
Route::get('registro', function () {
	return view('Aspirantes.create');
});

//Vista a la pagina de editar datos de aspirante
Route::get('editar_registro', function () {
	return view('Aspirantes.edit');
});

//Vista a la pagina principal de generacion de reporte PDF
Route::get('principal_pdf', 'PdfController@principal_pdf');

//Ruta para ver o descargar PDF
Route::get('crear_reporte_becas/{tipo}','PdfController@crear_reporte');

//Ruta al controlador de aspirantes
Route::resource('aspirantes','AspirantesController');

//Ruta para atrapar excepciones y errores 
Route::any('{catchall}', function() {
   return Response::view('Error.error404', [], 404);
})->where('catchall', '.*');






