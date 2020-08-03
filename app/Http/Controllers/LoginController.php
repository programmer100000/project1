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

    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $passwordhash = Hash::make($password);

        $user = User::where('username', $username)->orwhere('mobile', $username)->first();
        request()->validate([
            'g-recaptcha-response' => 'required|captcha',

        ]);
        if(validator()){
            if ($user == null) {
                return redirect()->back()->withErrors(['شما در سایت ثبت نام نکرده اید', 'msg']);
            } else {
                if (Hash::check($password, $user->password)) {
                    Auth::login($user);
                    return view('welcome');
                } else {
                    return redirect()->back()->withErrors(['نام کاربری یا رمز عبور اشتباه است', 'msg']);
                }
            }
        }

    }
    public function forgetpassword(Request $request)
    {
        switch ($request->method()) {
            case 'GET':
                return view('forgetpassword');
                break;
            case 'POST':
                $mobile = $request->input('mobile');
                $confirm_code = rand(1000, 9999);
                $db_user = User::where('mobile', $mobile)->first();
                request()->validate([
                    'g-recaptcha-response' => 'required|captcha',

                ]);
                if(validator()){
                    if ($db_user == null) {
                        return redirect()->back()->withErrors(['شما در سایت ثبت نام نکرده اید', 'msg']);
                        // } elseif ($db_user->status_id == 3) {
                        //     return redirect()->back()->withErrors(['وضعیت شما در سایت معلق است لطفا از صفحه ی ثبت نام دوباره اقدام کنید', 'msg']);
                    } else {
                        $db_user->confirm_code = $confirm_code;
                        $db_user->status_id = 3 ;
                        if($db_user->save()){
                            Auth::login($db_user);
                            $this->sendsms($mobile,$confirm_code);
                            return view('confirm');
                        }

                    }
                }
                break;
            default:
                return false;
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
    public function forgetpasswordconfirm(Request $request){
        switch ($request->method()){
            case 'GET':
                return view('forgetpasswordconfirm');
            break;
            case 'POST':
                $user = Auth::user();
                $user_confirm_code = $user->confirm_code;
                $confirm_code = $request->input('confirm_code');
                $password = $request->input('password');
                $passwordd = $request->input('passwordd');
                if ($user_confirm_code == $confirm_code && $password == $passwordd) {
                    $user->status_id = 1;
                    $user->password = Hash::make($password);
                    $user->save();
                    return redirect()->route('admin');
                } else {
                    return "no";
                }
        }
    }
}
