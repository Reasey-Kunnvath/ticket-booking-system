<?php

namespace App\Http\Controllers\backend\supportMessage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportMessgaeController extends Controller
{
    public function supportMessageDetail(){
        return view('backend.supportCenter.supportMeessage.supportMessageDetail');

    }
    public function supportMessageViewDetail(){
        return view('backend.supportCenter.supportMeessage.supportMessageViewDetail');

    }
    public function goinSupport(){
        return view('backend.supportCenter.supportMeessage.goinSupport');

    }
}
