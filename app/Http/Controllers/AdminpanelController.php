<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Auth;
class AdminpanelController extends Controller
{
    public function __construct()
    {
        //$this->middleware('CheckAdmin');

    }
    public function index(){
        $user = Auth::user();
        if(Auth::check() && $user->status_id == 1 && $user->role_id == 1){
            return view('Admin.index');
        }
        else{
            return redirect()->route('admin.login');
        }

    }
}
