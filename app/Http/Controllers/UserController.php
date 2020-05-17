<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function signout(Request $request){
        return redirect('/');
    }
    public function signin(Request $request){

        $user=User::where('email','=',$request->email)->where('password','=',$request->password)->first();
        if($user){
            $request->session()->put('user', $user);
            if($user->type=='customer'){
                return redirect('/customer');
            }
            else{

            }
        }
        else{
            return redirect()->back()->withErrors([ 'Invalid email or password']);
        }
    }
    public function profile($id){
        $user=auth()->user();
        if(!$user){
            return redirect('login');
        }
        return view('user.profile',["user"=>$user]);
    }
    public function editProfile($id){
        $user=auth()->user();
        if(!$user){
            return redirect('login');
        }
        return view('user.editProfile',["user"=>$user]);
    }

    public function updatePassword(Request $request){
        $user= $request->session()->get('user');
        $request->validate([
            'prePassword' => ['required'],
            'newPassword' => ['required'],
            'conPassword' => ['required'],

        ]);
        if($request->prePassword!=$user->password){
            return redirect()->back()->withErrors([ 'Wrong Old password']);
        }
        if($request->newPassword!=$request->conPassword){
            return redirect()->back()->withErrors([ 'Password Doesnt Match']);

        }
        DB::table('users')
              ->where('email', $user->email)
              ->update(['password' => $request->newPassword
              ]);

         $user->password=$request->newPassword;
        //$user->save();

        return redirect('/profile');
    }
}
