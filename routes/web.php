<?php

use App\Http\Controllers\Config\MenuController;
use App\Http\Controllers\Config\MenuRolController;
use App\Http\Controllers\Config\RolController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Intranet\IntranetPagesController;
use App\Http\Middleware\Administrador;
use App\Http\Middleware\AdminSistema;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/', [IntranetPagesController::class, 'dashboard'])->name('dashboard');
    //===================================================================================================
    Route::prefix('configuracion_sis')->group(function () {
        Route::middleware(AdminSistema::class)->group(function () {
            Route::controller(MenuController::class)->prefix('menu')->group(function () {
                Route::get('', 'index')->name('menu.index');
                Route::get('guardar-orden', 'guardarOrden')->name('menu.ordenar');
            });
            // ------------------------------------------------------------------------------------
            // Ruta Administrador del Sistema Roles
            Route::controller(RolController::class)->prefix('rol')->group(function () {
                Route::get('', 'index')->name('rol.index');
                Route::get('crear', 'create')->name('rol.create');
                Route::get('editar/{id}', 'edit')->name('rol.edit');
                Route::post('guardar', 'store')->name('rol.store');
                Route::put('actualizar/{id}', 'update')->name('rol.update');
                Route::delete('eliminar/{id}', 'destroy')->name('rol.destroy');
            });
            // ----------------------------------------------------------------------------------------
            /* Ruta Administrador del Sistema Menu Rol*/
            Route::controller(MenuRolController::class)->prefix('permisos_menus_rol')->group(function () {
                Route::get('', 'index')->name('menu.rol.index');
                Route::post('guardar', 'store')->name('menu.rol.store');
            });
            // ----------------------------------------------------------------------------------------
        });
        Route::middleware(Administrador::class)->group(function () {

        });
    });
    //===================================================================================================
});
