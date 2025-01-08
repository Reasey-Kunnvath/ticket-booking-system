<?php

use Illuminate\Support\Facades\Route;
#BackEnd
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\TicketManager\ManagePromoteCode;
use App\Http\Controllers\backend\TicketManager\SellingRequest;
use App\Http\Controllers\backend\TicketManager\ManageTicketDetail;
#FrontEnd
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\AllEventController;
use App\Http\Controllers\frontend\ConcertController;
use App\Http\Controllers\frontend\ConferenceController;
use App\Http\Controllers\frontend\SportController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HelpController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\SellYourTicketController;
use Illuminate\Database\Capsule\Manager;

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

Route::controller(CartController::class)->group(function(){
    Route::get('/cart-checkout','CartIndex')->name('Cart-Checkout');
});

Route::controller(SellYourTicketController::class)->group(function(){
    Route::get('/sell-your-ticket','SellYourTicketIndex')->name('Sell-Your-Ticket');
});





# For Backend
Route::get('/admin', [BackendController::class, 'backendindex'])->name('admin');
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

#ticketManage
#selellingRequest
Route::get('/sellingRequest', [SellingRequest::class, 'sellingRequest'])->name('sellingRequest');
Route::get('/requestDetail', [SellingRequest::class, 'requestDetail'])->name('requestDetail');

#ManageTicket
Route::get('/managerticket', [ManageTicketDetail::class, 'managerticket'])->name('managerticket');
Route::get('/manageTicketViewDetail', [ManageTicketDetail::class, 'manageTicketViewDetail'])->name('manageTicketViewDetail');
Route::get('/manageTicketEdit', [ManageTicketDetail::class, 'manageTicketEdit'])->name('manageTicketEdit');

#ManagePromoteCode
Route::get('/manageProCodeDetail', [ManagePromoteCode::class, 'manageProCodeDetail'])->name('manageProCodeDetail');

