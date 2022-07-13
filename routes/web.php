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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);


Route::get('product/create', [\App\Http\Controllers\ProductController::class, 'create']);

Route::get('product/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');


Route::get('category/product/{product}', [\App\Http\Controllers\ProductController::class, 'removeCategory'])->name('category.product.delete');