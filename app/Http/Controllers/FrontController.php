<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function login(){
        return view('front.login');
    }
    public function notice(){
        $notices=DB::table('notices')->get();
        return view('front.notice',['notices'=>$notices]);

    }
    public function signup(){
        return view('front.signup');

    }
    public function changePassword(){
        return view('front.changePassword');

    }
}
