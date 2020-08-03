<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
            $this->middleware('CheckAdmin');

    }

    public function index(){
        return view('Admin.login');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $passwordhash = Hash::make($password);
        request()->validate([
            'g-recaptcha-response' => 'required|captcha',

        ]);
        $user = User::where('username' , $username )->orwhere('mobile' , $username)->first();
        if(validator()){
            if($user == null){
                return redirect()->back()->withErrors(['شما در سایت ثبت نام نکرده اید' , 'msg']);

            }
            else{
                if(Hash::check($password, $user->password)){
                    Auth::login($user);
                    return redirect()->route('admin');
                }else{
                    return redirect()->back()->withErrors(['نام کاربری یا رمز عبور اشتباه است' , 'msg']);
                }
            }
        }
    }
}
