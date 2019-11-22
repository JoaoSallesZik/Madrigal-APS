<?php
Route::group(['namespace' => 'Home'], function() {
    Route::get('/', 'HomeController@index')->name('Home.Principal.index');

});


Route::get('/', function () {
    return view('Home.index');
});

Auth::routes();

Route::group(['namespace' => 'Painel'], function(){


Route::get('/Painel', 'PainelController@index')->name('Painel.index');
Route::get('/Painel/Fundadores', 'PainelController@viewDireitos')->name('Painel.Fundadores');

Route::get('/Painel/Usuarios', 'PainelController@viewUsuario')->name('Painel.Usuarios.index');
Route::get('/Painel/Usuarios/Create','PainelController@createUsuario')->name('Painel.Usuarios.create');
Route::delete('Painel/{id}', 'Tabelas\UsuariosController@destroy')->name('Painel.Usuarios.destroy');

Route::get('/Painel/Alunos', 'PainelController@viewAlunos')->name('Painel.Alunos.index');
Route::get('/Alunos/Novo', 'Tabelas\AlunosController@create')->name('Painel.Alunos.create')->middleware('auth');
Route::any('/Alunos/Edit/{id}', 'Tabelas\AlunosController@edit')->name('Painel.Alunos.edit')->middleware('auth');
Route::any('/Alunos/{id}', 'Tabelas\AlunosController@update')->name('Painel.Alunos.update')->middleware('auth');
Route::post('/Alunos', 'Tabelas\AlunosController@store')->name('Painel.Alunos.store')->middleware('auth');
Route::delete('/Aluno/{id}', 'Tabelas\AlunosController@destroy')->name('Painel.Alunos.destroy')->middleware('auth');

Route::get('/Painel/Empresas', 'PainelController@viewEmpresas')->name('Painel.Empresas.index');
Route::get('/Empresas/Novo', 'Tabelas\EmpresasController@create')->name('Painel.Empresas.create');
Route::post('/Empresas', 'Tabelas\EmpresasController@store')->name('Painel.Empresas.store');
Route::delete('/Empresa/{id}', 'Tabelas\EmpresasController@destroy')->name('Painel.Empresas.destroy')->middleware('auth');
Route::any('/Empresas/Edit/{id}', 'Tabelas\EmpresasController@edit')->name('Painel.Empresas.edit')->middleware('auth');
Route::any('/Empresas/{id}', 'Tabelas\EmpresasController@update')->name('Painel.Empresas.update')->middleware('auth');

Route::get('/Painel/Estagios', 'PainelController@viewEstagios')->name('Painel.Estagios.index');
Route::get('/Estagios/Novo', 'Tabelas\EstagiosController@create')->name('Painel.Estagios.create');
Route::post('/Estagios', 'Tabelas\EstagiosController@store')->name('Painel.Estagios.store');
Route::delete('/Estagios/{id}', 'Tabelas\EstagiosController@destroy')->name('Painel.Estagios.destroy')->middleware('auth');
Route::any('/Estagios/Edit/{id}', 'Tabelas\EstagiosController@edit')->name('Painel.Estagios.edit')->middleware('auth');
Route::any('/Estagios/{id}', 'Tabelas\EstagiosController@update')->name('Painel.Estagios.update')->middleware('auth');


});








