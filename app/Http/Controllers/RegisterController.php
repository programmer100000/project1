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

        request()->validate([
            'g-recaptcha-response' => 'required|captcha',

        ]);
        $db_user = User::where('mobile' , $mobile)->first();
        if(validator()){
            if($db_user == null){
                $user = new User();
                $user->mobile = $mobile;
                $user->role_id = 2 ;
                $user->status_id = 3;
                $user->confirm_code = $confirm_code;
                $this->sendsms($mobile,$confirm_code);
                if($user->save()){
                    Auth::login($user);
                    return view('confirm');
                }
            }
            elseif ($db_user->status_id == 3){
                $db_user->confirm_code = $confirm_code;
                if($db_user->save()){
                    Auth::login($db_user);
                    return redirect()->route('confirm');
                }
            }
            else {
                return redirect()->back()->withErrors(['این شماره موبایل قبلا ثبت شده است.' , 'msg']);

            }
        }


    }

    public function confirm(Request $request){
        $user = Auth::user();
        switch($request->method()){
            case 'GET':
                if($user == null){
                    return redirect()->route('register');
                }else{
                    return view('confirm');
                }
            break;
            case 'POST':

                $user_confirm_code = $user->confirm_code;
                $confirm_code = $request->input('confirm');
                $password = $request->input('password');
                $passwordd = $request->input('passwordd');
                if($user_confirm_code == $confirm_code && $password == $passwordd){
                    $user->status_id = 1;
                    $user->password = Hash::make($password);
                    if($user->save()){
                        return redirect()->route('home');
                    }
                    else{
                        return redirect()->back()->withErrors(['رمز ها با هم یکی نیست ' , 'msg']);
        
                    }
                }
                else{
                    return redirect()->back()->withErrors(['کد وارد شده صحیح نیست ' , 'msg']);
                }
            break;
            default:
                    return "nothing";
        break;
        }


    }
    public function sendsms($mobile , $code){
        try{
            
            $api = new \Kavenegar\KavenegarApi( "576A7043685356796B4A4F304474703731734D70667061795165616A6D727644364A5254353430456739733D" );
            $sender = "10004346";
            $message = "کد فعالسازی شما:" . $code;
            $receptor = array($mobile);
            $result = $api->Send($sender,$receptor,$message);
            if($result){
                foreach($result as $r){
                    return $r->status;
                }		
            }
        }
        catch(\Kavenegar\Exceptions\ApiException $e){
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            echo $e->errorMessage();
        }
        catch(\Kavenegar\Exceptions\HttpException $e){
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            echo $e->errorMessage();
        }
    }
}
