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

Route::get('/autor', 'PagesController@autor')->name('autor');
Route::get('/autor', 'PagesController@verAutor')->name('autor');


Route::get('/crearAutor', 'PagesController@crearAutorVista')->name('autor.vista.crear');
Route::post('/', 'PagesController@crearAutor')->name('autor.crear');

Route::delete('eliminarAutor/{id}','PagesController@eliminarAutor')->name('autor.eliminar');

Route::get('editarAutor/{id}','PagesController@editarAutorVista')->name('autor.vista.editar');
Route::put('editarAutor/{id}','PagesController@editarAutor')->name('autor.editar');

Route::get('/home', 'HomeController@index')->name('home');
