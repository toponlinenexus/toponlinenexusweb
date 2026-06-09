<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index']);
Route::redirect('index', '/');
Route::get('about-us',[HomeController::class,'aboutUs']);
Route::get('services',[HomeController::class,'services']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog-detail',[HomeController::class,'blogDetail']);
Route::get('feature',[HomeController::class,'feature']);
Route::get('testimonials',[HomeController::class,'testimonials']);
Route::get('quote',[HomeController::class,'quote']);
Route::post('quote',[HomeController::class,'submitQuote'])->name('quote.submit');
Route::get('careers',[HomeController::class,'careers']);
Route::get('contact',[HomeController::class,'contact']);
Route::post('contact',[HomeController::class,'submitContact'])->name('contact.submit');