<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/crear_usuario', 'UsuariosController@crear_usuario')->name('crear.usuario');
Route::get('/usuarios', 'UsuariosController@usuarios')->name('ver.usuario');
Route::get('/eliminar_usuario', 'UsuariosController@destroy')->name('eliminar.usuario');

