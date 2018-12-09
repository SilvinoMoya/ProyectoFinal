<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|Route::get('/', function () {
    return view('welcome');
});

*/

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Auth\LoginController@index')->name('main');
Auth::routes();

Route::get('/registrar', 'pagesController@registrar')->name('registrar');
Route::post('/registrar', 'pagesController@registrarUser')->name('registrarUser');


Route::get('registrarProyectos','pagesController@registrarProyectos')->name('registarProyectos');
Route::post('/projects','ProjectsController@store');
Route::get('/projects/create','ProjectsController@create');
Route::get('/projects/vistaProyectos','ProjectsController@vistaProyectos');

Route::get('/projects/{id}/edit','ProjectsController@edit');
Route::post('/projects/{id}/edit','ProjectsController@update');

Route::get('/users/vistaUsuarios','UsersController@vistaUsuarios');

Route::get('/perfil/{id}/edit','PerfilController@edit');
Route::post('/perfil/{id}/edit','PerfilController@update');


//Route::get('/users/perfilFreelancer/{id}','UsersController@perfilFreelancer');

Route::get('/users/{id}/info-freelancer','UsersController@informacion');
//Route::post('/projects/{id}/edit','ProjectsController@update');





Route::get('/projects/vistaProyectosEmpresas','ProjectsController@vistaProyectosEmpresas');