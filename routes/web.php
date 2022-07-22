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
/*
//modificacion para configurar el adminlt
Route::get('/', function () {
    return view('auth.login');
});

*/

//ruta CRUD Origen

Route::resource('origens', App\Http\Controllers\OrigenController::class);
Route::resource('estd_conservas', App\Http\Controllers\EstdConservaController::class);
Route::resource('habitos', App\Http\Controllers\HabitoController::class);
Route::resource('tipos',App\Http\Controllers\TipoController::class);
Route::resource('sitios',App\Http\Controllers\SitioController::class);
Route::resource('estados',App\Http\Controllers\EstadoController::class);
Route::resource('raizs',App\Http\Controllers\RaizController::class);
Route::resource('arbolados',App\Http\Controllers\ArboladoController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
