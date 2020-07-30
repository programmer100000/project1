<?php

use App\Http\Controllers\AdminLoginController;
use App\lottery;
use App\LotteryMatch;
use App\lotteryuser;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Gamenet;
use App\GamenetBk;
use App\GamenetPic;
use App\GamenetTemp;
use App\Rate;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $gamenets_active = Gamenet::select()
        ->join('gamenet_pictures', 'gamenet_pictures.gamenet_picture_id', '=', 'gamenets.gamenet_id')
        ->where(['gamenets.approve' => 1, 'gamenet_pictures.flag' => 'main'])->get();
    return view('index', compact('gamenets_active'));
})->name('home');

// super admin
Route::get('/superadmin', 'superadmin@index')->name('superadmin');
Route::get('/superadmin/login', 'superadminlogin@login')->name('superadmin.login');
Route::post('/superadmin/login', 'superadminlogin@login')->name('superadmin.login');
Route::post('/gamenet/data', 'superadmin@gamenetdata')->name('gamenet.data');
Route::post('/gamenet/Confirmation', 'superadmin@Confirmation')->name('gamenet.Confirmation');
Route::post('/gamenet/disapproval', 'superadmin@disapproval')->name('gamenet.disapproval');


/*Admin Routes*/
Route::get('/admin', 'AdminpanelController@index')->name('admin');
Route::get('/admin/create/system', 'AdminpanelController@createsystem')->name('create.system');
Route::post('/admin/create/system', 'AdminpanelController@createsystem')->name('create.system');
Route::post('/admin/create/system/json', 'AdminpanelController@createsystem_tbl')->name('json.system');
Route::post('/admin/delete/system', 'AdminpanelController@deletesystem')->name('delete.system');
Route::post('/admin/edit/system', 'AdminpanelController@editsystem')->name('edit.system');
Route::get('/admin/edit/info', 'AdminpanelController@editprofile')->name('edit.profile');
Route::post('/admin/edit/info', 'AdminpanelController@editprofile')->name('edit.profile');
Route::get('/admin/create/lottery', 'AdminpanelController@createlottery')->name('create.lottery');
Route::post('/admin/create/lottery', 'AdminpanelController@createlottery')->name('create.lottery');
Route::post('/admin/delete/lottery', 'AdminpanelController@deletelottery')->name('delete.lottery');
Route::post('/admin/edit/lottery', 'AdminpanelController@editlottery')->name('edit.lottery');

Route::post('/admin/add/lottery/user', 'AdminpanelController@addlotteryuser')->name('add.lottery.user');

Route::post('/admin/lottery/user/delete', 'AdminpanelController@deletelotteryuser')->name('delete.lottery.user');
Route::post('/admin/create/match', 'AdminpanelController@creatematch')->name('create.match');

Route::get('/admin/create/buffet', 'AdminpanelController@createbuffet')->name('create.buffet');
Route::post('/admin/create/buffet', 'AdminpanelController@createbuffet')->name('create.buffet');
Route::post('/admin/delete/buffet', 'AdminpanelController@deletebuffet')->name('delete.buffet');
Route::post('/admin/edit/buffet', 'AdminpanelController@editbuffet')->name('edit.buffet');

Route::get('/admin/create/device', 'AdminpanelController@createdevice')->name('create.device');
Route::post('/admin/create/device', 'AdminpanelController@createdevice')->name('create.device');
Route::post('/admin/delete/device', 'AdminpanelController@deletedevice')->name('delete.device');
Route::post('/admin/edit/device', 'AdminpanelController@editdevice')->name('edit.device');
Route::post('/admin/edit/lottery/user', 'AdminpanelController@editlotteryuser')->name('edit.lottery.user');

Route::post('/admin/create/live', 'AdminpanelController@createlive')->name('create.live');
Route::post('/admin/delete/live', 'AdminpanelController@deletelive')->name('delete.live');
Route::post('/admin/finish/live', 'AdminpanelController@finishlive')->name('finish.live');

Route::get('/admin/create/game', 'AdminpanelController@creategame')->name('create.game');
Route::post('/admin/create/game', 'AdminpanelController@creategame')->name('create.game');
Route::post('/admin/delete/game', 'AdminpanelController@deletegame')->name('delete.game');
Route::post('/admin/edit/game', 'AdminpanelController@editgame')->name('edit.game');

Route::post('/admin/create/possibility', 'AdminpanelController@createpossibility')->name('create.possibility');
Route::post('/admin/delete/possibility', 'AdminpanelController@deletepossibility')->name('delete.possibility');
Route::post('/admin/edit/possibility', 'AdminpanelController@editpossibility')->name('edit.possibility');

Route::get('/admin/login', 'AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'AdminLoginController@login')->name('admin.login.auth');
Route::get('/admin/register', 'AdminRegisterController@index')->name('admin.register');
Route::post('/admin/register', 'AdminRegisterController@register')->name('admin.register');
Route::get('/admin/register/confirm', 'AdminRegisterController@confirm')->name('admin.confirm');
Route::post('/admin/register/confirm', 'AdminRegisterController@confirm')->name('admin.confirm');

Route::get('/admin/get/livelogs', 'AdminpanelController@getdata')->name('get.logs');
Route::get('/admin/get/factors', 'AdminpanelController@getdatafactors')->name('get.factors');
Route::post('/admin/change/livelogs', 'AdminpanelController@changelive')->name('change.live');
Route::post('/admin/add/buffet', 'AdminpanelController@addbuffet')->name('add.buffet');

Route::get('/admin/lottery/show/{id}', function ($id) {
    $lottery_users = lotteryuser::select()
        ->join('lotteries', 'lotteries.lottery_id', '=', 'lottery_users.lottery_id')
        ->where('lottery_users.lottery_id', $id)->get();
    $l_match = LotteryMatch::select()->where('lottery_id', $id)->count();
    // $lottery_match = LotteryMatch::
    // join('lottery_users' ,'lottery_users.lottery_id' ,'=', 'lottery_matchs.lottery_id')
    // ->where('lottery_matchs.lottery_id' , $id)->orderBy('lottery_matchs.lottery_match_id', 'asc')->distinct()->get();
    // $lottery_match = LotteryMatch::select()->where('lottery_id', $id)->get();

    // foreach ($lottery_match as $l) {
    //     $user1 = lotteryuser::select()->where('lottery_user_id', $l->lottery_user_1)->first();
    //     $user2 = lotteryuser::select()->where('lottery_user_id', $l->lottery_user_2)->first();
    //     $arr[] = [
    //         'user1' => $user1->fname . ' ' . $user1->lname,
    //         'user2' => $user2->fname . ' ' . $user2->lname
    //     ];
    // }
    $lottery_users_1  = lotteryuser::select()->where('lottery_id', $id)->get();
    $lottery_match_last_level = LotteryMatch::select('level')->where('lottery_id', $id)->orderBy('level', 'desc')->first();
    $arrgoal = array();
    if ($lottery_match_last_level == null) {
        $last_level = 0;
    } else {
        $last_level = $lottery_match_last_level->level;

        for ($i = 1; $i <= $last_level; $i++) {
            $lottery_match_by_level = LotteryMatch::select()->where('level', $i)->get();
            for ($j = 0; $j < count($lottery_match_by_level); $j++) {
                $arrgoal[$i][]   = [$lottery_match_by_level[$j]["goal_user_1"] . ',' . $lottery_match_by_level[$j]["goal_user_2"]];
            }
        }
    }

    // dd($arrgoal);
    return view('Admin.lotteryshow', compact('lottery_users',  'id', 'arrgoal', 'last_level', 'lottery_users_1'));
})->middleware('CheckAdminLogin')->name('lottery.show');
Route::get('/admin/excel/export/livelogs', 'AdminpanelController@exportexcellivelogs')->name('export.excel.livelogs');
Route::get('/admin/excel/export/factors', 'AdminpanelController@exportexcelfactors')->name('export.excel.factors');
/*End Admin Routes*/

/*User Routes*/
Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@register')->name('register');
Route::post('/register/confirm', 'RegisterController@confirm')->name('confirm');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LogoutController@logout')->name('logout');
Route::get('/forget/password', 'LoginController@forgetpassword')->name('forget.password');
Route::post('/forget/password', 'LoginController@forgetpassword')->name('forget.password');
/*End User Routes*/

/*Public Routes */
Route::get('/guide', function () {
    return view('Guide');
})->name('guide');
// Route::get('/gamenet' , function(){
//     return view('gamenet');
// });
/*End Public Routes */


/*Test Routes*/
Route::get('/active/gamenet/edit/{gamenet_id}', function ($gamenet_id) {
    $gamenet = Gamenet::select()->where('gamenet_id', $gamenet_id)->first();
    $gamenet_bk = new GamenetBk();
    $gamenet_bk->gnet_id = $gamenet_id;
    $gamenet_bk->title = $gamenet->title;
    $gamenet_bk->address = $gamenet->address;
    $gamenet_bk->tel = $gamenet->tel;
    $gamenet_bk->lat = $gamenet->lat;
    $gamenet_bk->long = $gamenet->long;
    $gamenet_bk->rate = $gamenet->rate;
    $gamenet_bk->status = $gamenet->status;
    $gamenet_bk->approve = $gamenet->approve;
    $gamenet_bk->description = $gamenet->description;
    $gamenet_bk->user_id = $gamenet->user_id;
    if ($gamenet_bk->save()) {
        $gamenet_temp = GamenetTemp::select()->where('gnet_id', $gamenet_id)->first();
        $gamenet->title = $gamenet_temp->title;
        $gamenet->address = $gamenet_temp->address;
        $gamenet->tel = $gamenet_temp->tel;
        $gamenet->description = $gamenet_temp->description;
        if ($gamenet->save()) {
            $gamenet_temp->delete();
            return "yesss";
        }
    } else {
        return false;
    }
});

Route::get('/gamenet/{gamenet_id}/{gamenet_name}', function ($gamanet_id, $gamenet_name) {
    $user = Auth::user();
    $gamenet = Gamenet::select()
        ->where('gamenet_id', $gamanet_id)->first();
    $gamenet_images = GamenetPic::select()
        ->where('gnet_id', $gamanet_id)->get();
    if ($user != null) {
        $rate_status = Rate::select()->where([['gnet_id', '=', $gamanet_id], ['user_id', '=', $user->user_id]])->first();
        if ($rate_status == null) {
            $s = 0;
        } else {
            $s = $rate_status->rate;
        }
    } else {
        $s = 0;
    }

    return view('gamenet', compact('gamenet', 'gamenet_images', 's'));
})->name('show.gamenet');
Route::get('/gamenets', function () {
    $gamenets = Gamenet::select()
        ->join('gamenet_pictures', 'gamenet_pictures.gnet_id', '=', 'gamenets.gamenet_id')
        ->where('gamenet_pictures.flag', "main")
        ->get();
    return  view('gamenets', compact('gamenets'));
})->name('gamenets');
Route::post('/gamenet/rate', 'HomeController@rate')->name('gamenet.rate');
Route::get('/user/panel', function () {
    return view('panel');
});
Route::get('/intro', function () {
    return view('intropanel');
})->name('intro');
Route::get('/pay', function () {
    return view('Admin.pay');
})->name('pay');

/*End Test Routes*/
