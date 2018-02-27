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

// Plataforma
Auth::routes();
Route::get('campus', 'Campus\CampusController@index')->name('campus.home');
