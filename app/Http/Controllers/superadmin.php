<?php

namespace App\Http\Controllers;

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
        return view('superadmin.index');
    }

}
