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

Route::get('/estudiante',[EstudianteController::class,'index'])->name('estudiante.index');
Route::post('/estudiante/propuesta/', [PropuestaController::class, 'index'])->name('estudiante.propuesta.index');
Route::get('/estudiante/propuesta/show', [PropuestaController::class, 'show'])->name('estudiante.propuesta.show');
Route::post('/estudiante/propuesta/create', [PropuestaController::class, 'create'])->name('estudiante.propuesta.create');
Route::post('/estudiante/propuesta/store', [PropuestaController::class, 'store'])->name('estudiante.propuesta.store');
Route::get('/estudiante/propuesta/edit', [PropuestaController::class, 'edit'])->name('estudiante.propuesta.edit');
Route::delete('/estudiante/propuesta/destroy', [PropuestaController::class, 'destroy'])->name('estudiante.propuesta.destroy');

Route::get('/profesor',[ProfesorController::class,'index'])->name('profesor.index');

Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
