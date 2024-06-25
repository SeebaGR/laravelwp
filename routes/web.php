<?php

use App\Http\Controllers\AsignarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChilexpressController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/client', ClientController::class)->names('cliente');
Route::resource('/roles', RoleController::class)->names('roles');
Route::resource('/permisos', PermisoController::class)->names('permisos');
Route::resource('/usuarios', AsignarController::class)->names('asignar');
Route::get('/get-rates', [ChilexpressController::class, 'getRates']);