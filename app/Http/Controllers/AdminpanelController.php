<?php

namespace App\Http\Controllers;

use App\Buffet;
use App\BuffetLog;
use App\buybuffetlog;
use App\DeviceGame;
use App\Devices;
use App\Devicesystem;
use App\DeviceType;
use App\Exports\FactorExport;
use App\Exports\LivesLogExport;
use App\Game;
use App\GameDevice;
use App\Gamenet;
use App\GamenetTemp;
use App\Invoice;
use App\live;
use App\livelog;
use App\lottery;
use App\LotteryMatch;
use App\lotteryuser;
use App\System;
use Carbon\Carbon;
use App\Possibilities;
use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Global_;
use Illuminate\Support\Facades\DB;
use App\GamenetReport;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\Response;

class AdminpanelController extends Controller
{

    public function __construct()
    {
        $this->middleware('CheckAdminLogin');

        session(['sortfieldlivelog' => 'gnet_live_log_id']);
        session(['sortorderlivelog' => 'asc']);
        session(['sortfieldfactor' => 'invoices.invoice_id']);
        session(['sortorderfactor' => 'asc']);
    }

    function convert_number($num)
    {

        $num = $num . "";

        $number_farsi = array(
            "۰" => "0",
            "۱" => "1",
            "۲" => "2",
            "۳" => "3",
            "۴" => "4",
            "۵" => "5",
            "۶" => "6",
            "۷" => "7",
            "۸" => "8",
            "۹" => "9",
            "٠" => "0",
            "١" => "1",
            "٢" => "2",
            "٣" => "3",
            "٤" => "4",
            "٥" => "5",
            "٦" => "6",
            "٧" => "7",
            "٨" => "8",
            "٩" => "9"
        );

        $numbers = preg_split('//u', $num);

        $result = "";
        foreach ($numbers as $number) {
            if (array_key_exists($number, $number_farsi)) {
                $result .= $number_farsi[$number];
            } else {
                $result .= $number;
            }
        }
        return $result;
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
            $buffets = Buffet::all();
            $falsedevices = Devices::select()->where('status', 0)->get();
            $approve = Gamenet::select()->where('gamenet_id', $gnet_id)->first();
            $message = '';
            $status = 0;
            switch ($approve->approve) {
                case '0':
                    $status = 0;
                    break;
                case '1':
                    $status = 1;
                    break;
                case '2':
                    $status = 2;
                    $report = GamenetReport::select()->where('gnet_id', $gnet_id)->first();
                    $message = $report->report;

                    break;
                default:
                    $message = 'ناموفق';
                    break;
            }
            $devices = Devices::select()->where('gnet_id', $gnet_id)->get();
            $onday = livelog::select()->whereDate('created_at', Carbon::today())->get();
            $onweek = livelog::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            $currentMonth = date('m');
            $onmonth = DB::table("gnet_live_logs")
                ->whereRaw('MONTH(created_at) = ?', [$currentMonth])
                ->get();
            $arraydevicesreport = [];
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
                $arraydevicesreport[$key] = [
                    'devicename' => $value->device_name,
                    'onday' => $dayprice,
                    'onweek' => $weekprice , 
                    'onmonth' => $monthprice
                ];
            }


            return view('Admin.index', compact('lives', 'falsedevices', 'buffets', 'status',  'message' , 'arraydevicesreport'));
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
                $systems =  Devicesystem::select()->get();
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
                $joystick_count = $request->input('joystick_count');

                $device = DeviceType::select()->where([['device_type_name_id', '=', $systemtype], ['joystick_count', '=', $joystick_count], ['gnet_id', '=', $gnet_id]])->get();

                if (count($device) > 0) {
                    return Response::json(array(
                        'code'      =>  450,
                        'message'   =>  'این دستگاه قبلا اضافه شده'
                    ), 450);
                } else {
                    $devicetype = new DeviceType();
                    $devicetype->device_type_name_id = $systemtype;
                    $devicetype->type_price = $price;
                    $devicetype->gnet_id = $gnet_id;
                    $devicetype->joystick_count = $joystick_count;
                    if ($devicetype->save()) {
                        return Response::json(array(
                            'code'      =>  200,
                            'message'   =>  'با موفقیت ثبت شد'
                        ), 200);
                    } else {
                        return Response::json(array(
                            'code'      =>  451,
                            'message'   =>  'مشکلی رخ داده است'
                        ), 451);
                    }
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
                $systems = Devicesystem::select()
                    ->whereIn('device_type_name_id', DeviceType::select('device_type_name_id')->where('gnet_id', $gnet_id)->get())->get();
                $mysystemtypes = Devices::select()
                    ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'gnet_devices.device_type_name_id')
                    ->where('gnet_devices.gnet_id', $gnet_id)
                    ->get();

                return view('Admin.createdevice', compact('systems', 'mysystemtypes'));
                break;
            case 'POST':
                $device_name = $request->input('device_name');
                $system_type = $request->input('system_type');

                $device = new Devices();
                $device->gnet_id = $gnet_id;
                $device->device_type_name_id = $system_type;
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
                $possibilities = Possibilities::select()->where('gnet_id', $gnet_id)->get();
                return view('Admin.creategame', compact('games', 'possibilities'));
                break;
            case 'POST':
                $gamename = $request->input('gamename');

                $game = new Game();
                $game->gnet_id = $gnet_id;
                $game->game_name = $gamename;
                if ($game->save()) {
                    return Response::json(array(
                        'code'      =>  200,
                        'message'   =>  'با موفقیت ثبت شد'
                    ), 200);
                }
                break;
            default:
                return -1;
        }
    }
    public function createpossibility(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $text = $request->input('possibilityname');
        $possibility = new Possibilities();
        $possibility->gnet_id = $gnet_id;
        $possibility->text = $text;
        if ($possibility->save()) {
            return Response::json(array(
                'code' => 200,
                'message' => 'با موفقیت ثبت شد'
            ), 200);
        } else {
            return -1;
        }
    }
    public function deletegame(Request $request)
    {
        $id = $request->input('id');

        $deletegame = Game::select()->where('gnet_game_id', $id)->delete();

        if ($deletegame) {
            return Response::json(array(
                'code' => '200',
                'message' => 'با موفقیت حذف شد'
            ), 200);
        } else {
            return -1;
        }
    }
    public function deletepossibility(Request $request)
    {
        $id = $request->input('id');

        $possibility = Possibilities::select()->where('possibility_id', $id)->delete();

        if ($possibility) {
            return Response::json(array(
                'code' => '200',
                'message' => 'با موفقیت حذف شد'
            ), 200);
        } else {
            return -1;
        }
    }

    public function editgame(Request $request)
    {
        $gameid = $request->input('gameid');
        $gamename = $request->input('gamename');
        $game = Game::select()->where('gnet_game_id', $gameid)->first();
        $game->game_name = $gamename;
        if ($game->save()) {
            return Response::json(array(
                'code' => '200',
                'message' => 'با موفقیت ویرایش شد'
            ), 200);
        } else {
            return -1;
        }
    }
    public function editpossibility(Request $request)
    {
        $possibilityid = $request->input('possibilityid');
        $possibilityname = $request->input('possibilityname');
        $possibility = Possibilities::select()->where('possibility_id', $possibilityid)->first();
        $possibility->text = $possibilityname;
        if ($possibility->save()) {
            return Response::json(array(
                'code' => '200',
                'message' => 'با موفقیت ویرایش شد'
            ), 200);
        } else {
            return -1;
        }
    }
    public function createbuffet(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $buffets =  Buffet::select()->where('gnet_id', $gnet_id)->get();
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
                $count = $request->input('count');
                $buffet = new Buffet();
                $buffet->buffet_name = $buffetname;
                $buffet->buffet_price = $price;
                $buffet->gnet_id = $gnet_id;
                $buffet->count = $count;
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
        $joystick_count = $request->input('joystick_count');
        $deviceid = $request->input('deviceid');
        $device = Devices::select()->where([['gnet_device_id', '=', $deviceid], ['gnet_id', '=', $gnet_id]])->first();
        $dtypenameid = $device->device_type_name_id;
        $devicetype = DeviceType::select()->where([['device_type_name_id', '=', $dtypenameid], ['joystick_count', '=', $joystick_count], ['gnet_id', '=', $gnet_id]])->first();
        if ($devicetype != null) {
            if ($request->method() == 'POST') {
                $invoicenum = $user->user_id
                    . Jalalian::forge('today')->format('%y')
                    . Jalalian::forge('today')->format('%m')
                    . Jalalian::forge('today')->format('%d')
                    . Jalalian::forge('now')->format('%H')
                    . Jalalian::forge('now')->format('%I')
                    . Jalalian::forge('now')->format('%S');
                $invoice = new Invoice();
                $invoice->gnet_id  = $gnet_id;
                $invoice->user_id  = $user->user_id;
                $invoice->invoice_num  = $invoicenum;
                $invoice->price = 0;

                if ($invoice->save()) {
                    $price = $request->input('price');

                    $live = new live();
                    $live->gnet_device_id = $deviceid;
                    $live->gnet_id = $gnet_id;
                    $live->invoice_id = $invoice->invoice_id;
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
        } else {
            return json_encode('تعداد دسته انتخابی شده صحیح نیست');
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
        $livelog->invoice_id = $live->invoice_id;
        $livelog->end_time = $now->toDateTimeString();
        $livelog->joystick_count = $live->joystick_count;

        $device = Devices::select()
            ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'gnet_devices.device_type_name_id')
            ->join('device_types', 'device_types.device_type_name_id', '=', 'device_type_names.device_type_name_id')
            ->where('gnet_devices.gnet_device_id', $live->gnet_device_id)->first();
        $deviceprice = $device->type_price;
        $typejoycount = $device->joystick_count;

        $start = strtotime($live->start_time);
        $end = strtotime($now);
        $mins = ((($end - $start) / 60) / 60) * $deviceprice;
        $price = $this->calculateprice($mins);

        // $jcount = $live->joystick_count;
        // if ($jcount == 0) {
        //     $mins = ((($end - $start) / 60) / 60) * $deviceprice;
        //     $price = $this->calculateprice($mins);
        // } else {
        //     $joystickprice  = $device->joystick_price;
        //     $mins = ((($end - $start) / 60) / 60) * $deviceprice + $jcount * $joystickprice;
        //     $price = $this->calculateprice($mins);
        // }
        $livelog->price = $price;
        if ($livelog->save()) {
            live::select()->where('gnet_live_id', $id)->delete();
            $device->status = 0;
            if ($device->save()) {
                $invoiceid = $livelog->invoice_id;
                $livelogsb = livelog::select()->join('gnet_devices', 'gnet_devices.gnet_device_id', '=', 'gnet_live_logs.gnet_device_id')->where('gnet_live_logs.invoice_id', $invoiceid)->get();
                $buffetsb = BuffetLog::select()->join('gnet_buffets', 'gnet_buffets.gnet_buffet_id', '=', 'buffet_logs.gnet_buffet_id')->where('buffet_logs.invoice_id', $invoiceid)->get();
                $invoicep = Invoice::select()->where('invoice_id', $invoiceid)->first();
                foreach ($livelogsb as $l) {
                    $invoicep->price += $l->price;
                    $invoicep->save();
                }
                foreach ($buffetsb as $b) {
                    $invoicep->price += $b->price;
                    $invoicep->save();
                }
                return response()->json([
                    'livelogs' => $livelogsb,
                    'buffets' => $buffetsb,
                    'invoice' => $invoicep
                ]);
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
        session(['sortfieldlivelog' => $sortSql]);
        session(['sortorderlivelog' => $sortOrder]);
        $livelogs = livelog::select()
            ->join('gnet_devices', 'gnet_devices.gnet_device_id', '=', 'gnet_live_logs.gnet_device_id')
            ->where('gnet_live_logs.gnet_id', $gnet_id)
            ->offset($offset)
            ->take($limit)
            ->orderBy($sortSql, $sortOrder)
            ->get();

        $livelogCount = livelog::select()->where('gnet_id', $gnet_id)->count();

        $arr = [];
        if ($sortOrder == 'asc') {
            $i = $offset;
        } else {
            $i = $livelogCount - $offset;
        }

        foreach ($livelogs as $l) {
            if ($sortOrder == 'asc') {
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

        return json_encode(['data' => $arr, 'itemsCount' => [$livelogCount]]);
    }
    public function getdatafactors(Request $request)
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
                $sortSql = "invoices.invoice_id";
                break;

            case 'شماره فاکتور':
                $sortSql = "invoices.invoice_num";
                break;
            case 'قیمت':
                $sortSql = "invoices.price";
                break;

            default:
                $sortSql = "invoices.invoice_id";
                $sortOrder = 'asc';
                break;
        }
        session(['sortfieldfactor' => $sortSql]);
        session(['sortorderfactor' => $sortOrder]);
        $invoice = invoice::select()
            ->where('gnet_id', $gnet_id)
            ->offset($offset)
            ->take($limit)
            ->orderBy($sortSql, $sortOrder)
            ->get();

        $invoicecount = invoice::select()->where('gnet_id', $gnet_id)->count();

        $arr = [];
        if ($sortOrder == 'asc') {
            $i = $offset;
        } else {
            $i = $invoicecount - $offset;
        }

        foreach ($invoice as $l) {
            if ($sortOrder == 'asc') {
                $rownum = ++$i;
            } else {
                $rownum = $i--;
            }

            $arr[] = [
                'ردیف' => $rownum,
                'شماره فاکتور' => $l->invoice_num,
                'قیمت' => number_format($l->price)
            ];
        }

        return json_encode(['data' => $arr, 'itemsCount' => [$invoicecount]]);
    }
    public function changelive(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $id = $request->input('live_id');
        $deviceid = $request->input('deviceid');
        $joystick_count = $request->input('joystick_count');
        $now = Carbon::now();
        $device = Devices::select()->where([['gnet_device_id', '=', $deviceid], ['gnet_id', '=', $gnet_id]])->first();
        $dtypenameid = $device->device_type_name_id;
        $devicetype = DeviceType::select()->where([['device_type_name_id', '=', $dtypenameid], ['joystick_count', '=', $joystick_count], ['gnet_id', '=', $gnet_id]])->first();
        if ($devicetype != null) {
            $live = live::select()->where('gnet_live_id', $id)->first();
            $livelog = new livelog();
            $livelog->gnet_id = $gnet_id;
            $livelog->gnet_device_id = $live->gnet_device_id;
            $livelog->start_time = $live->start_time;
            $livelog->invoice_id = $live->invoice_id;
            $livelog->end_time = $now->toDateTimeString();
            $livelog->joystick_count = $live->joystick_count;

            $device = Devices::select()
                ->join('device_type_names', 'device_type_names.device_type_name_id', '=', 'gnet_devices.device_type_name_id')
                ->join('device_types', 'device_types.device_type_name_id', '=', 'device_type_names.device_type_name_id')
                ->where('gnet_devices.gnet_device_id', $live->gnet_device_id)->first();
            $deviceprice = $device->type_price;

            $start = strtotime($live->start_time);
            $end = strtotime($now);
            $jcount = $live->joystick_count;
            $mins = ((($end - $start) / 60) / 60) * $deviceprice;

            $price = $this->calculateprice($mins);
            // if ($jcount == 0) {

            // } else {
            //     $joystickprice  = $device->joystick_price;
            //     $mins = ((($end - $start) / 60) / 60) * $deviceprice + $jcount * $joystickprice;

            //     $price = $this->calculateprice($mins);
            // }
            $livelog->price = $price;
            if ($livelog->save()) {
                $device = Devices::select()->where('gnet_device_id', $livelog->gnet_device_id)->first();
                $device->status = 0;
                if ($device->save()) {
                    $lives = new live();
                    $lives->gnet_device_id = $deviceid;
                    $lives->gnet_id = $gnet_id;
                    $lives->invoice_id = $live->invoice_id;
                    $lives->joystick_count = $joystick_count;
                    live::select()->where('gnet_live_id', $id)->delete();
                    if ($lives->save()) {
                        $devicet = Devices::select()->where('gnet_device_id', $lives->gnet_device_id)->first();
                        $devicet->status = 1;
                        if ($devicet->save()) {
                            return true;
                        }
                    } else {
                        return json_encode('مشکلی رخ داده است');
                    }
                }
            }
        } else {
            return json_encode('مشکلی رخ داده است');
        }
    }
    public function addbuffet(Request $request)
    {
        $buffet_live_id = $request->input('live_id');
        $buffetnames = $request->input('buffetnames');
        $counts = $request->input('counts');

        $live = live::select()->where('gnet_live_id', $buffet_live_id)->first();
        foreach ($buffetnames as $key => $value) {
            $buffet = Buffet::select()->where('gnet_buffet_id', $value)->first();
            $buffet->count = $buffet->count - $counts[$key];
            if ($buffet->save()) {
                $price = $buffet->buffet_price;
                $buffet_log = new BuffetLog();
                $buffet_log->count = $counts[$key];
                $buffet_log->invoice_id = $live->invoice_id;
                $buffet_log->gnet_buffet_id = $buffet->gnet_buffet_id;
                $buffet_log->price = $counts[$key] * $price;
                if ($buffet_log->save()) {
                    return true;
                }
            }
        }
    }
    public function createlottery(Request $request)
    {

        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $lotteries = lottery::all();
                return view('Admin.lottery', compact('lotteries'));
                break;
            case 'POST':
                $lottery_id = $request->input('lottery_id');
                $lotteryname = $request->input('lotteryname');
                $gametitle = $request->input('gamename');
                $award = $request->input('award');
                $price = $request->input('price');
                $image = $request->file('image');
                $desc = $request->input('desc');
                $date = $this->convert_number($request->input('date'));

                request()->validate([

                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048000',

                ]);

                if (validator()) {
                    if ($lottery_id == '') {
                        $imageName = time() . '.' . request()->file('image')->getClientOriginalExtension();

                        $image->move(public_path('images'), $imageName);
                        $lottery = new lottery();
                        $lottery->gnet_id = $gnet_id;
                        $lottery->lottery_name = $lotteryname;
                        $lottery->game_title = $gametitle;
                        $lottery->award_title = $award;
                        $lottery->lottery_price = $price;
                        $lottery->lottery_desc = $desc;
                        $lottery->date = $date;
                        $lottery->lottery_image = 'images' . DIRECTORY_SEPARATOR . $imageName;
                        if ($lottery->save()) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {
                        $lottery = lottery::select()->where('lottery_id', $lottery_id)->first();
                        $lottery->lottery_name = $lotteryname;
                        $lottery->game_title = $gametitle;
                        $lottery->award_title = $award;
                        $lottery->lottery_price = $price;
                        $lottery->lottery_desc = $desc;
                        $lottery->date = $date;
                        if ($image != '') {
                            $imageName = time() . '.' . request()->file('image')->getClientOriginalExtension();

                            $image->move(public_path('images'), $imageName);
                            $lottery->lottery_image = public_path('images') . DIRECTORY_SEPARATOR . $imageName;
                        }
                        if ($lottery->save()) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
        }
    }
    public function deletelottery(Request $request)
    {
        $id = $request->input('id');
        $dt = lottery::select()->where('lottery_id', $id)->delete();
        if ($dt) {
            return true;
        } else {
            return false;
        }
    }
    public function editlottery(Request $request)
    {
        $id = $request->input('id');
        $lottery = lottery::select()->where('lottery_id', $id)->first();
        return json_encode([$lottery]);
    }
    public function addlotteryuser(Request $request)
    {
        $lottery_id = $request->input('lottery_id');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $mobile = $request->input('mobile');

        $lottery = lottery::select()->where('lottery_id', $lottery_id)->first();
        $last_lottery_user = lotteryuser::where('lottery_id', $lottery_id)->orderBy('user_num', 'desc')->first();
        print_r($last_lottery_user);
        $lottery_user = new lotteryuser();
        $lottery_user->fname = $fname;
        $lottery_user->lname = $lname;
        $lottery_user->mobile = $mobile;
        if ($last_lottery_user == null) {
            $lottery_user->user_num = 1;
        } else {
            $lottery_user->user_num = $last_lottery_user->user_num + 1;
        }
        $lottery_user->lottery_id = $lottery_id;
        $lottery_user->user_id = 1;
        if ($lottery_user->save()) {
            return true;
        } else {
            return false;
        }
    }
    public function deletelotteryuser(Request $request)
    {
        $lottery_user_id = $request->input('id');

        $dlotteryuser = lotteryuser::select()->where('lottery_user_id', $lottery_user_id)->delete();
        if ($dlotteryuser) {
            return true;
        } else {
            return false;
        }
    }
    public function editlotteryuser(Request $request)
    {
        $id = $request->input('lottery_user_id');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $mobile = $request->input('mobile');

        $lottery_user = lotteryuser::select()->where('lottery_user_id', $id)->first();
        $lottery_user->fname = ($fname != null ? $fname : $lottery_user->fname);
        $lottery_user->lname = ($lname != null ? $lname : $lottery_user->lname);
        $lottery_user->mobile = ($mobile != null ? $mobile : $lottery_user->mobile);

        if ($lottery_user->save()) {
            return true;
        } else {
            return false;
        }
    }
    public function creatematch(Request $request)
    {
        $id = $request->input('id');

        $lottery_users = lotteryuser::where('lottery_id', $id)->orderBy('user_num', 'asc')->get();
        $lottery_users_count = count($lottery_users);
        if ($lottery_users_count % 2 != 0) {
            return false;
        }
        for ($i = 0; $i < $lottery_users_count; $i += 2) {
            $arr = array(
                array($lottery_users[$i]), array($lottery_users[$i + 1])
            );
            for ($j = 0; $j < count($arr); $j++) {
                $lottery_match = new LotteryMatch();
                $lottery_match->lottery_user_1 = $arr[0][0]['lottery_user_id'];
                $lottery_match->lottery_user_2 = $arr[1][0]['lottery_user_id'];
                $lottery_match->level = 1;
                $lottery_match->lottery_id = $id;
                if ($lottery_match->save()) {
                    break;
                }
            }
        }
    }
    public function exportexcellivelogs()
    {
        $sf = session('sortfieldlivelog');
        $so = session('sortorderlivelog');
        return FacadesExcel::download(new LivesLogExport($sf, $so), 'log.xlsx');
    }

    public function exportexcelfactors()
    {
        $sf = session('sortfieldfactor');
        $so = session('sortorderfactor');
        return FacadesExcel::download(new FactorExport($sf, $so), 'log.xlsx');
    }

    public function editprofile(Request $request)
    {
        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        switch ($request->method()) {
            case 'GET':
                $gamenet = Gamenet::select()
                    ->join('users', 'users.user_id', '=', 'gamenets.user_id')
                    ->where('gamenets.gamenet_id', $gnet_id)->first();
                $gamenet_temp = GamenetTemp::select()->where('gnet_id', $gnet_id)->first();

                return view('Admin.editinfo', compact('gamenet', 'gamenet_temp'));
                break;
            case 'POST':
                $gamenet_id = $request->input('gamenet_id');
                $gamenetname = $request->input('gamenetname');
                $address = $request->input('address');
                $desc = $request->input('desc');
                $tel = $request->input('tel');
                $lat = $request->input('lat');
                $lng = $request->input('long');
                $gamenet_s = Gamenet::select()->where('gamenet_id', $gnet_id)->first();
                $g_temp = GamenetTemp::select()->where('gnet_id', $gnet_id)->first();
                if ($g_temp == null) {
                    $gamenet_temp = new GamenetTemp();
                    $gamenet_temp->title = $gamenetname;
                    $gamenet_temp->address = $address;
                    $gamenet_temp->tel = $tel;
                    $gamenet_temp->lat = $lat;
                    $gamenet_temp->long = $lng;
                    $gamenet_temp->status = 0;
                    $gamenet_temp->rate = $gamenet_s->rate;
                    $gamenet_temp->approve = 0;
                    $gamenet_temp->description = $desc;
                    $gamenet_temp->gnet_id = $gnet_id;
                    $gamenet_temp->user_id = $user->user_id;
                    if ($gamenet_temp->save()) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }

                break;
            default:
                return -1;
        }
    }
    public function buffetcount(Request $request)
    {
        $id = $request->input('id');
        $buffet = Buffet::select()->where('gnet_buffet_id', $id)->first();
        return $buffet->count;
    }
    public function buybuffet(Request $request)
    {

        $user = Auth::user();
        $gnet = Gamenet::where('user_id', $user->user_id)->first();
        $gnet_id = $gnet->gamenet_id;
        $buffet_id = $request->input('buffetid');
        $count = $request->input('count');
        $buffet = Buffet::select()->where('gnet_buffet_id', $buffet_id)->first();
        if ($count <= $buffet->count) {
            $buffet->count = $buffet->count - $count;
            if ($buffet->save()) {
                $bbuffetlog = new buybuffetlog();
                $bbuffetlog->price = $buffet->buffet_price;
                $bbuffetlog->count = $count;
                $bbuffetlog->gnet_id = $gnet_id;
                $bbuffetlog->gnet_buffet_id     = $buffet_id;
                if ($bbuffetlog->save()) {
                    return Response::json(array(
                        'code' => 200,
                        'message' => 'با موفقیت ثبت شد'
                    ), 200);
                } else {
                    return Response::json(array(
                        'code' => 450,
                        'message' => 'خطایی رخ داده است '
                    ), 450);
                }
            } else {
                return Response::json(array(
                    'code' => 450,
                    'message' => 'مقدار وارد شده صحیح نیست '
                ), 450);
            }
        }
    }
}
