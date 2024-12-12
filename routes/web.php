<?php

use Illuminate\Support\Facades\Route;
#BackEnd
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\TicketManager\SellingRequest;


#FrontEnd
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\AllEventController;
use App\Http\Controllers\frontend\ConcertController;
use App\Http\Controllers\frontend\ConferenceController;
use App\Http\Controllers\frontend\SportController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HelpController;

# For Frontend
Route::controller(FrontendController::class)->group(function(){
    Route::get('/','frontendindex')->name('Home');
});

Route::controller(AllEventController::class)->group(function(){
    Route::get('/all-event','AllEventindex')->name('All-Events');
});

Route::controller(ConcertController::class)->group(function(){
    Route::get('/concert','ConcertIndex')->name('Concert');
});

Route::controller(ConferenceController::class)->group(function(){
    Route::get('/conference','ConferenceIndex')->name('Conference');
});

Route::controller(SportController::class)->group(function(){
    Route::get('/sport','SportIndex')->name('Sport');
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about','AboutIndex')->name('About');
});

Route::controller(HelpController::class)->group(function(){
    Route::get('/help-center','HelpCenterIndex')->name('Help-Center');
});


# For Backend
Route::get('/admin', [BackendController::class, 'backendindex'])->name('admin');
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

#ticketManage
Route::get('/sellingRequest', [SellingRequest::class, 'sellingRequest'])->name('sellingRequest');


