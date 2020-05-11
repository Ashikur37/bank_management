<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home(){
        return view('customer.home');
    }
    public function cashOut(){
        return view('customer.cashOut');
    }
    public function payBill(){
        return view('customer.payBill');
    }
    public function profile(){
        return view('customer.profile');
    }
    public function sendMoneyAgent(){
        return view('customer.sendMoneyAgent');
    }
    public function sendMoneyBank(){
        return view('customer.sendMoneyBank');
    }
    public function sendMoneyMobile(){
        return view('customer.sendMoneyMobile');
    }
    public function sendMoneyCustomer(){
        return view('customer.sendMoneyCustomer');
    }
    public function taxPayment(){
        return view('customer.taxPayment');
    }
    public function transactionHistory(){
        return view('customer.transactionHistory');
    }


}
