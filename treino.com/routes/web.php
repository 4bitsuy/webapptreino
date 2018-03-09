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

// Home
Route::get('/', [
  'as'    => 'home',
  'uses'  => 'HomeController@index'
]);

// Cursos
Route::get('cursos', [
  'as'    => 'cursos.principal',
  'uses'  => 'CursosController@index'
]);
Route::post('cursos', 'CursosController@getInfoCurso');

// Formularios
Route::post('contacto', 'ContactoController@enviarCorreo');
Route::post('inscripcion', 'ContactoController@enviarCorreoInscripcion');
Route::post('contacto-curso', 'ContactoController@enviarCorreoCurso');

// Blog
Route::get('blog', [
  'as'    => 'blog.principal',
  'uses'  => 'BlogController@index'
]);
Route::get('blog/{entrada}', [
  'as'    => 'blog.noticia',
  'uses'  => 'BlogController@getEntrada'
]);


Route::get('usuario', [
  'as'    => 'usuario.principal',
  'uses'  => 'UsuarioController@index'
]);


// Plataforma
Auth::routes();

Route::group(['namespace' => 'Campus', 'prefix' => 'campus'], function(){

  Route::get('/', [
    'as' => 'home',
    'uses' => 'CampusController@index'
    ]);
  Route::get('{nick}/perfil', [
    'as'   => 'campus.perfil',
    'uses' => 'UserController@perfil'
    ]);
  Route::get('{nick}/cambioPass', [
    'as'   => 'campus.cambioPass',
    'uses' => 'UserController@cambioPass'
    ]);

  // crud cursos.
  Route::resource('/grado', 'GradoController');
  // crud modulos.
  Route::resource('/modulo', 'ModuloController');


  Route::get('alumno', [
    'as'    => 'alumno.principal',
    'uses'  => 'AlumnoController@index'
  ]);

  Route::get('persona', [
    'as'    => 'persona.principal',
    'uses'  => 'PersonaController@index'
  ]);



});
