<?php

namespace App\Http\Controllers\backend\TicketManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellingRequest extends Controller
{
    public function sellingRequest(){
        return view('backend.ticketMng.sellingRequest');
    }
    public function requestDetail(){
        return view('backend.ticketMng.requestDetail');
    }
}
