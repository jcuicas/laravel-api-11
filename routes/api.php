<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('todos-productos/',[ProductoController::class, 'getProducstAll'])->name('todos-productos');
Route::get('un-producto/{id}', [ProductoController::class, 'getProductOnly'])->name('un-producto');
Route::get('productos-pagina/', [ProductoController::class, 'getProductPaginate'])->name('productos-pagina');
Route::get('todas-categorias/', [CategoriaController::class, 'getCategoryAll'])->name('todas-categorias');
Route::get('una-categoria/{id}', [CategoriaController::class, 'getCategoryOnly'])->name('una-categoria');
Route::get('productos-categorias/', [ProductoController::class, 'getProductsCategory'])->name('productos-categorias');
Route::get('productos-por-categorias/{idcategoria}', [ProductoController::class, 'getProductsByCategory'])->name('productos-por-categorias');
