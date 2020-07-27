<?php

namespace App\Http\Controllers;

use App\Gamenet;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class superadmin extends Controller
{
    public function __construct()
    {
        $this->middleware('superadminlogin');
    }

    public function index()
    {
        $gamenets = Gamenet::select()
        ->join('users' , 'users.user_id' , '=' , 'gamenets.user_id')
        ->where('approve'  , 0)
        ->get();
        return view('superadmin.index' , compact('gamenets'));
    }
    public function gamenetdata(Request $request){
        $user_id = $request->input('id');
        $data = User::select()
        ->join('gamenets' , 'gamenets.user_id' , '='  , 'users.user_id')
        ->where('users.user_id' , $user_id)
        ->first();
        return json_encode($data);
    }
    public function Confirmation(Request $request){
        $user_id = $request->input('user_id');
        $mobile = $request->input('mobile');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $username = $request->input('username');
        $gamenettitle = $request->input('gamenet_name');
        $gamenetaddress = $request->input('address');
        $gamenettel = $request->input('tel');
        $gamenetlat = $request->input('lat');
        $gamenetlong = $request->input('long');
        $gamenetdesc = $request->input('desc');
        $user = User::select()->where('user_id' , $user_id)->first();
        $user->mobile = $mobile;
        $user->fname->$fname;
        $user->lname->$lname;
        $user->email->$email;
        $user->username->$username;
        if($user->save()){
            $gamenet  = Gamenet::select()->where('user_id' , $user_id)->first();
            $gamenet->title = $gamenettitle;
            $gamenet->address = $gamenetaddress;
            $gamenet->tel = $gamenettel;
            $gamenet->lat = $gamenetlat;
            $gamenet->long = $gamenetlong;
            $gamenet->description = $gamenetdesc;
            if($gamenet->save()){
                return true;
            }
        }
    }
}
