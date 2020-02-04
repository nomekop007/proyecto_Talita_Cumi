<?php

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/','usuario_controller@index')->name('index');



// Authentication Routes...
Route::get('cpanel', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('cpanel', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes... !!!!!COMENTAR ESTAS LINEAS AL TERMINAR DE CREAR LOS USUARIOS!!!!
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// return home
Route::get('/home', 'HomeController@index')->name('home');


// redireccionamiento a vistas correspondientes
Route::get('c_publicacion','publicacion_controller@v_create')->name('c_publicacion');
Route::get('c_publicaciones','publicacion_controller@index')->name('publicaciones');

Route::get('c_evento','evento_controller@v_create')->name('c_evento');
Route::get('c_eventos','evento_controller@index')->name('eventos');





// crear publicaciones y eventos
Route::post('c_crearPublicacion','publicacion_controller@crearPublicacion')->name('crearPublicacion');
Route::post('c_crearEvento','evento_controller@crearEvento')->name('crearEvento');


// buscar publicaciones y eventos
Route::post('getPublicidad','publicacion_controller@getByID')->name('getPublicidad');
Route::post('getEvento','evento_controller@getByID')->name('getEvento');


//eliminar publicacion y eventos
Route::post('deletePublicacion','publicacion_controller@destroy')->name('deletePublicacion');
Route::post('deleteEvento','evento_controller@destroy')->name('deleteEvento');


//actualizar publicacion y eventos
Route::post('updatePublicacion','publicacion_controller@update')->name('updatePublicacion');
Route::post('updateEvento','evento_controller@update')->name('updateEvento');



//subir publicidad
Route::post('upPublicidad','publicacion_controller@subir')->name('upPublicidad');
Route::post('upEvento','evento_controller@subir')->name('upEvento');


//--------------------------vistas usuario---------------------------------------------

//vista eventos
Route::get('eventos','usuario_controller@vista_eventos')->name('vista_eventos');

//vista tienda
Route::get('tienda','usuario_controller@vista_tienda')->name('vista_tienda');

//vista Mision y Vision

Route::get('MisionyVision','usuario_controller@vista_MisionyVision')->name('vista_MisionyVision');

//vista galeria

Route::get('galeria','usuario_controller@vista_galeria')->name('vista_galeria');

//vista historia

Route::get('historia','usuario_controller@vista_historia')->name('vista_historia');

// vista area de formacion
Route::get('areaFormacion','usuario_controller@vista_area')->name('vista_area'); 



//vista detalle eventos

Route::get('detalleEvento','usuario_controller@vista_detalleEvento')->name('vista_detalleEvento');

//vista detalle publicaciones
Route::get('detallePublicacion','usuario_controller@vista_detallePublicacion')->name('vista_detallePublicacion');

//vista detalle Tienda
Route::get('detalleTienda','usuario_controller@vista_detalleTienda')->name('vista_detalleTienda');