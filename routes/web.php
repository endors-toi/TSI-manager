<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');

Route::post('/propuestas', [PropuestaController::class, 'index'])->name('propuestas.index');
Route::get('/propuestas/{propuesta}', [PropuestaController::class, 'show'])->name('propuestas.show');
Route::post('/propuestas/create', [PropuestaController::class, 'create'])->name('propuestas.create');
Route::post('/propuestas/store', [PropuestaController::class, 'store'])->name('propuestas.store');
Route::get('/propuestas/{propuesta}/edit', [PropuestaController::class, 'edit'])->name('propuestas.edit');
Route::delete('/propuestas/{propuesta}', [PropuestaController::class, 'destroy'])->name('propuestas.destroy');

Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');

Route::get('/admins',[AdminController::class,'index'])->name('admins.index');
