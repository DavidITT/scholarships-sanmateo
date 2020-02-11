<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('public/');
});

Route::get('principal', function () {
	return view('principal');
});

Route::get('registro', function () {
	return view('Becas.create');
});

Route::get('editar_registro', function () {
	return view('Becas.edit');
});

Route::get('principal_pdf', 'PdfController@principal_pdf');

Route::resource('becas','BecasController');

Route::get('crear_reporte_becas/{tipo}','PdfController@crear_reporte');


Route::any('{catchall}', function() {
   return Response::view('Error.error404', [], 404);
})->where('catchall', '.*');






