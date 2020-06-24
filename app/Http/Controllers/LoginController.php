<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('CheckLogin');

    }

    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $passwordhash = Hash::make($password);

        $user = User::where('username' , $username )->orwhere('mobile' , $username)->first();

        if($user == null){
            return redirect()->back()->withErrors(['شما در سایت ثبت نام نکرده اید' , 'msg']);

        }
        else{
            if(Hash::check($password, $user->password)){
                Auth::login($user);
                return view('welcome');
            }else{
                return redirect()->back()->withErrors(['نام کاربری یا رمز عبور اشتباه است' , 'msg']);
            }
        }

    }

}
