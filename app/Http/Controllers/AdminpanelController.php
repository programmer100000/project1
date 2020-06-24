<?php

namespace App\Http\Controllers;

use App\Devices;
use App\Devicesystem;
use App\DeviceType;
use App\Gamenet;
use App\System;
use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Global_;
use Illuminate\Support\Facades\DB;

class AdminpanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');

    }
    public function index(){
        $user = Auth::user();
        if(Auth::check() && $user->status_id == 1 && $user->role_id == 1){
            return view('Admin.index');
        }
        else{
            return redirect()->route('admin.login');
        }
    }
    public function createsystem(Request $request){
        $user = Auth::user();
        $gnet = Gamenet::where('user_id' , $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch($request->method()){
            case 'GET':
                $systems =  Devicesystem::select()->whereNotIn('device_type_name_id', DeviceType::select('device_type_name_id')->where('gnet_id', $gnet_id))->get();
                $mysystemtypes = DeviceType::select()
                ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'device_types.device_type_name_id')
                ->where('gnet_id', $gnet_id)
                ->get();

                $systemtypes = Devicesystem::all();

                return view('Admin.createsystems' , compact('systems' , 'mysystemtypes', 'systemtypes'));
            break;
            case 'POST':
                $systemtype = $request->input('type');
                $price = $request->input('price');

                $devicetype = new DeviceType();
                $devicetype->device_type_name_id = $systemtype;
                $devicetype->type_price = $price;
                $devicetype->gnet_id = $gnet_id;
                if($devicetype->save()){
                    return json_encode('با موفقیت ثبت شد');
                }else{
                    return json_encode('مشکلی رخ داده است');
                }


            break;
            default:
                return -1;
        }
    }
    public function deletesystem(Request $request){
        $id = $request->input('id');
        $dt = DeviceType::select()->where('device_type_id' , $id)->get();
        $devicetype = DeviceType::select()->where('device_type_id' , $id)->delete();
        if($devicetype){
            $devices = Devices::select()->where('device_type_id' , $dt)->delete();

            return true;
        }
    }
    public function editsystem(Request $request){
        $device_type_id = $request->input('device_type_id');
        $type = $request->input('type');
        $price = $request->input('price');

        $devicetype = DeviceType::where('device_type_id' , $device_type_id)->first();
        $devicetype->device_type_name_id = $type;
        $devicetype->type_price = $price ;
        if($devicetype->save()){
            return true;
        }
    }

    public function createdevice(Request $request){
        $user = Auth::user();
        $gnet = Gamenet::where('user_id' , $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch($request->method()){
            case 'GET':
                $systems =  Devicesystem::select()
                ->join('device_types', 'device_types.device_type_name_id', '=', 'device_type_names.device_type_name_id')
                ->whereIn('device_types.device_type_name_id', DeviceType::select('device_type_name_id')->where('gnet_id', $gnet_id))->get();
                $mysystemtypes = Devices::select()
                ->join('device_types', 'gnet_devices.device_type_id', '=', 'device_types.device_type_id')
                ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'device_types.device_type_name_id')
                ->where('gnet_devices.gnet_id', $gnet_id)
                ->get();

                return view('Admin.createdevice' , compact('systems' , 'mysystemtypes'));
            break;
            case 'POST':
                $device_name = $request->input('device_name');
                $system_type = $request->input('system_type');

                $device = new Devices();
                $device->gnet_id = $gnet_id;
                $device->device_type_id = $system_type;
                $device->device_name = $device_name;
                $device->status = 0;

                if($device->save()){
                    return json_encode('با موفقیت ثبت شد');
                }else{
                    return json_encode('مشکلی رخ داده است');
                }


            break;
            default:
                return -1;
        }
    }
    public function deletedevice(Request $request){
        $id = $request->input('id');

        Devices::select()->where('gnet_device_id' , $id)->delete();
        return true;
    }

    public function editdevice(Request $request){
        $gnet_device_id = $request->input('gnet_device_id');
        $device_name = $request->input('device_name');
        $system_type = $request->input('system_type');

        $device = Devices::where('gnet_device_id' , $gnet_device_id)->first();
        $device->device_name = $device_name;
        $device->device_type_id = $system_type;
        if($device->save()){
            return true;
        } else {
            return false;
        }
    }
}
