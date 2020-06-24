<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Symfony\Component\Console\Input\Input;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('CheckLogin');

    }
    public function index(){
        $user = Auth::user();
        if(Auth::check() && $user->status_id == 1 ){
            return "an";
        }else{
            return view('register');
        }
    }
    public function register(Request $request){
        $mobile = $request->input('mobile');
        $confirm_code = rand(1000 , 9999);

        $db_user = User::where('mobile' , $mobile)->first();
            if($db_user == null){
                $user = new User();
                $user->mobile = $mobile;
                $user->role_id = 2 ;
                $user->status_id = 3;
                $user->confirm_code = $confirm_code;

                if($user->save()){
                    Auth::login($user);
                    return view('confirm');
                }
            }
            elseif ($db_user->status_id == 3){
                $db_user->confirm_code = $confirm_code;
                if($db_user->save()){
                    Auth::login($db_user);
                    return view('confirm');
                }
            }
            else {
                return redirect()->back()->withErrors(['این شماره موبایل قبلا ثبت شده است.' , 'msg']);

            }

    }

    public function confirm(Request $request){

        $user = Auth::user();
        $user_confirm_code = $user->confirm_code;
        $confirm_code = $request->input('confirm_code');
        $password = $request->input('password');
        $passwordd = $request->input('passwordd');
        if($user_confirm_code == $confirm_code && $password == $passwordd){
            $user->status_id = 1;
            $user->password = Hash::make($password);
            $user->save();
            return view('admin.index');
        }
        else{
            return "no";
        }

    }
}
