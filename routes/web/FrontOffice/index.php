<?php

use App\Http\Controllers\web\ViewsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewsController::class, 'index'])->name('home');
Route::get('/about', [ViewsController::class, 'about'])->name('about');
Route::get('/portfolio', [ViewsController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');