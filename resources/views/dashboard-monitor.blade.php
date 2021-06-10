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
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                <i class="fe-bar-chart-line- font-22 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">{{$events->count()}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">전체 이벤트</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                <i class="fe-heart font-22 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$events->count()}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">전체 이벤트 파일</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fa-sine font-22 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$events->count()}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">보고 된 총 이벤트</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                <i class="fe-eye font-22 avatar-title text-warning"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$devices->count()}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">전체 설치 기기 수</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
        <div class="col-lg-14">
                <div class="card-box">
                    <h4 class="header-title mb-3">위험 발생지역</h4>

                    <div id="gmaps-bsTest" class="gmaps" style="height:800px;"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col--> 
    </div> <!-- container -->    
 
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
                                        <option value="">모두보기</option>
                                        <option value="이상없음">이상없음</option>
                                        <option value="변화감지">변화감지</option>
                                        <option value="위험상황">위험상황</option>
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
                                <th data-toggle="true">기기정보</th>
                                <th>주소</th>
                                <th data-hide="phone">이벤트 발생 소리</th>
                                <th data-hide="phone, tablet">이벤트 발생 시간</th>
                                <th data-hide="phone, tablet">상태</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- <tr>
                                <td>7</td>
                                <td>광주광역시 북구</td>
                                <td>소리 이상 감지</td>
                                <td>2021-04-08</td>
                                <td><span class="badge label-table badge-secondary">변화감지</span></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>광주광역시 북구</td>
                                <td>위험상황 발생</td>
                                <td>2021-04-08</td>
                                <td><span class="badge label-table badge-danger">위험상황</span></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>광주광역시 북구</td>
                                <td>이상없음</td>
                                <td>2021-04-08</td>
                                <td><span class="badge label-table badge-success">이상없음</span></td>
                            </tr> -->
                            @foreach($events as $event)
                            <tr>
                                <td>{{ $event->deviceName }}</td>
                                <td>{{ $event->address }}</td>
                                <td><a href="">{{ $event->soundUrl }}</a></td>
                                <td>{{ $event->created_at }}</td>
                                <td><span class="badge label-table badge-danger">{{ $event->status }}</td>
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

<!-- google maps api key -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBpxUeDYcT2EuFxR_E_m5rObb3u37sMlCc"></script>
<!-- google maps -->
<script src="{{asset('assets/libs/gmaps/gmaps.min.js')}}"></script>
<!-- google maps -->
<script src="{{asset('assets/js/pages/google-maps.init_custom.js')}}"></script>


    <!-- Dashboar all init js-->
    <script src="{{asset('assets/js/pages/dashboard-all.js')}}"></script>
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/footable/footable.min.js')}}"></script>
    <!-- Page js-->
    <script src="{{asset('assets/js/pages/foo-tables.init.js')}}"></script>
<!-- 비상벨 추가시 비상벨 위치 db 저장 -->
<?php
// echo("<script language='javascript'>addMarker();</script>");

if(false){
    DB::table('events')->insert(
            ['deviceName' => 'device00', 'address' => "광주", 'soundUrl' => 'www.sound00', 'status' => '위험상황',]
        );
    }
    ?>
@endsection
