<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{

    // 로그인안할시 접근 불가능
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
        $events = \App\Event::all();
        $sounds = \App\Sound::all();
        $sites = \App\Site::all();
        $devices = \App\Device::all();
        return view('login', compact('users', 'events', 'sounds', 'sites', 'devices'));
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        if ($first != 'assets')
            return view($first);
        return view('index');
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {        
        if ($first != 'assets')
            return view($first.'.'.$second);
        return view('index');
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        if ($first != 'assets')
            return view($first.'.'.$second.'.'.$third);
        return view('index');
    }

    //모니터링
    public function dashboard_monitor(){
        $users = \App\User::all();
        $events = \App\Event::all();    
        // DB::table('users')->insert(
        //     ['email' => 'john@example.com']
        // );
        return view('dashboard-monitor', compact('users', 'events'));
    }

    //비상벨 기기 정보 화면
    public function dashboard_device(){
        $users = \App\User::all();
        $events = \App\Event::all();
        // DB::table('users')->insert(
        //     ['email' => 'john@example.com']
        // );
        return view('dashboard-device', compact('users', 'events'));
    }

    //구글지도
    public function dashboard_map(){
        // $users = \App\User::all();
        return view('dashboard-map');
    }

}
