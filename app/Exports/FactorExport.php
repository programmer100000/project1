<?php

namespace App\Exports;

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
        $arr = [];
        $arr = [['شماره فاکتور' , 'قیمت']];
        foreach($data as $d){
            $arr[] = [
                $d->invoice_id 
                 , number_format($d->price)];
        }
        // dd($arr);
        return $arr;
    }
}
