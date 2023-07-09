<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

Route::get('/', function () {
    return view('index');
});
Route::get('/products', [productcontroller::class,'index'])->name('product.index');
Route::get('/products/create',[productcontroller::class,'create'])->name('product.create');
Route::post('/products',[productcontroller::class,'store'])->name('product.store');
Route::get('/products/{product}/edit',[productcontroller::class,'edit'])->name('product.edit');
Route::put('/products/{product}/update',[productcontroller::class,'update'])->name('product.update');
Route::delete('/products/{product}/delete',[productcontroller::class,'delete'])->name('product.delete');

