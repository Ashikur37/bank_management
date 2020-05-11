<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function login(){
        return view('front.login');
    }
    public function notice(){
        return view('front.notice');

    }
    public function signup(){
        return view('front.signup');

    }
    public function changePassword(){
        return view('front.changePassword');

    }
}
