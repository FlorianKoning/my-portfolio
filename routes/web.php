<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Projects\PasswordManagerController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/contact', [HomeController::class, 'contact'])->name('home.contact');