<?php

use Illuminate\Support\Facades\Route;

# For Frontend
Route::get('/', function () {
    return view("frontend.home.index");
});



# For Backend
