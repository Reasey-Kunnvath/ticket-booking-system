<?php

namespace App\Http\Controllers\backend\TicketManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ManagePromoteCode extends Controller
{
    public function manageProCodeDetail(){
        return view('backend.ticketMng.managePromoteCode');
    }
}
