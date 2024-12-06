<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BackendController;
# For Frontend
Route::get('/', function () {
    return view("frontend.home.index");
});



# For Backend
Route::get('/admin', [BackendController::class, 'backendindex'])->name('admin');

