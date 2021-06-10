@extends('layouts.vertical', ['title' => '상담원 체온 상태'])

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
                    <div class="page-title-right">
                        <form class="form-inline">
                            <div class="form-group">
                                
                                
                                <div class="input-group input-group-sm ml-2">
                                    <input type="text" class="form-control border" id="dash-daterange">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-blue border-blue text-white">
                                            <i class="mdi mdi-calendar-range"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group input-group-sm ml-2">
                                    <select type="" class="form-control border" id="dash-daterange" >
                                        <option value="">그룹명</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm ml-2">
                                    <select type="" class="form-control border" id="dash-daterange" >
                                        <option value="">상담원명</option>
                                    </select>
                                </div>
                                
                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                <i class="mdi mdi-magnify"></i>
                            </a>
                            <!-- <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a> -->
                        </form>
                    </div>
                    <h4 class="page-title">상담원 체온 현황</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card-box">
                    <h4 class="header-title">[상담원] 체온 </h4>

                    <div id="combine-chart" data-colors="#e3eaef,#f1556c,#1abc9c" class="flot-chart mt-5" style="height: 386px;">
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

        </div>
        <!-- end row-->
        <div class="row">
            
             <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <h4 class="header-title mb-3">체온 등급</h4>

                    <div class="widget-chart text-center" dir="ltr">
                        <input data-plugin="knob" data-width="120" data-max="10" data-height="140" data-linecap=round data-bgColor="rgba(0,0,0,0.1)" data-fgColor="#f1556c" value="{{user->temp_grade}}" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                        <h5 class="text-muted mt-3">0 ~ 10 단계 중 </h5>
                        <!-- <h2>Index 값 5</h2> -->

                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">VLF</p>
                                <h4>3.4</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">HF</p>
                                <h4>2.3</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">VPM</p>
                                <h4>42.9</h4>
                            </div>
                        </div> <!-- end row -->
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
            <div class="col-md-3 col-xl-3">
                <div class="card-box">
                    <h4 class="header-title mb-3">최근 체온 등급</h4>

                    <div id="roated-chart" style="height: 270px;" data-colors="#1abc9c,#4a81d4" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <!-- 체온 현황 카드 -->
                <div class="card">
                    <div class="card-body" dir="ltr">
                        <div id="cardCollpase3" class="collapse show">
                            <h4 class="header-title mb-0">일별 체온 현황</h4>
                            <div id="statistics-chart" data-colors="#02c0ce" style="height: 270px;" class="morris-chart mt-3"></div>

                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ko.js"></script>
    
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/libs/selectize/selectize.min.js')}}"></script>

    <script src="{{asset('assets/libs/morris.js06/morris.js06.min.js')}}"></script>
    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('assets/libs/flot-charts/flot-charts.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.flot.tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/libs/flot-orderbars/flot-orderbars.min.js')}}"></script>


    <!-- Dashboar all init js-->
    <script src="{{asset('assets/js/pages/dashboard-user-detail.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>


@endsection
