<?php

Auth::routes();

Route::get('/', 'InicioController@home');
Route::get('/about', 'InicioController@about');
Route::get('/contact', 'InicioController@contact');
Route::get('/blog', 'InicioController@blog');

Route::get('/servicos/1', 'ServicosController@servicos1');
Route::get('/servicos/2', 'ServicosController@servicos2');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');
Route::get('/publicacao/novo', 'AdminController@create');
Route::post('/publicacao/novo', 'AdminController@store');
Route::get('/publicacao/editar/{id}', 'AdminController@edit');
Route::post('/publicacao/atualizar/{id}', 'AdminController@update');
Route::get('/publicacao/deletar/{id}', 'AdminController@destroy');
Route::get('/empresa', 'AdminController@empresaindex');
Route::get('/empresa/editar/{id}', 'AdminController@editarempresa');
Route::post('/empresa/atualizar/{id}', 'AdminController@atualizarempresa');
