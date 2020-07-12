<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Gamenet;
class FactorExport implements FromCollection
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
    public function collection()
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        return DB::table('invoices')->where('gnet_id' , $gnet_id)->orderBy($this->sf , $this->so)->get();
    }
}
