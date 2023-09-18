<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::get('/',[ProductosController::class,'index'])->name('productos.index');
Route::get('/crear',[ProductosController::class,'create'])->name('productos.create');
Route::post('/store',[ProductosController::class,'store'])->name('productos.store');
Route::get('/editar/{id}',[ProductosController::class,'edit'])->name('productos.edit');
Route::post('/update/{id}',[ProductosController::class,'update'])->name('productos.update');
Route::get('/eliminar/{id}',[ProductosController::class,'destroy'])->name('productos.destroy');
