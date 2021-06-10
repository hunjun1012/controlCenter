@extends('layouts.vertical', ['title' => '비상벨 관제시스템'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
    
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <!-- <h4 class="page-title">모니터링</h4> -->
                    <!-- db 가져오기 -->
                    <?php
                    $users = DB::table('users')->get();
                    $events = DB::table('events')->get();
                    $sites = DB::table('sites')->get();
                    $devices = DB::table('devices')->get();
                    // echo $users;  
                    // echo $events;  
                    ?>
                </div>
            </div>
        </div><br>
        <!-- end page title --> 
        <div class="row">
            

            <div class="col-md-6 col-xl-12">
                <div class="widget-rounded-circle card-box" style="background-color:#EBFBFF; box-shadow: 5px 5px 5px;">
                    <div class="row">
                        <!-- <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                <i class="fe-eye font-22 avatar-title text-warning"></i>
                            </div>
                        </div> -->
                        <div class="col-11">
                            <div class="text-center">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$devices->count()}}</span></h3>
                                <p style="font-size:17px;">전체 설치 기기 수</p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>   

<!-- 실시간 현황 테이블 -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title"></h4>
                    <p style="font-size:20px;"><b>실시간 현황</b></p>

                    <div class="mb-2">
                        <div class="row">
                            <div class="col-12 text-sm-center form-inline">
                                <div class="form-group mr-2">
                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                        <option value="">비상벨 목록</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                            <thead>
                            <tr>
                                <th data-toggle="true">비상벨 아이디</th>
                                <th>비상벨 이름</th>
                                <th data-hide="phone">비상벨 설치 주소</th>
                                <th data-hide="phone, tablet">비상벨 설치 날짜</th>
                                <th data-hide="phone, tablet">비상벨 점검 날짜</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($devices as $device)
                            <tr>
                                <td>{{ $device->deviceid }}</td>
                                <td>{{ $device->deviceName }}</td>
                                <td>{{ $device->address }}</td>
                                <td>{{ $device->created_at }}</td>
                                <td>{{ $device->updated_at }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="5">
                                    <div class="text-right">
                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/libs/selectize/selectize.min.js')}}"></script>

    <script src="{{asset('assets/libs/morris.js06/morris.js06.min.js')}}"></script>
    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('assets/libs/flot-charts/flot-charts.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.flot.tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/libs/flot-orderbars/flot-orderbars.min.js')}}"></script>

    <!-- Dashboar all init js-->
    <script src="{{asset('assets/js/pages/dashboard-all.js')}}"></script>
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/footable/footable.min.js')}}"></script>
    <!-- Page js-->
    <script src="{{asset('assets/js/pages/foo-tables.init.js')}}"></script>
@endsection
