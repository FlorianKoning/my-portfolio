<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cms\CmsHomeController;
use App\Http\Controllers\Projects\PasswordManagerController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/contact', [HomeController::class, 'contact'])->name('home.contact');


// * Cms auth routes
Route::middleware('auth')->group(function () {
    Route::get('/cms', [CmsHomeController::class, 'index'])->name('cmsl.index');
});


// * Auth routes.
require __DIR__.'/auth.php';
