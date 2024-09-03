<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use GuzzleHttp\Middleware;

Route::group(['middleware'=>'setting'], function(){
    Route::get('/', [PageHomeController::class,'index'])->name('index');

    Route::get('/about', [PageController::class,'about'])->name('about');

    Route::get('/services', [PageController::class,'service'])->name('services');

    Route::get('/products', [PageController::class,'products'])->name('products');
    Route::get('/products/pro-detail', [PageController::class,'proDetails'])->name('proDetails');
    Route::get('/products/kartic', [PageController::class,'products'])->name('products');
    Route::get('/products/printer', [PageController::class,'products'])->name('products');
    Route::get('/products/toner', [PageController::class,'products'])->name('products');

    Route::get('/blog', [PageController::class,'blog'])->name('blog');

    Route::get('/contact', [PageController::class,'contact'])->name('contact');
    Route::post('/contact/save', [AjaxController::class,'contactForm'])->name('contact.form');

    Route::get('/form', [PageController::class,'form'])->name('form');
});

