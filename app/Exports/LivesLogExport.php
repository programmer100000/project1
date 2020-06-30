<?php

namespace App\Exports;

use App\livelog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Gamenet;
class LivesLogExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        return DB::table('gnet_live_logs')
        ->join('gnet_devices' , 'gnet_devices.gnet_device_id' , '=' , 'gnet_live_logs.gnet_device_id')
        ->where('gnet_live_logs.gnet_id' , $gnet_id)
        ->select(
            'gnet_devices.device_name as نام دستگاه',
            'start_time','end_time','joystick_count', 'price'
        )->get();
    }
}
