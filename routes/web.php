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

// Route::get('/', ['uses'=> 'ControllerPages@index']);