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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contato/{id?}', ['uses' => 'ControllerContato@Index']);
Route::post('/contato', ['uses' => 'ControllerContato@Create']);
Route::put('/contato', ['uses' => 'ControllerContato@Alter']);

Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'Admin\ControllerCurso@Index'] );
Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'Admin\ControllerCurso@Adicionar'] );
Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'Admin\ControllerCurso@Salvar'] );
Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'Admin\ControllerCurso@Editar'] );
Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'Admin\ControllerCurso@Atualizar'] );
Route::get('/admin/cursos/remover/{id}', ['as' => 'admin.cursos.remover', 'uses' => 'Admin\ControllerCurso@Remover'] );



// Route::get('/', ['uses'=> 'ControllerPages@index']);