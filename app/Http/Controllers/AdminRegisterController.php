<?php

namespace App\Http\Controllers;

use App\Gamenet;
use App\GamenetPic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdmin');
    }
    public function index(Request $request)
    {
        return view('Admin.register');
    }
    public function register(Request $request)
    {
        $mobile = $request->input('mobile');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $username = $request->input('username');
        $gamenettitle = $request->input('title');
        $gamenetaddress = $request->input('address');
        $gamenettel = $request->input('tel');
        $gamenetlat = $request->input('lat');
        $gamenetlong = $request->input('long');
        $gamenetdesc = $request->input('description');
        $image = $request->file('image');
        $confirm_code = rand(1000, 9999);

        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048000',

        ]);
        $db_user = User::where('mobile', $mobile)->first();
        if ($db_user == null) {
            $user = new User();
            $user->mobile = $mobile;
            $user->fname = $fname;
            $user->lname = $lname;
            $user->email = $email;
            $user->username = $username;
            $user->role_id = 1;
            $user->status_id = 3;
            $user->confirm_code = $confirm_code;

            if ($user->save()) {
                Auth::login($user);
                $gamenet = new Gamenet();
                $gamenet->title = $gamenettitle;
                $gamenet->user_id = $user->user_id;
                $gamenet->address = $gamenetaddress;
                $gamenet->tel = $gamenettel;
                $gamenet->lat = $gamenetlat;
                $gamenet->rate = 0;
                $gamenet->status = 0;
                $gamenet->approve = 0;
                $gamenet->long = $gamenetlong;
                $gamenet->description = $gamenetdesc;
                if ($gamenet->save()) {
                    if (validator()) {
                        $imageName = time() . '.' . request()->file('image')->getClientOriginalExtension();
                        $image->move(public_path('images'), $imageName);
                        $gpic = new GamenetPic();
                        $gpic->gnet_id = $gamenet->gamenet_id;
                        $gpic->flag = 'main';
                        $gpic->gamenet_image = 'images' . DIRECTORY_SEPARATOR . $imageName;
                        if($gpic->save()){
                            return view('confirm');
                        }
                    }
                }

            }
        } elseif ($db_user->status_id == 3) {
            $db_user->confirm_code = $confirm_code;
            if ($db_user->save()) {
                Auth::login($db_user);
                return view('Admin.confirm');
            }
        } else {
            return redirect()->back()->withErrors(['این شماره موبایل قبلا ثبت شده است.', 'msg']);
        }
    }
    public function confirm(Request $request)
    {

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
