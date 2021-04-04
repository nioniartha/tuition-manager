@extends('layout.master')
@section('title', 'Dashboard')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/charts-c3/plugin.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}" />
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong><i class="zmdi zmdi-chart"></i> Tuition</strong> Report</h2>
            </div>
            <div class="body mb-2">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="state_w1 mb-1 mt-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>{{$students_nioni}}</h5>
                                    <span><i class="zmdi zmdi-face"></i> Students</span>
                                </div>
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#868e96">5,2,3,7,6,4,8,1</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="state_w1 mb-1 mt-1">
                            <div class="d-flex justify-content-between">
                                <div>                                
                                    <h5>{{$officers_nioni}}</h5>
                                    <span><i class="zmdi zmdi-male-alt"></i> Officers</span>
                                </div>
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#2bcbba">8,2,6,5,1,4,4,3</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="state_w1 mb-1 mt-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>@currency($nominal)</h5>
                                    <span><i class="zmdi zmdi-money"></i> Income</span>
                                </div>
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#82c885">4,4,3,9,2,1,5,7</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="state_w1 mb-1 mt-1">
                            <div class="d-flex justify-content-between">
                                <div>                            
                                    <h5>{{$history_nioni}}</h5>
                                    <span><i class="zmdi zmdi-time-restore"></i> History</span>
                                </div>
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#45aaf2">7,5,3,8,4,6,2,9</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">
                <div id="chart-area-spline-sracked" class="c3_chart d_sales"></div>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/index.js')}}"></script>
@stop