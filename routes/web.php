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

Route::get('teste', function () {
    return view('welcome');
})->name('teste');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'checkAdmin'])->group(function (){
    Route::get('projetos', 'ProjetoController@index')->name('projetos');
    Route::get('projetos/novo', 'ProjetoController@novo');
    Route::get('projetos/formDpt/{id?}', 'ProjetoController@novoForm');
    Route::post('projetos/salvar', 'ProjetoController@salvar')->name('projetos.salvar');

});

Route::middleware(['auth', 'checkUser'])->group(function (){
    Route::get('users', 'UserController@index');
});