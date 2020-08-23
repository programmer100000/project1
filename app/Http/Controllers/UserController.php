<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __cunstruct(){
        $this->middleware('CheckLogin');
    }
    public function editprofile(Request $request){
        $user = Auth::user();
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $username = $request->input('username');
        $mobile = $user->mobile;
        Request()->validate([
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required'
        ]);
        if(validator()){
            $user->fname = $fname;
            $user->lname = $lname;
            $user->username = $username;
            if($user->save()){
                return redirect()->route('user.panel');
            }
            else{
                return false;
            }
        }
    }
}
