<?php

namespace App\Http\Controllers;

use App\Gamenet;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Rate;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function rate(Request $request)
    {
        $gnet_id = $request->input('id');
        $rateval = $request->input('rate');

        $user = Auth::user();
        if (Auth::check() && $user->status_id == 1) {
            $rate = Rate::select()->where([['gnet_id', '=', $gnet_id], ['user_id', '=', $user->user_id]])->first();
            if ($rate == null) {
                $new_rate = new Rate();
                $new_rate->gnet_id = $gnet_id;
                $new_rate->user_id = $user->user_id;
                $new_rate->rate = $rateval;
                if ($new_rate->save()) {
                    $rates = Rate::select()->where('gnet_id', $gnet_id)->get();
                    $rate_count = $rates->count();
                    $totalrate = 0;
                    foreach ($rates as $r) {
                        $totalrate += $r->rate;
                    }
                    $rate = $totalrate / $rate_count;
                    $gamenet = Gamenet::select()->where('gamenet_id' , $gnet_id)->first();
                    $gamenet->rate = $rate;
                    if($gamenet->save()){
                        return true;
                    }
                } else {
                    return false;
                }
            } else {
                return 'قبلا امتیاز داده اید';
            }
        } else {
            return 'برای امتیاز دادن به گیم نت لطفا وارد شوید';
        }
    }
}
