@extends('layouts.vertical', ['title' => 'Google Maps'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        
    <!-- start page title -->
    <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">위치현황</h4>
                </div>
            </div>
        </div>     
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
                                <h3 class="mt-1"><span data-plugin="counterup">3</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Event</p>
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
                                <p class="text-muted mb-1 text-truncate">Total Event Sounds</p>
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
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">2</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Installation</p>
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
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">3</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Reported Cases</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
</div>

        
        
<div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">이벤트 로그 발생지역</h4>

                    <div id="gmaps-bsTest" class="gmaps" style="height:1000px;"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col--> 
    </div> <!-- container -->    
@endsection

@section('script')
<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBpxUeDYcT2EuFxR_E_m5rObb3u37sMlCc"></script>

<!-- Plugins js-->
<script src="{{asset('assets/libs/gmaps/gmaps.min.js')}}"></script>

<!-- Page js-->
<script src="{{asset('assets/js/pages/google-maps.init_custom.js')}}"></script>
@endsection