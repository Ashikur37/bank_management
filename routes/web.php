<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer','CustomerController@home')->name('customer.home');
Route::get('/cash-out','CustomerController@cashOut')->name('customer.cash.out');
Route::get('/pay-bill','CustomerController@payBill')->name('customer.pay.bill');
Route::get('/profile','CustomerController@profile')->name('customer.profile');
Route::get('/send-money-agent','CustomerController@sendMoneyAgent')->name('customer.send.agent');
Route::get('/send-money-bank','CustomerController@sendMoneyBank')->name('customer.send.bank');
Route::get('/send-money-customer','CustomerController@sendMoneyCustomer')->name('customer.send.customer');
Route::get('/send-money-mobile','CustomerController@sendMoneyMobile')->name('customer.send.mobile');
Route::get('/tax-payment','CustomerController@taxPayment')->name('customer.tax.payment');
Route::get('/transaction-history','CustomerController@transactionHistory')->name('customer.transaction.history');
Route::get('/signin','FrontController@login')->name('signin');
Route::get('/notice','FrontController@notice')->name('notice');
Route::get('/signup','FrontController@signup')->name('signup');
Route::get('/change-password','FrontController@changePassword')->name('change.password');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
