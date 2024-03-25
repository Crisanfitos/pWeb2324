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

Route::get('/', function () {
    return redirect( route('inicio'));
});
Route::view('/inicio',                                          '/main/inicio')                                            ->name('inicio');
Route::view('/servicios',                                       '/main/servicios')                                         ->name('servicios');
Route::view('/servicios/puestoId',                              '/main/serviciosPuestoId')                                 ->name('serviciosPuestoId');
Route::view('/sobreNosotros',                                   '/main/sobreNosotros')                                     ->name('sobreNosotros');
Route::view('/contacto',                                        '/main/contacto')                                          ->name('contacto');

Route::view('/consumidor',                                      '/consumidor/consumidor')                                  ->name('consumidor');
Route::view('/consumidor/loginRegister',                        '/consumidor/consumidorLoginRegister')                     ->name('consumidorLoginRegister');
Route::view('/consumidor/perfil',                               '/consumidor/consumidorPerfil')                            ->name('consumidorPerfil');
Route::view('/consumidor/perfil/editar',                        '/consumidor/consumidorPerfilEditar')                      ->name('consumidorPerfilEditar');
Route::view('/consumidor/entregas',                             '/consumidor/consumidorEntregas')                          ->name('consumidorEntregas');
Route::view('/consumidor/entregas/resenapuestoID',              '/consumidor/consumidorEntregasResenaPuestoId')            ->name('consumidorEntregasResenaPuestoID');
Route::view('/consumidor/afluencia',                            '/consumidor/consumidorAfluencia')                         ->name('consumidorAfluencia');

Route::view('/puesto',                                          '/puesto/puesto')                                          ->name('puesto');
Route::view('/puesto/loginRegister',                             '/puesto/puestoLoginRegister')                            ->name('puestoLoginRegister');
Route::view('/puesto/perfil',                                   '/puesto/puestoPerfil')                                    ->name('puestoPerfil');
Route::view('/puesto/perfil/editar',                            '/puesto/puestoPerfilEditar')                              ->name('puestoPerfilEditar');
Route::view('/puesto/catalogo',                                 '/puesto/puestoCatalogo')                                  ->name('puestoCatalogo');
Route::view('/puesto/realizarPedido',                           '/puesto/puestoRealizarPedido')                            ->name('puestoRealizarPedido');
Route::view('/puesto/realizarPedido/productoIdProductorId',     '/puesto/puestoRealizarPedidoProductoIdProductorId')       ->name('puestoRealizarPedidoProductoIdProductorId');
Route::view('/puesto/entregas',                                 '/puesto/puestoEntregas')                                  ->name('puestoEntregas');
Route::view('/puesto/temp',                                     '/puesto/puestoTemp')                                      ->name('puestoTemp');

Route::view('/productor',                                       '/productor/productor')                                    ->name('productor');
Route::view('/productor/loginRegister',                          '/productor/productorLoginRegister')                      ->name('productorLoginRegister');
Route::view('/productor/perfil',                                '/productor/productorPerfil')                              ->name('productorPerfil');
Route::view('/productor/perfil/editar',                         '/productor/productorPerfilEditar')                        ->name('productorPerfilEditar');
Route::view('/productor/catalogo',                              '/productor/productorCatalogo')                            ->name('productorCatalogo');
Route::view('/productor/catalogo/editar',                       '/productor/productorCatalogoEditar')                      ->name('productorCatalogoEditar');
Route::view('/productor/pedidos',                               '/productor/productorPedidos')                             ->name('productorPedidos');



