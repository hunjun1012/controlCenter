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
                    <h4 class="page-title">모니터링</h4>
                    <!-- <div class="page-title-right">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control border" id="dash-daterange">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-blue border-blue text-white">
                                            <i class="mdi mdi-calendar-range"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                <i class="mdi mdi-autorenew"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a>
                        </form>
                    </div> -->
                    
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <h4>전체</h4>
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
                                <h3 class="mt-1"><span data-plugin="counterup">8</span> / <span data-plugin="counterup">10</span></h3>
                                <p class="text-muted mb-1 text-truncate">로그인 / 상담원</p>
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
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1 text-truncate">스트레스</p>
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
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1 text-truncate">백색소음</p>
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
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">3.4</span>%</h3>
                                <p class="text-muted mb-1 text-truncate">당일 평균 스트레스</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        <h4>그룹별</h4>
        <div class="row">
            @foreach(['1','2','3','4'] as $number)
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <!-- <div class="avatar-sm bg-blue rounded">
                                <i class="fe-aperture avatar-title font-22 text-white"></i>
                            </div> -->
                            <h2>{{$number}}팀</h2>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                            <p class="text-muted mb-1 text-truncate">로그인</p>
                            <h3 class="text-dark my-1"><span data-plugin="counterup">20</span> 명</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">스트레스 <span class="float-right">12</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">백색소음 <span class="float-right">10</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <span class="sr-only">50%</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            @endforeach

            
        </div>
        <!-- end row -->

        <h4>스트레스 현황</h4>
        <div class="row">
            <div class="col-xl-6">
                <!-- 스트레스 현황 카드 -->
                <div class="card">
                    <div class="card-body" dir="ltr">
                        <div class="card-widgets">
                            <!-- <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a> -->
                        </div>
                        <h4 class="header-title mb-0">이번달 스트레스 현황</h4>

                        <div id="cardCollpase3" class="collapse pt-3 show">
                            <div class="text-center"><!-- 
                                <h4 class="mb-4">이번달 스트레스 현황</h4> -->
                                <div class="row mt-2 mb-3">
                                    <div class="col-4">
                                        <p class="text-dark font-13 mb-0 text-truncate">스트레스 등급</p>
                                        <h3 data-plugin="counterup">3</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">1 ~ 9 등급 중</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-dark font-13 mb-0 text-truncate">전체 그룹 스트레스 비율</p>
                                        <h3 data-plugin="counterup">1.6</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">%</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-dark font-13 mb-0 text-truncate">집중관라 그룹 스트레스 비율</p>
                                        <h3 data-plugin="counterup">0.8</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">%</p>
                                    </div>
                                </div> <!-- end row -->
                            </div>
                            <h4 class="header-title mb-0">월별 스트레스 현황(%)</h4>
                            <div id="statistics-chart" data-colors="#02c0ce" style="height: 270px;" class="morris-chart mt-3"></div>

                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <div class="col-xl-6">
                <div class="card-box">
                    <h4 class="header-title">일별 스트레스 현황</h4>

                    <div id="combine-chart" data-colors="#e3eaef,#f1556c,#1abc9c" class="flot-chart mt-5" style="height: 386px;">
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
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
@endsection
