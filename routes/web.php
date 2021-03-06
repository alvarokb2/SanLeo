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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin routes
//Gestión de usuarios
Route::get('/usuarios', 'AdminController@index')->name('usuarios');
Route::get('/editar_usuario/{users?}', 'AdminController@editar_usuario')->name('editar_usuario');
Route::get('/nuevo_usuario', 'AdminController@nuevo_usuario')->name('nuevo_usuario');
Route::post('/guardar_usuario', 'AdminController@guardar_usuario')->name('guardar_usuario');

//Gestión de Informe
Route::get('/informes', 'AdminController@informes')->name('informes');


//Rutas para cursos
Route::resource('alumnos','AlumnoController');

//Educadora routes
//Gestion de cursos
Route::resource('cursos', 'CursoController');


Route::resource('users', 'UserController');
Route::post('/buscar_usuario', 'UserController@search')->name('users.search');
