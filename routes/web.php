<?php

use Illuminate\Support\Facades\Route;
#BackEnd
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\TicketManager\ManagePromoteCode;
use App\Http\Controllers\backend\TicketManager\SellingRequest;
use App\Http\Controllers\backend\TicketManager\ManageTicketDetail;
#FrontEnd

use Illuminate\Database\Capsule\Manager;

use App\Http\Controllers\frontend\{
    FrontendController,
    AllEventController,
    ConcertController,
    ConferenceController,
    SportController,
    AboutController,
    HelpController,
    CartController,
    EventDetailController,
    MostPopularController,
    SellYourTicketController,
    UpcomingController,
    UserProfileController
};

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

Route::controller(UpcomingController::class)->group(function(){
    Route::get('/upcoming-event','UpcomingIndex')->name('Upcoming-Events');
});

Route::controller(MostPopularController::class)->group(function(){
    Route::get('/most-popular-event','MostPopularIndex')->name('Most-Popular-Events');
});

Route::controller(EventDetailController::class)->group(function(){
    Route::get('/event-detail','EventDetailIndex')->name('Event-Detail');
});

# Frontend - User Profile
Route::controller(UserProfileController::class)->group(function(){
    Route::get('/user-profile','UserProfileIndex')->name('User-Profile');
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

