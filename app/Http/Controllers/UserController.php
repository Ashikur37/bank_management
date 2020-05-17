<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
    public function Signupverify(Request $req){

        $validatedData = $req->validate([
       'uname' => 'required|max:25|min:6|unique:users',
       'email' => 'required|max:70|min:8 |unique:users|regex:/(.+)@(.+)\.(.+)/i',
       'password' => 'required|max:12|min:6',
      'cpassword' => 'required_with:password|same:password|min:6',
       'phone' => 'required|max:16|min:11|unique:users',

            ]);
        $data=array();

        $data['uname']=$req->uname;
        $data['gender']=$req->gender;
        $data['email']=$req->email;
        $data['phone']=$req->phone;
        $data['status']="active";
        $data['password']=$req->password;
        $data['gender']=$req->gender;
        $data['balance']='300';
        $data['status']='active';
        $data['type']="customer";

        if (1==1)
        {

               $data['image']="";
               DB::table('users')->insert($data);
                return redirect()->route('signin')->with('success' , 'Signup successfully done');

        }
       else
           {
              DB::table('users')->insert($data);
               return redirect()->back();
           }

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
