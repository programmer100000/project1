<?php

namespace App\Exports;

use App\BuffetLog;
use App\livelog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromArray;
use App\Gamenet;
class FactorExport implements FromArray
{
    protected $sfo , $sff;

    function __construct($sff , $sfo)
    {
        $this->sf = $sff;
        $this->so = $sfo;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array() : array
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $data =  DB::table('invoices')->where('gnet_id' , $gnet_id)->orderBy($this->sf , $this->so)->get();
        $livelogsb = livelog::select()->join('gnet_devices', 'gnet_devices.gnet_device_id', '=', 'gnet_live_logs.gnet_device_id')->where('gnet_live_logs.gnet_id', $gnet_id)->get();


        $arrlogs =[];
        $arr = [];
        $arr = [['شماره فاکتور' , 'قیمت' , 'توضیحات']];
        foreach($data as $d){
            $strlivelog = '';
            $strbuffetlog = '';
            foreach($livelogsb as $l){
                if($l->invoice_id == $d->invoice_id){
                    $strlivelog .= 'نام دستگاه' . ":" . $l->device_name . "\n"
                        .'تعداد دسته' . ":" . $l->device_name . "\n"
                        .'تاریخ شروع' . ":" . $l->start_time . "\n"
                        .'تاریخ پایان' . ":" . $l->end_time . "\n"
                        .'قیمت' . ":" . $l->price . "\n";
                }
            }
            $buffetsb = BuffetLog::select()->join('gnet_buffets', 'gnet_buffets.gnet_buffet_id', '=', 'buffet_logs.gnet_buffet_id')->where('buffet_logs.invoice_id', $d->invoice_id)->get();
            foreach ($buffetsb as $b){
                if($b->invoice_id == $d->invoice_id){
                    $strbuffetlog .= 'نام خوراکی' . ":" . $b->buffet_name . "\n"
                        .'تعداد' . ":" . $b->count . "\n"
                        .'قیمت' . ":" . number_format($b->price);
                }
            }

            $arr[] = [
                $d->invoice_id
                 , number_format($d->price),
                $strlivelog . $strbuffetlog,
                ];
        }
//        dd($arr);
        // dd($arr);
        return $arr;
    }
}
