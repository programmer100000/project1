<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use App\Devices;
use Illuminate\Support\Facades\Auth;
use App\livelog;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Gamenet;


class ReportExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array() : array
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $devices = Devices::select()->where('gnet_id', $gnet_id)->get();
        $onday = livelog::select()->whereDate('created_at', Carbon::today())->get();
        $onweek = livelog::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $currentMonth = date('m');
        $onmonth = DB::table("gnet_live_logs")
            ->whereRaw('MONTH(created_at) = ?', [$currentMonth])
            ->get();
        $arraydevicesreport = [];
        $arraydevicesreport = [['نام دستگاه' , 'درآمد امروز' , 'درآمد هفته', 'درآمد ماه' ]];
        foreach ($devices as $key => $value) {
            $dayprice = 0 ;
            $weekprice = 0 ;
            $monthprice = 0;
            foreach ($onday as $day) {
                if ($day->gnet_device_id == $value->gnet_device_id) {
                    $dayprice = $dayprice +$day->price;
                }
            }
            foreach($onweek as $week){
                if($week->gnet_device_id == $value->gnet_device_id){
                    $weekprice = $weekprice +$week->price;
                }
            }
            foreach($onmonth as $month){
                if($month->gnet_device_id == $value->gnet_device_id){
                    $monthprice = $monthprice +$month->price;
                }
            }
            $arraydevicesreport[] = [
                'devicename' => $value->device_name,
                'onday' => number_format($dayprice),
                'onweek' => number_format($weekprice) ,
                'onmonth' => number_format($monthprice)
            ];
        }
        return $arraydevicesreport;
    }
}
