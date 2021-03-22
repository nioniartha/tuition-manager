@extends('layout.master')
@section('title', 'Payment')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    *, *::before, *::after {
    box-sizing: border-box;
    }

    body {
    background: #FDFDFD;
    margin: 25px 0;
    }

    .option {
        margin : 10px;
    }

    span.title {
    margin: 0 auto;
    color: #BBB;
    font-family: 'Open Sans', sans-serif;
    font-size: 0.85rem;
    text-align: center;
    display: block;
    }

    .basicBox, .swiggleBox, .checkBox {
    width: 130px;
    height: 65px;
    margin: 15px auto;
    color: #4274D3;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.15rem;
    line-height: 65px;
    text-transform: uppercase;
    text-align: center;
    position: relative;
    cursor: pointer;
    }

    svg {
    position: absolute;
    top: 0;
    left: 0;
    }
    svg rect, svg path, svg polyline {
    fill: none;
    stroke: #4274D3;
    stroke-width: 1;
    }

    .basicBox:hover svg rect, .swiggleBox:hover svg path, .checkBox:hover svg polyline {
    stroke: #4274D3;
    }

    /* Basic Box */
    svg rect {
    stroke-dasharray: 400, 0;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .basicBox:hover svg rect {
    stroke-width: 3;
    stroke-dasharray: 35, 245;
    stroke-dashoffset: 38;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }

    /* Swiggle Box */
    svg path {
    stroke-dasharray: 265, 0;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    }
    .swiggleBox:hover svg path {
    stroke-width: 3;
    stroke-dasharray: 0, 350;
    stroke-dashoffset: 20;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    }

    /* Check Box */
    .checkBox {
    /* Add Padding Left To Center Text */
    }
    .checkBox svg {
    /* Presentation Purposes */
    margin-left: -10px;
    }
    .checkBox svg rect, .checkBox svg polyline {
    fill: none;
    stroke: #4274D3;
    stroke-width: 1;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .checkBox:hover svg rect {
    stroke-width: 2;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .checkBox:hover svg polyline {
    stroke-width: 2;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .checkBox svg .button {
    stroke-dasharray: 400px, 0;
    }
    .checkBox:hover svg .button {
    stroke-dasharray: 0, 400px;
    stroke-dashoffset: 33px;
    }
    /* Check Mark Effect */
    .box, .checkMark {
    opacity: 0;
    }
    .checkBox:hover .box {
    -webkit-animation: boxDisplay 0.2s forwards;
    -moz-animation: boxDisplay 0.2s forwards;
    -ms-animation: boxDisplay 0.2s forwards;
    -o-animation: boxDisplay 0.2s forwards;
    animation: boxDisplay 0.2s forwards;
    -webkit-animation-delay: 0.65s;
    -moz-animation-delay: 0.65s;
    -ms-animation-delay: 0.65s;
    -o-animation-delay: 0.65s;
    animation-delay: 0.65s;
    }
    .checkBox:hover .checkMark {
    -webkit-animation: checkDisplay 0.2s forwards;
    -moz-animation: checkDisplay 0.2s forwards;
    -ms-animation: checkDisplay 0.2s forwards;
    -o-animation: checkDisplay 0.2s forwards;
    animation: checkDisplay 0.2s forwards;
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    -ms-animation-delay: 1s;
    -o-animation-delay: 1s;
    animation-delay: 1s;
    }
    /* Check Box Display */
    @-webkit-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-moz-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-ms-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-o-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    /* Check Mark Display */
    @-webkit-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-moz-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-ms-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-o-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
</style>
@stop
@section('content')

<div class="row clearfix js-sweetalert">
    <div class="card">
        <div class="body">
            <select class="cari form-control"  name="cari"></select>            
        </div>
            
            
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Tuition</strong> fee</h2>
            </div>
            <div class="body">  
                <ul class="nav nav-tabs p-0 mb-3">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile">PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#home">PAYMENT</a></li>
                </ul>                        
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in " id="home">
                        <div class="row">                
                            <div class="col-md-12 col-lg-8 col-xl-8">
                                <div class="card">
                                    <div class="body">                            
                                        <div class="options">
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Jul
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Aug
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Sep
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                        </div>

                                        <div class="options">
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Oct
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Nov
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Dec
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                        </div>

                                        <div class="options">
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Jan
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Feb
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Mar
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                        </div>

                                        <div class="options">
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Apr
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        May
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                            <label class="option">
                                                    <div class="checkBox" type="checkbox">
                                                        Jun
                                                        <svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="10" class="button" width="128.8" height="63.9"/>
                                                            <rect x="0" y="22.5" class="box" width="20" height="20"/>
                                                            <polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
                                                        </svg>
                                                        

                                                    </div>
                                                    <div class="on-checked"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    <h5>Detail</h5>
                                        <ul class="list-unstyled mb-0 widget-categories">
                                            <li><a href="#">Juli</a></li>
                                            <li><a href="#">Agustus</a></li>
                                        </ul>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li><strong>Sub-Total :</strong> </li>
                                    </ul>                                    
                                    <h3 class="mb-0 text-danger">@currency(900000)</h3>
                                    <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="row">                
                            <div class="col-md-12 col-lg-8 col-xl-8">
                                <div class="card">
                                    <div class="body">                            
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="event_list">
                                        <button type="button" class="btn btn-info btn-block waves-effect" data-toggle="modal" data-target="#addevent">Add Events</button>
                                        <div class="e_list">
                                            <h5 class="e_name">11 September <span class="badge badge-primary float-right">Conference</span></h5>
                                            <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            <p class="e_details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="e_list">
                                            <h5 class="e_name">12 November <span class="badge badge-success float-right">Birthday Party</span></h5>
                                            <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            <p class="e_details">It is a long established fact that a reader will be distracted</p>
                                        </div>
                                        <div class="e_list">
                                            <h5 class="e_name">16 December <span class="badge badge-danger float-right">Repeating</span></h5>
                                            <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            <p class="e_details">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/sweetalert.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    var showAlert = true;

    // for checkbox
    $('input[type="checkbox"]').on('change', (event) => {
        const name = event.target.name;
        const values = [];
        $('input[name="' + name + '"]:checked').each((index, input) => {
            values.push($(input).val());
        });
        if(!showAlert) return;
        // print
        if(values.length) {
        swal({
            title: event.target.name,
            type: 'success',
            html: 'value: <strong>' + JSON.stringify(values) + '</strong>',
            confirmButtonText: 'okay'
        })
        } else {
        swal({
            title: event.target.name,
            type: 'warning',
            html: 'Please choose a social',
            confirmButtonText: 'okay'
        })
        }
    });

    $('.cari').select2({
        placeholder: 'Search...',
        ajax: {
        url: '{{route('payment.cari')}}',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
            results:  $.map(data, function (item) {
                return {
                    text: item.nisn + " - " + item.nama,
                    id: item.id_siswa
                }
            })
            };
        },
        cache: true
        }
    });

</script>
@stop