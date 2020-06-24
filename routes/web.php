<?php

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


