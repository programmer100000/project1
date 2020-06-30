<?php

namespace App\Http\Controllers;

use App\Buffet;
use App\DeviceGame;
use App\Devices;
use App\Devicesystem;
use App\DeviceType;
use App\Exports\LivesLogExport;
use App\Game;
use App\GameDevice;
use App\Gamenet;
use App\live;
use App\livelog;
use App\System;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Global_;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use Morilog\Jalali\Jalalian;

class AdminpanelController extends Controller
{

    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
    }

    //show dashboard admin page
    public function index()
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        if (Auth::check() && $user->status_id == 1 && $user->role_id == 1) {
            $lives = live::select()->join('gnet_devices', 'gnet_devices.gnet_device_id', '=', 'gnet_lives.gnet_device_id')
                ->where('gnet_lives.gnet_id', $gnet_id)->get();
            $falsedevices = Devices::select()->where('status', 0)->get();
            return view('Admin.index', compact('lives', 'falsedevices'));
        } else {
            return redirect()->route('admin.login');
        }
    }


    //Create/Delete/Edit System Page

    public function createsystem(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $systems =  Devicesystem::select()->whereNotIn('device_type_name_id', DeviceType::select('device_type_name_id')->where('gnet_id', $gnet_id))->get();
                $mysystemtypes = DeviceType::select()
                    ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'device_types.device_type_name_id')
                    ->where('gnet_id', $gnet_id)
                    ->get();

                $systemtypes = Devicesystem::all();

                return view('Admin.createsystems', compact('systems', 'mysystemtypes', 'systemtypes'));
                break;
            case 'POST':
                $systemtype = $request->input('type');
                $price = $request->input('price');
                $joystick_price = $request->input('joystick_price');

                $devicetype = new DeviceType();
                $devicetype->device_type_name_id = $systemtype;
                $devicetype->type_price = $price;
                $devicetype->gnet_id = $gnet_id;
                $devicetype->joystick_price = $joystick_price;
                if ($devicetype->save()) {
                    return json_encode('با موفقیت ثبت شد');
                } else {
                    return json_encode('مشکلی رخ داده است');
                }


                break;
            default:
                return -1;
        }
    }
    public function deletesystem(Request $request)
    {
        $id = $request->input('id');
        $dt = DeviceType::select()->where('device_type_id', $id)->first();
        $devicetype = DeviceType::select()->where('device_type_id', $id)->delete();
        if ($devicetype) {
            $devices = Devices::select()->where('device_type_id', $dt)->delete();

            return true;
        }
    }
    public function editsystem(Request $request)
    {
        $device_type_id = $request->input('device_type_id');
        $type = $request->input('type');
        $price = $request->input('price');

        $devicetype = DeviceType::where('device_type_id', $device_type_id)->first();
        $devicetype->device_type_name_id = $type;
        $devicetype->type_price = $price;
        if ($devicetype->save()) {
            return true;
        }
    }

    //Create/Delete/Edit device Page

    public function createdevice(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $systems =  Devicesystem::select()
                    ->join('device_types', 'device_types.device_type_name_id', '=', 'device_type_names.device_type_name_id')
                    ->whereIn('device_types.device_type_name_id', DeviceType::select('device_type_name_id')->where('gnet_id', $gnet_id))->get();
                $mysystemtypes = Devices::select()
                    ->join('device_types', 'gnet_devices.device_type_id', '=', 'device_types.device_type_id')
                    ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'device_types.device_type_name_id')
                    ->where('gnet_devices.gnet_id', $gnet_id)
                    ->get();

                return view('Admin.createdevice', compact('systems', 'mysystemtypes'));
                break;
            case 'POST':
                $device_name = $request->input('device_name');
                $system_type = $request->input('system_type');

                $device = new Devices();
                $device->gnet_id = $gnet_id;
                $device->device_type_id = $system_type;
                $device->device_name = $device_name;
                $device->status = 0;

                if ($device->save()) {
                    return json_encode('با موفقیت ثبت شد');
                } else {
                    return json_encode('مشکلی رخ داده است');
                }


                break;
            default:
                return -1;
        }
    }
    public function deletedevice(Request $request)
    {
        $id = $request->input('id');

        Devices::select()->where('gnet_device_id', $id)->delete();
        return true;
    }

    public function editdevice(Request $request)
    {
        $gnet_device_id = $request->input('gnet_device_id');
        $device_name = $request->input('device_name');
        $system_type = $request->input('system_type');

        $device = Devices::where('gnet_device_id', $gnet_device_id)->first();
        $device->device_name = $device_name;
        $device->device_type_id = $system_type;
        if ($device->save()) {
            return true;
        } else {
            return false;
        }
    }

    //Create/Delete/Edit Game Page


    public function creategame(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $games =  Game::select()->where('gnet_id', $gnet_id)->get();
                $mydevices = Devices::select()
                    ->join('device_types', 'gnet_devices.device_type_id', '=', 'device_types.device_type_id')
                    ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'device_types.device_type_name_id')
                    ->where('gnet_devices.gnet_id', $gnet_id)
                    ->get();
                $systemtypes = Devices::select();

                return view('Admin.creategame', compact('games', 'mydevices', 'systemtypes'));
                break;
            case 'POST':
                $devices = $request->input('devices');
                $gamename = $request->input('gamename');

                $game = new Game();
                $game->gnet_id = $gnet_id;
                $game->game_name = $gamename;
                if ($game->save()) {
                    foreach ($devices as $item) {
                        $game_device = new GameDevice();
                        $game_device->gnet_game_id = $game->gnet_game_id;
                        $game_device->gnet_device_id = $item;
                        $game_device->save();
                    }
                }
                break;
            default:
                return -1;
        }
    }
    public function deletegame(Request $request)
    {
        $id = $request->input('id');

        $deletegame = Game::select()->where('gnet_game_id', $id)->delete();

        if ($deletegame) {
            GameDevice::select()->where('gnet_game_id', $id)->delete();
            return true;
        } else {
            return false;
        }
    }

    public function editgame(Request $request)
    {
        $gnet_device_id = $request->input('gnet_device_id');
        $device_name = $request->input('device_name');
        $system_type = $request->input('system_type');

        $device = Devices::where('gnet_device_id', $gnet_device_id)->first();
        $device->device_name = $device_name;
        $device->device_type_id = $system_type;
        if ($device->save()) {
            return true;
        } else {
            return false;
        }
    }
    public function createbuffet(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $buffets =  Buffet::all();
                $mysystemtypes = DeviceType::select()
                    ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'device_types.device_type_name_id')
                    ->where('gnet_id', $gnet_id)
                    ->get();

                $systemtypes = Devicesystem::all();

                return view('Admin.createbuffet', compact('buffets', 'mysystemtypes', 'systemtypes'));
                break;
            case 'POST':
                $buffetname = $request->input('buffetname');
                $price = $request->input('price');

                $buffet = new Buffet();
                $buffet->buffet_name = $buffetname;
                $buffet->buffet_price = $price;
                $buffet->gnet_id = $gnet_id;
                if ($buffet->save()) {
                    return json_encode('با موفقیت ثبت شد');
                } else {
                    return json_encode('مشکلی رخ داده است');
                }


                break;
            default:
                return -1;
        }
    }
    public function deletebuffet(Request $request)
    {
        $id = $request->input('id');
        $buffet = Buffet::select()->where('gnet_buffet_id', $id)->delete();

        if ($buffet) {
            return true;
        } else {
            return false;
        }
    }
    public function editbuffet(Request $request)
    {
        $gnet_buffet_id = $request->input('gnet_buffet_id');
        $buffetname = $request->input('buffetname');
        $price = $request->input('price');

        $buffet = Buffet::where('gnet_buffet_id', $gnet_buffet_id)->first();
        $buffet->buffet_name = $buffetname;
        $buffet->buffet_price = $price;
        if ($buffet->save()) {
            return true;
        }
    }

    public function createlive(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        if ($request->method() == 'POST') {
            $deviceid = $request->input('deviceid');
            $price = $request->input('price');
            $joystick_count = $request->input('joystick_count');

            $live = new live();
            $live->gnet_device_id = $deviceid;
            $live->gnet_id = $gnet_id;
            $live->joystick_count = $joystick_count;
            if ($live->save()) {
                $device = Devices::select()->where('gnet_device_id', $deviceid)->first();
                $device->status = 1;
                if ($device->save()) {
                    return true;
                }
            } else {
                return json_encode('مشکلی رخ داده است');
            }
        }
    }
    public function deletelive(Request $request)
    {
        $id = $request->input('id');

        $live = live::select()->where('gnet_live_id', $id)->first();
        $device = Devices::select()->where('gnet_device_id', $live->gnet_device_id)->first();
        $device->status = 0;
        if ($device->save()) {
            $live->delete();
        }
    }
    public function finishlive(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $now = Carbon::now();
        $id = $request->input('id');

        $live = live::select()->where('gnet_live_id', $id)->first();
        $livelog = new livelog();
        $livelog->gnet_id = $gnet_id;
        $livelog->gnet_device_id = $live->gnet_device_id;
        $livelog->start_time = $live->start_time;
        $livelog->end_time = $now->toDateTimeString();
        $livelog->joystick_count = $live->joystick_count;

        $device = Devices::select()
            ->join('device_types', 'device_types.device_type_id', '=', 'gnet_devices.device_type_id')
            ->where('gnet_device_id', $live->gnet_device_id)->first();
        $deviceprice = $device->type_price;

        $start = strtotime($live->start_time);
        $end = strtotime($now);
        $mins = ((($end - $start) / 60) / 60) * $deviceprice;
        $jcount = $live->joystick_count;
        if ($jcount == 1) {
            $price = $this->calculateprice($mins);
        } else {
            $joystickprice  = $device->joystick_price;
            $price = $this->calculateprice($mins);
            $price += $jcount * $joystickprice;
        }
        $livelog->price = $price;
        if ($livelog->save()) {
            live::select()->where('gnet_live_id', $id)->delete();
            $device->status = 0;
            if ($device->save()) {
                return true;
            }
        } else {
            return false;
        }
    }
    public function calculateprice($number)
    {
        $ss = ceil($number);

        $baqimande = $ss % 1000;
        $aslepolBdoneKhord = $ss - $baqimande;

        if ($baqimande <= 500) {
            $aslepolBdoneKhord += 500;
        } else {
            $aslepolBdoneKhord += 1000;
        }
        return $aslepolBdoneKhord;
    }

    public function exportexcel()
    {
        return FacadesExcel::download(new LivesLogExport, 'log.xlsx');
    }

    public function getdata(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;

        $limit = intval($request->input('pageSize'));
        $offset = (intval($request->input('pageIndex')) - 1) * $limit;
        $sortField = $request->input('sortField');
        $sortOrder = $request->input('sortOrder');

        $sortSql = "";
        switch ($sortField) {
            case 'ردیف':
                $sortSql = "gnet_live_logs.gnet_live_log_id";
            break;

            case 'نام دستگاه':
                $sortSql = "gnet_devices.device_name";
            break;

            case 'زمان شروع':
                $sortSql = "gnet_live_logs.start_time";
            break;

            case 'زمان پایان':
                $sortSql = "gnet_live_logs.end_time";
            break;

            case 'قیمت':
                $sortSql = "gnet_live_logs.price";
            break;

            default:
                $sortSql = "gnet_live_logs.gnet_live_log_id";
                $sortOrder = 'asc';
                break;
        }
        $livelogs = livelog::select()
        ->join('gnet_devices' , 'gnet_devices.gnet_device_id' , '=' , 'gnet_live_logs.gnet_device_id')
        ->where('gnet_live_logs.gnet_id' , $gnet_id)
        ->offset($offset)
        ->take($limit)
        ->orderBy($sortSql, $sortOrder)
        ->get();

        $livelogCount = livelog::select()->where('gnet_id', $gnet_id)->count();

        $arr = [];
        if($sortOrder == 'asc'){
            $i = $offset;
        } else {
            $i = $livelogCount - $offset;
        }

        foreach($livelogs as $l){
            if($sortOrder == 'asc'){
                $rownum = ++$i;
            } else {
                $rownum = $i--;
            }

            $arr[] = [
                'ردیف' => $rownum,
                'نام دستگاه' => $l->device_name,
                'زمان شروع' => Jalalian::forge($l->start_time)->format('Y/M/d h:i:s'),
                'زمان پایان' => Jalalian::forge($l->end_time)->format('Y/M/d h:i:s'),
                'قیمت' => number_format($l->price)
            ];
        }

        return json_encode(['data'=>$arr, 'itemsCount'=> [$livelogCount]]);
    }
}
