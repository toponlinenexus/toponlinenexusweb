<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;


Route::get('/',[HomeController::class,'index']);
Route::redirect('index', '/');
Route::get('about-us',[HomeController::class,'aboutUs']);
Route::get('services',[HomeController::class,'services']);
Route::get('services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::redirect('services/seo-optimization', 'services/digital-marketing', 301);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog-detail',[HomeController::class,'blogDetail']);
Route::get('feature',[HomeController::class,'feature']);
Route::get('testimonials',[HomeController::class,'testimonials']);
Route::get('quote',[HomeController::class,'quote']);
Route::post('quote',[HomeController::class,'submitQuote'])->name('quote.submit');
Route::get('careers',[HomeController::class,'careers']);
Route::get('contact',[HomeController::class,'contact']);
Route::post('contact',[HomeController::class,'submitContact'])->name('contact.submit');