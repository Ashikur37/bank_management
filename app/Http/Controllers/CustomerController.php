<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function profile(Request $request){

        $user= $request->session()->get('user');
        return view('customer.profile',["user"=>$user]);
    }
    public function updateProfile(Request $request){
        $user= $request->session()->get('user');
        DB::table('users')
              ->where('email', $user->email)
              ->update(['gender' => $request->gender,
              'phone' =>$request->phone,
              'uname' =>$request->uname,
              'email' => $request->email,
              ]);
         $user->phone=$request->phone;
         $user->uname=$request->uname;
         $user->email=$request->email;
         $user->gender=$request->gender;
        //$user->save();

        return redirect('/profile');
    }
    public function sendMoneyAgent(){
        return view('customer.sendMoneyAgent');
    }
    public function sendMoneyToAgent(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "phone"=>'required',
            "pin"=>'required'
        ]);
        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);
              $user->balance-=$request->amount;
        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]=$request->phone;
        $data["amount"]=$request->amount;
        $data["ttype"]="agent";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
    }
    public function sendMoneyToCashout(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "transaction_id"=>'required',
            "pin"=>'required'
        ]);
        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);
              $user->balance-=$request->amount;
        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]=$request->transaction_id;
        $data["amount"]=$request->amount;
        $data["ttype"]="cash out";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
    }
    public function sendMoneyToTax(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "transaction_id"=>'required',
            "pin"=>'required'
        ]);
        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);
              $user->balance-=$request->amount;
        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]=$request->transaction_id;
        $data["amount"]=$request->amount;
        $data["ttype"]="tax";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
    }
    public function sendMoneyToBill(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "transaction_id"=>'required',
            "pin"=>'required'
        ]);
        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);
              $user->balance-=$request->amount;
        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]=$request->transaction_id;
        $data["amount"]=$request->amount;
        $data["ttype"]="bill";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
    }
    public function sendMoneyBank(){
        return view('customer.sendMoneyBank');
    }
    public function sendMoneyToBank(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "bank_name"=>'required',
            "bank_account"=>'required',
            "pin"=>'required'
        ]);
        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);
              $user->balance-=$request->amount;
        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]="";
        $data["amount"]=$request->amount;
        $data["bname"]=$request->bank_name;
        $data["bacc"]=$request->bank_account;
        $data["ttype"]="bank";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
    }
    public function sendMoneyToMobile(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "phone"=>'required',
            "pin"=>'required'
        ]);
        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);
              $user->balance-=$request->amount;
        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]=$request->phone;;
        $data["amount"]=$request->amount;
        $data["ttype"]="topup";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
    }
    public function sendMoneyToCustomer(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            "amount"=>'required',
            "email"=>'required',
            "pin"=>'required'
        ]);

        if($request->pin!=$user->password){
            return redirect()->back()->withErrors([ 'Invalid pin']);
        }
        if($request->amount>$user->balance){
            return redirect()->back()->withErrors([ 'Insufficient Balance']);
        }
        $r=DB::table('users')
              ->where('email', $request->email)->get();
        if(count($r)==0){
            return redirect()->back()->withErrors([ 'No Receiver Found']);

        }
        $user->balance-=$request->amount;
        DB::table('users')
              ->where('email', $user->email)
              ->update(['balance' =>$user->balance-$request->amount
              ]);

              DB::table('users')
              ->where('email', $request->email)->update(['balance' =>$r[0]->balance+$request->amount
              ]);

        $data=array();
        $data["uid"]=$user->uid;
        $data["reciever"]=$request->email;;
        $data["amount"]=$request->amount;
        $data["ttype"]="send money";
        DB::table('transaction')->insert($data);
        return redirect('transaction-history');
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
    public function deleteTransaction(Request $request)
    {
        $user= $request->session()->get('user');
        if($request->type=="Delete"){
            for($i=0;$i<count($request->tid);$i++){
                DB::table('transaction')->where('tid', $request->tid[$i])->delete();
            }
        return redirect('transaction-history');

        }
        else{
            $histories=DB::table('transaction')->whereIn('tid',$request->tid)->get();
            return view('customer.printHistory',["histories"=>$histories,"user"=>$user]);
        }
    }
    public function transactionHistory(Request $request){
        $user= $request->session()->get('user');
        $histories=DB::table('transaction')->where('uid','=',$user->uid)->get();
        return view('customer.transactionHistory',["histories"=>$histories,"user"=>$user]);
    }


}
