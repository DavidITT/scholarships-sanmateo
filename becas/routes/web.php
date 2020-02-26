<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('login', function () {
	return view('auth.login');
});

Route::get('register', function () {
	return view('auth.register');
});

Route::get('verify', function () {
	return view('auth.verify');
});

Route::get('welcome', function () {
	return view('welcome');
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

//Ruta al controlador de aspirantes
Route::resource('aspirantes','AspirantesController');

//Ruta al controlador de escuelas
Route::resource('escuelas','EscuelasController');

//PDFS
Route::get('principal_pdf', 'PDFController@principal_PDF');
Route::get('crear_reporte_becas/{tipo}','PDFController@crear_reporte');
Route::get('crear_talon_aspirante/{id}','PDFController@crear_talon_aspirante');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
