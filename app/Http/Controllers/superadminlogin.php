<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class superadminlogin extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $passwordhash = Hash::make($password);
        switch ($request->method()) {
            case 'GET':
                return view('superadmin.login');
                break;
            case 'POST':
                $user = User::where('username', $username)->orwhere('mobile', $username)->first();

                if ($user == null) {
                    return redirect()->back()->withErrors(['شما در سایت ثبت نام نکرده اید', 'msg']);
                } else {
                    if (Hash::check($password, $user->password)) {
                        Auth::login($user);
                        return redirect()->route('superadmin');
                    } else {
                        return redirect()->back()->withErrors(['نام کاربری یا رمز عبور اشتباه است', 'msg']);
                    }
                }
                break;

            default:
                # code...
                break;
        }
    }
}
