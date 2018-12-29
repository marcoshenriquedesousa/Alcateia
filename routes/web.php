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

/*
 * Rotas Projetos
 * */
Route::get('projetos', 'ProjetoController@index');
Route::get('projetos/novo', 'ProjetoController@novo');
Route::post('projetos/salvar', 'ProjetoController@salvar');

/*
 * Rotas de autenticação de Usuarios
 * */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
