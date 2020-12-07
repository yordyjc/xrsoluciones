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

Route::middleware(['guest'])->group(function(){
    Route::get('/login','Auth\LoginController@ShowLoginForm')->name('login');
    Route::get('/', function () {
        return view('auth.login');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/sin-permiso', function (){
            return view('permiso');
        });
        Route::middleware(['admin'])->group( function(){
            Route::get('/', function () {
                return redirect('/admin/servicios');
            });
            Route::resource('/servicios','Admin\ServiciosController');
            Route::get('/servicio/{id}','Admin\ServiciosController@frmNuevoServicio');
            Route::resource('/checklist','Admin\ChecklistController');
            Route::get('/archivo/{id}','Admin\ArchivosController@frmNuevoArchivo');
            Route::resource('/archivos','Admin\ArchivosController');
            Route::get('/checklists/camioneta/{id}','Admin\ChecklistController@frmCamioneta');
            Route::resource('/usuarios','Admin\AdministradoresController');
            Route::resource('/categorias','Admin\CategoriasController');
            Route::resource('/clientes','Admin\ClientesController');
            Route::resource('/ordenes', 'Admin\OrdenesController');
            Route::post('/conductores/nuevo','Admin\ClientesController@nuevoConductor');
            Route::put('/conductores/{id}','Admin\ClientesController@editarConductor');
            Route::get('/conductores/{id}/edit','Admin\ClientesController@formEditarConductor');
            Route::get('/conductores/{id}','Admin\ClientesController@formConductor');
            Route::get('/nuevo','Admin\ServiciosController@obtener');
            Route::get('/servicios/ver-servicio/{id}','Admin\ServiciosController@verServicio');
            Route::get('ver/{id}','Admin\ServiciosController@hola');

            //reportes
            Route::get('/reporte/{id}','Admin\ReportesController@CheckList');
        });
    });
});

