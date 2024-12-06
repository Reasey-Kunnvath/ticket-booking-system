<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendcontoller;
# For Frontend
Route::get('/', function () {
    return view("frontend.home.index");
});



# For Backend

Route::get('/admin', [backendcontoller::class, 'backendindex'])->name('admin');

