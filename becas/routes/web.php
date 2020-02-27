<?php

 //este grupo tiene todos las url que NO necesitan login
Route::group(['middleware' => 'web'], function () {

	Route::get('login', function () {
	return view('auth.login');
    });

    Route::get('verify', function () {
	return view('auth.verify');
    });

    Route::get('register', function () {
    return view('auth.register');
    });

    Auth::routes();
	
});
//fin de middleware web

//Este grupo tiene todas las url que necesitan tener logeo sin importar si son de algun tipo de usuario
Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home');

	 Route::get('sin_acceso', function () {
        return view("Mensajes.error_acceso")
            ->with('msj','Privilegios insuficientes para acceder a esta sección. <br />Es necesario iniciar sesión.');
    });

   Route::get('sin_acceso_2', function () {
        return view("Mensajes.error_acceso")
            ->with('msj','Privilegios insuficientes para acceder a esta sección. <br />Es necesario iniciar sesión.');
    });

   Route::get('crear_talon_aspirante/{id}','PDFController@crear_talon_aspirante');

   Route::get('principal', function () {
	return view('principal');
   });

   Route::get('registro', function () {
	return view('Aspirantes.create');
    });

    //Ruta al controlador de aspirantes
    Route::resource('aspirantes','AspirantesController');
	
});
//fin middleware auth

//rutas accessibles solo para el usuario administrador
Route::group(['middleware' => 'usuarioAdmin'], function () {

    //Ruta al controlador de escuelas
    Route::resource('escuelas','EscuelasController');

    //PDFS
    Route::get('principal_pdf', 'PDFController@principal_PDF');
    Route::get('crear_reporte_becas/{tipo}','PDFController@crear_reporte');

    Route::get('/', function () {
    return view('welcome');
    });

});
//fin middleware usuarioBasico