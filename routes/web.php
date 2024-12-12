<?php

use Illuminate\Support\Facades\Route;
#BackEnd
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\TicketManager\SellingRequest;


#FrontEnd
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\AllEventController;
use App\Http\Controllers\frontend\ConcertController;

# For Frontend
Route::controller(FrontendController::class)->group(function(){
    Route::get('/home','frontendindex')->name('Home');
});

Route::controller(AllEventController::class)->group(function(){
    Route::get('/all-event','AllEventindex')->name('All-Events');
});

Route::controller(ConcertController::class)->group(function(){
    Route::get('/concert','ConcertIndex')->name('Concert');
});



# For Backend
Route::get('/admin', [BackendController::class, 'backendindex'])->name('admin');
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

#ticketManage
Route::get('/sellingRequest', [SellingRequest::class, 'sellingRequest'])->name('sellingRequest');


