<?php

namespace App\Http\Controllers;

use App\Gamenet;
use App\GamenetReport;
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
            ->join('users', 'users.user_id', '=', 'gamenets.user_id')
            ->where('approve', '!=' ,  1)
            ->get();
        return view('superadmin.index', compact('gamenets'));
    }
    public function gamenetdata(Request $request)
    {
        $user_id = $request->input('id');
        $data = User::select()
            ->join('gamenets', 'gamenets.user_id', '=', 'users.user_id')
            ->where('users.user_id', $user_id)
            ->first();
        return json_encode($data);
    }
    public function Confirmation(Request $request)
    {
        $user_id = $request->input('user_id');
        $mobile = $request->input('mobile');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $username = $request->input('username');
        $gamenettitle = $request->input('gamenet_name');
        $gamenetaddress = $request->input('address');
        $gamenettel = $request->input('tel');
        $gamenetlat = 0;
        $gamenetlong = 0;
        $gamenetdesc = $request->input('desc');
        $user = User::select()->where('user_id', $user_id)->first();
        $user->mobile = $mobile;
        $user->fname = $fname;
        $user->lname = $lname;
        $user->email = $email;
        $user->username = $username;
        if ($user->save()) {
            $gamenet  = Gamenet::select()->where('user_id', $user_id)->first();
            $gamenet->title = $gamenettitle;
            $gamenet->address = $gamenetaddress;
            $gamenet->tel = $gamenettel;
            $gamenet->lat = $gamenetlat;
            $gamenet->long = $gamenetlong;
            $gamenet->description = $gamenetdesc;
            $gamenet->approve = 1;
            if ($gamenet->save()) {
                GamenetReport::select()->where('gnet_id' , $gamenet->gamenet_id)->delete();
                return true;
            }
        }
    }
    public function disapproval(Request $request)
    {
        $user_id = $request->input('user_id_report');
        $report_message = $request->input('report');
        $gamenet = Gamenet::select()->where('user_id', $user_id)->first();
        $report = GamenetReport::select()->where('gnet_id', $gamenet->gamenet_id)->first();
        $gamenet->approve = 2;
        if ($gamenet->save()) {
            if ($report == null) {
                $newreport = new GamenetReport();
                $newreport->gnet_id = $gamenet->gamenet_id;
                $newreport->report = $report_message;
                if ($newreport->save()) {
                    return true;
                } else {
                    return false;
                }
            } else {
                $report->report = $report_message;
                if ($report->save()) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }
}
