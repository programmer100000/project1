<?php

use App\Http\Controllers\AdminLoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');
Route::get('/admin', 'AdminpanelController@index')->name('admin');

Route::get('/admin/create/system' , 'AdminpanelController@createsystem')->name('create.system');
Route::post('/admin/create/system' , 'AdminpanelController@createsystem')->name('create.system');
Route::post('/admin/delete/system' , 'AdminpanelController@deletesystem')->name('delete.system');
Route::post('/admin/edit/system' , 'AdminpanelController@editsystem' )->name('edit.system');

Route::get('/admin/create/buffet' , 'AdminpanelController@createbuffet')->name('create.buffet');
Route::post('/admin/create/buffet' , 'AdminpanelController@createbuffet')->name('create.buffet');
Route::post('/admin/delete/buffet' , 'AdminpanelController@deletebuffet')->name('delete.buffet');
Route::post('/admin/edit/buffet' , 'AdminpanelController@editbuffet' )->name('edit.buffet');

Route::get('/admin/create/device' , 'AdminpanelController@createdevice')->name('create.device');
Route::post('/admin/create/device' , 'AdminpanelController@createdevice')->name('create.device');
Route::post('/admin/delete/device' , 'AdminpanelController@deletedevice')->name('delete.device');
Route::post('/admin/edit/device' , 'AdminpanelController@editdevice' )->name('edit.device');

Route::post('/admin/create/live' , 'AdminpanelController@createlive')->name('create.live');
Route::post('/admin/delete/live' , 'AdminpanelController@deletelive')->name('delete.live');
Route::post('/admin/finish/live' , 'AdminpanelController@finishlive')->name('finish.live');

Route::get('/admin/create/game' , 'AdminpanelController@creategame')->name('create.game');
Route::post('/admin/create/game' , 'AdminpanelController@creategame')->name('create.game');
Route::post('/admin/delete/game' , 'AdminpanelController@deletegame')->name('delete.game');
Route::post('/admin/edit/game' , 'AdminpanelController@editgame' )->name('edit.game');

Route::get('/admin/login' , 'AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'AdminLoginController@login')->name('admin.login.auth');
Route::get('/admin/register' , 'AdminRegisterController@index');
Route::post('/admin/register', 'AdminRegisterController@register')->name('admin.register');
Route::post('/admin/register/confirm', 'AdminRegisterController@confirm')->name('admin.confirm');
Route::get('/register' , 'RegisterController@index');

Route::post('/register' , 'RegisterController@register')->name('register');
Route::post('/register/confirm' , 'RegisterController@confirm')->name('confirm');
Route::get('/login' , 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout' , 'LogoutController@logout')->name('logout');
Route::get('/admin/excel/export' , 'AdminpanelController@exportexcel')->name('export.excel');
Route::get('/admin/get/livelogs' , 'AdminpanelController@getdata')->name('get.logs');
