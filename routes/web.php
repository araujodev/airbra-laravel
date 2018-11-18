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
//    \Illuminate\Support\Facades\Auth::logout();
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HospedagensController@index');

Route::resources([
    'reservas' => 'ReservasController',
    'comentarios' => 'ComentariosController',
    'hospedagens' => 'HospedagensController'
]);

Route::get('/meus-imoveis', 'HospedagensController@listar')->name('meus-imoveis');