<?php

namespace App\Http\Controllers\backend\TicketManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ManageTicketDetail extends Controller
{
    public Function managerticket(){
        return view('backend.ticketMng.manageTicket');
    }
    public Function manageTicketViewDetail(){
        return view('backend.ticketMng.manageTicketViewDetail');
    }
    public Function manageTicketEdit(){
        return view('backend.ticketMng.manageTicketEdit');
    }
}
