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

Route::group(['namespace' => 'Campus', 'prefix' => 'campus'], function(){


  Route::get('/', [
      'as' => 'campus.home',
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
  Route::post('/cambioPass', [
    'as'   => 'cambioPass',
    'uses' => 'UserController@updatePassword'
    ]);

  // crud cursos.
  Route::resource('/grado', 'GradoController');
  // crud modulos.
  Route::resource('/modulo', 'ModuloController');
  // crud temas.
  Route::resource('/tema', 'TemaController');

  Route::group(['prefix' => 'alumno'], function(){
    Route::get('/', [
      'as'    => 'alumno.principal',
      'uses'  => 'AlumnoController@index'
    ]);
    Route::get('/curso/{id}', [
      'as'    => 'alumno.curso',
      'uses'  => 'AlumnoController@curso'
    ]);
  });


  Route::group(['prefix' => 'docente'], function(){
    Route::get('/', [
      'as'    => 'docente.principal',
      'uses'  => 'DocenteController@index'
    ]);
    Route::get('/addlista/{idGrado}', [
      'as'    => 'docente.lista',
      'uses'  => 'ListaController@addListas'
    ]);
    Route::get('/lista/{idGrado}', [
      'as'    => 'docente.verLista',
      'uses'  => 'ListaController@verLista'
    ]);
    Route::post('/guardarLista', [
      'as'    => 'docente.guardarLista',
      'uses'  => 'ListaController@guardarLista'
    ]);
  });

  Route::get('/admin', [
    'as'    => 'admin.principal',
    'uses'  => 'AdminController@index'
  ]);
});
