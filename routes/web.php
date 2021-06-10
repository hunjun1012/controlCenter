<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::group(['middleware' => 'auth', 'prefix' => '/'], function () {
    
});

Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel')->name('third');
Route::get('{first}/{second}', 'RoutingController@secondLevel')->name('second');
Route::get('{any}', 'RoutingController@root')->name('any');
//메인화면 시작
Route::get('dashboard-main', 'RoutingController@dashboard_main')->name('dashboard.main');
Route::get('dashboard-monitor', 'RoutingController@dashboard_monitor')->name('dashboard.monitor');
Route::get('dashboard-map', 'RoutingController@dashboard_map')->name('dashboard.map');
Route::get('dashboard-device', 'RoutingController@dashboard_device')->name('dashboard.device');
// 세선 컨트롤러
Route::post('login', 'SessionsController@login')->name('login');
Route::get('logout', 'SessionsController@destroy')->name('logout');
// landing
Route::get('', 'RoutingController@index')->name('index');