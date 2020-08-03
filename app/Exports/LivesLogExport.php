<?php

namespace App\Exports;

use App\livelog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromArray;
use App\Gamenet;
use Morilog\Jalali\Jalalian;

class LivesLogExport implements FromArray
{

    protected $so , $sf;

    function __construct($sf , $so)
    {
        $this->sf = $sf;
        $this->so = $so;


    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array() : array
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $data =  DB::table('gnet_live_logs')
        ->join('gnet_devices' , 'gnet_devices.gnet_device_id' , '=' , 'gnet_live_logs.gnet_device_id')
        ->where('gnet_live_logs.gnet_id' , $gnet_id)
        ->select()->orderBy($this->sf , $this->so)->get();
        $arr = [];
        $arr = [['نام دستگاه' , 'زمان شروع' , 'زمان پایان' , 'قیمت']];
        foreach($data as $d){
            $arr[] = [
                $d->device_name
                 , Jalalian::forge($d->start_time)->format('Y/m/d h:i:s  ')
                 , Jalalian::forge($d->end_time)->format('Y/m/d h:i:s')
                 , number_format($d->price)];
        }
        // dd($arr);
        return $arr;
    }
}
