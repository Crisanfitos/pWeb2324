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


/* Route::view('/', 'miPagina'); */

Route::get('/Cristian', function () {
    include('CristianPublico.html');
})->name('home');

Route::get('/CristianPrivado', function () {
    return response()->file(base_path('practicas') . '\CristianPrivado.html');
})->name('test');

Route::get('/paginaPersonal/{nombre?}', function ($nombre) {

    return view('/themes/temaGrupo1/templates/paginaPersonalGrupo1', compact('nombre'));
});

Route::view('/test', 'header');
Route::view('/cristian', 'index');
Route::view('/equipo', 'teamProfile');

Route::view('/test2', 'test');

Route::view('/',                'home')->name('home');
Route::view('/servicios',           'service');
Route::view('/servicios/locales',   'locals');
Route::view('/servicios/productos', 'products');
Route::view('/conocenos',           'knowUs');
Route::view('/contacto',            'contact');
Route::view('/user',                'user');
Route::view('/user/consumer',       'consumerEntry');
Route::view('/user/local',          'localEntry');
Route::view('/user/productor',      'producerEntry');
