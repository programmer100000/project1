<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Support\Facades\Auth;
use App\Gamenet;
use App\livelog;
use App\Devices;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class reportsexport implements FromArray

{
    protected $sdate , $fdate ;
    function __construct($startdate , $finishdate){
        $this->sdate = $startdate ;
        $this->fdate = $finishdate;
    }
    public function array():array
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $totalprice  = 0;
        $devices = Devices::select()->where('gnet_id', $gnet_id)
        ->get();
         $livelog = DB::table('gnet_live_logs')->whereBetween('created_at' , [$this->sdate ,$this->fdate])->get();
        $arr = [];
        $arr = [[
            'نام دستگاه',
            'درآمد',
            'تاریخ'
        ]];
        foreach ($devices as $key => $value) {
            $price = 0 ;
            $time = '';
            foreach ($livelog as $liv) {
                if($liv->gnet_device_id  == $value->gnet_device_id){
                    $price = $price + $liv->price;
                    $time = $liv->created_at;
                }

            }
            $totalprice = $totalprice + $price;
            $arr[] = [
                'devicename' => $value->device_name,
                'price' => number_format($price),
                'time' => Jalalian::forge($time)->format('h:i:s Y/m/d ')
            ];
           
        }
        $arr[] = [
            'devicename' => 'مجموع',
            'price' => $totalprice
        ];
        return $arr;

    }
}
