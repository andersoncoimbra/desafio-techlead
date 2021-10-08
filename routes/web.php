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

Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registro', 'HomeController@registro')->name('registro');
Route::get('/livro/{livro}', 'HomeController@livro')->name('livro.registro')->middleware('can:atualizar-livro,livro');
Route::post('/livro/{livro}', 'HomeController@alterar')->name('alterar.registro')->middleware('can:atualizar-livro,livro');
Route::get('/livro/{livro}/excluir', 'HomeController@excluir')->name('excluir.registro')->middleware('can:atualizar-livro,livro');


