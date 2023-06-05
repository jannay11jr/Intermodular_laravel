<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio/inicio');
}) ->name ("inicio");


Route::get('/e_detalles', function () {
    return view('empresa.detalles.detalles');
}) ->name('detalle');

Route::get('/empresas/nuevaEmpresa', [EmpresaController::class, 'nuevaEmpresa']);
Route::get('/empresas/editarEmpresa/{id}', [EmpresaController::class, 'editarEmpresa']);


Route::resource ('empresas',EmpresaController::class);

Route::get('/empresas/{id}', [EmpresaController::class, 'show'])
->name('empresas.show');


Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
Route::resource('empresas', EmpresaController::class)->only(['index', 'show', 'create', 'edit', 'destroy']);
Route::resource('centros', CentroController::class)->only(['index', 'show', 'create', 'edit', 'destroy','store']);





Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'loginForm'])->name('login.login');


Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/centros/crear', [CentroController::class, 'create'])
    ->middleware('auth')
    ->name('centros.create');


    Route::get('/empresas', [EmpresaController::class, 'index'])
    ->middleware('auth')
    ->name('empresas.index');
