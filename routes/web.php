<?php


Route::get('/', function () {
    return view('index');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
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
Route::get('publicaciones','publicacion_controller@index')->name('publicaciones');

Route::get('c_evento','evento_controller@v_create')->name('c_evento');
Route::get('eventos','evento_controller@index')->name('eventos');

// crear publicaciones y eventos
Route::post('crearPublicacion','publicacion_controller@crearPublicacion')->name('crearPublicacion');
Route::post('crearEvento','evento_controller@crearEvento')->name('crearEvento');


// buscar publicaciones y eventos
Route::post('getPublicidad','publicacion_controller@getByID')->name('getPublicidad');


//eliminar publicacion y eventos
Route::post('deletePublicacion','publicacion_controller@destroy')->name('deletePublicacion');

//actualizar publicacion y eventos
Route::post('updatePublicacion','publicacion_controller@update')->name('updatePublicacion');