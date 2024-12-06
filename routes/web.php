<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;

# For Frontend
Route::get('/home', [FrontendController::class, 'frontendindex'])->name('home');


# For Backend
Route::get('/admin', [BackendController::class, 'backendindex'])->name('admin');

