<?php

use Illuminate\Support\Facades\Route;

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

//ruta CRUD Origen

Route::resource('origens','App\Http\Controllers\OrigenController');
Route::resource('estd_conservas','App\Http\Controllers\EstdConservaController');
Route::resource('habitos', 'App\Http\Controllers\HabitoController');
Route::resource('tipos','App\Http\Controllers\TipoController');
Route::resource('sitios','App\Http\Controllers\SitioController');
Route::resource('estados','App\Http\Controllers\EstadoController');
Route::resource('raizs','App\Http\Controllers\RaizController');
Route::resource('arbolados','App\Http\Controllers\ArboladoController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
