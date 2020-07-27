<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class superadmin extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');

        
    }

    public function index()
    {
        return view('superadmin.index');
    }
}
