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

Route::get('/alunos/export', 'AlunoController@export')->name('alunos.export');
Route::resource('alunos', 'AlunoController');
Route::get('/cursos/export', 'CursoController@export')->name('cursos.export');
Route::resource('cursos', 'CursoController');
Route::get('/professores/export', 'ProfessorController@export')->name('professores.export');
Route::resource('professores', 'ProfessorController');