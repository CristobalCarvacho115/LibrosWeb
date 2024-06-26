<?php

//Cristóbal Carvacho
//Javiera Farias
//Matias Olmos

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\EditorialesController;


Route::get('/home',[HomeController::class,'index'])->name('home.index')->middleware('auth');
Route::get('/',[HomeController::class,'login'])->name('home.login');

Route::get('/generos',[GenerosController::class,'index'])->name('generos.index')->middleware('auth');
Route::post('/generos',[GenerosController::class,'store'])->name('generos.store');
Route::delete('/generos/{genero}',[GenerosController::class,'destroy'])->name('generos.destroy');
Route::get('/generos/{genero}/edit',[GenerosController::class,'edit'])->name('generos.edit')->middleware('auth');;
Route::put('/generos/{genero}',[GenerosController::class,'update'])->name('generos.update');

Route::get('/libros',[LibrosController::class,'index'])->name('libros.index')->middleware('auth');
Route::post('/libros',[LibrosController::class,'store'])->name('libros.store');
Route::delete('/libros/{libro}',[LibrosController::class,'destroy'])->name('libros.destroy');
Route::get('/libros/{libro}/edit',[LibrosController::class,'edit'])->name('libros.edit')->middleware('auth');;
Route::put('/libros/{libro}',[LibrosController::class,'update'])->name('libros.update');

Route::get('/editoriales',[EditorialesController::class,'index'])->name('editoriales.index')->middleware('auth');
Route::post('/editoriales',[EditorialesController::class,'store'])->name('editoriales.store');
Route::delete('/editoriales/{editorial}',[EditorialesController::class,'destroy'])->name('editoriales.destroy');
Route::get('/editoriales/{editorial}/edit',[EditorialesController::class,'edit'])->name('editoriales.edit')->middleware('auth');;
Route::put('/editoriales/{editorial}',[EditorialesController::class,'update'])->name('editoriales.update');

Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios.index')->middleware('auth');
Route::post('/usuarios',[UsuariosController::class,'store'])->name('usuarios.store');
Route::delete('/usuarios/{usuario}',[UsuariosController::class,'destroy'])->name('usuarios.destroy');
Route::get('/usuarios/{usuario}/edit',[UsuariosController::class,'edit'])->name('usuarios.edit')->middleware('auth');;
Route::put('/usuarios/{usuario}',[UsuariosController::class,'update'])->name('usuarios.update');

Route::post('usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');
