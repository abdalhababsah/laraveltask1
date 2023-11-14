<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsConroller;
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

Route::get('/layou', function () {
    return view('layouts.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsConroller::class,'index'])->name('product.index');
Route::get('/products/create', [ProductsConroller::class,'create'])->name('product.create');
Route::post('/products', [ProductsConroller::class,'store'])->name('product.store');
