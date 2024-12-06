<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendcontoller extends Controller
{
    public function backendindex(){

            return view('backend.backIndex');


    }
}


