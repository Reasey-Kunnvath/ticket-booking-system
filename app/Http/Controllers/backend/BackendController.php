<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function backendindex(){

        return view('backend.backIndex');
    }
    public function dashboard()
    {
        return view('backend.dashboard');
    }
    public function backendlogin()
    {
        return view('backend.login');
    }
}
