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

    .total {
        margin-top : 0;
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
@if(count($errors) > 0)
@foreach($errors->all() as $error) 
<div class="alert alert-danger" role="alert">
    <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
    </div>
</div>
@endforeach
@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-thumb-up"></i>
            </div>
            <strong>Well done!</strong>  {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
    </div>
@endif

<div class="row clearfix js-sweetalert">
    <div class="card">
        <div class="body">
            <select class="cari form-control" id="searchStudent" name="cari"></select> 
        </div>
            
            
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Tuition</strong> fee</h2>
            </div>
            <div class="body">  
                <ul class="nav nav-tabs p-0 mb-2">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile">PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#home">PAYMENT</a></li>
                </ul>                        
                
                <hr>                        

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in " id="home">
                        <div class="row"  id="payment">                
                            <div class="col-md-12 col-lg-8 col-xl-8">
                               <!-- Nav tabs -->
                                <ul class="nav nav-tabs p-0 mb-3 nav-tabs-warning">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#firstYear">First Year</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#secondYear">Second Year</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#thirdYear">Third Year</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fourthYear">Fourth year</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="firstYear">
                                        <b>Home Content</b>
                                        <div class="row" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <?php
                                                    $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                ?>

                                                <div class="options">
                                                @foreach($months as $month)
                                                    <label class="option">
                                                        <div class="basicBox">
                                                            {{$month}}
                                                            <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                            </svg>
                                                        </div>
                                                    </label>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card">
                                                    <h5 >Detail</h5>
                                                    <form id="form_validation" action="{{route('payment.bayar')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            
                                                            <div class="form-group form-float">
                                                                <input type="number" class="form-control" id="monthsToBePaid" placeholder="Months to be paid" name="monthsToBePaid" required>
                                                            </div>
                                                            <input type="hidden" id="yearInput" name="yearInput"></input>
                                                            <input type="hidden" id="jumlahBayar" name="jumlahBayar"></input>
                                                            <input type="hidden" id="idPetugas" name="idPetugas" value="{{ Auth::guard('admin')->user()->id_petugas }}"></input>   
                                                            <input type="hidden" id="idStudent" name="idStudent"></input> 
                                                            <input type="hidden" id="idSpp" name="idSpp"></input> 

                                                            <hr>
                                                                                                
                                                            <ul class="list-unstyled">
                                                                <li><strong>Sub-Total :</strong> </li>
                                                            </ul>
                                                            <h4 class="mb-0 text-danger total"></h4>

                                                            <div class="modal-footer">
                                                                <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                                                <button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>
                                                            </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="secondYear">
                                        <b>Profile Content</b>
                                        <div class="row" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <?php
                                                    $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                ?>

                                                <div class="options">
                                                @foreach($months as $month)
                                                    <label class="option">
                                                        <div class="basicBox">
                                                            {{$month}}
                                                            <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                            </svg>
                                                        </div>
                                                    </label>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card">
                                                    <h5 >Detail</h5>
                                                    <form id="form_validation" action="{{route('payment.bayar')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            
                                                            <div class="form-group form-float">
                                                                <input type="number" class="form-control" id="monthsToBePaid" placeholder="Months to be paid" name="monthsToBePaid" required>
                                                            </div>
                                                            <input type="hidden" id="yearInput" name="yearInput"></input>
                                                            <input type="hidden" id="jumlahBayar" name="jumlahBayar"></input>
                                                            <input type="hidden" id="idPetugas" name="idPetugas" value="{{ Auth::guard('admin')->user()->id_petugas }}"></input>   
                                                            <input type="hidden" id="idStudent" name="idStudent"></input> 
                                                            <input type="hidden" id="idSpp" name="idSpp"></input> 

                                                            <hr>
                                                                                                
                                                            <ul class="list-unstyled">
                                                                <li><strong>Sub-Total :</strong> </li>
                                                            </ul>
                                                            <h4 class="mb-0 text-danger total"></h4>

                                                            <div class="modal-footer">
                                                                <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                                                <button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>
                                                            </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="thirdYear">
                                        <b>Message Content</b>
                                        <div class="row" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <?php
                                                    $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                ?>

                                                <div class="options">
                                                @foreach($months as $month)
                                                    <label class="option">
                                                        <div class="basicBox">
                                                            {{$month}}
                                                            <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                            </svg>
                                                        </div>
                                                    </label>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card">
                                                    <h5 >Detail</h5>
                                                    <form id="form_validation" action="{{route('payment.bayar')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            
                                                            <div class="form-group form-float">
                                                                <input type="number" class="form-control" id="monthsToBePaid" placeholder="Months to be paid" name="monthsToBePaid" required>
                                                            </div>
                                                            <input type="hidden" id="yearInput" name="yearInput"></input>
                                                            <input type="hidden" id="jumlahBayar" name="jumlahBayar"></input>
                                                            <input type="hidden" id="idPetugas" name="idPetugas" value="{{ Auth::guard('admin')->user()->id_petugas }}"></input>   
                                                            <input type="hidden" id="idStudent" name="idStudent"></input> 
                                                            <input type="hidden" id="idSpp" name="idSpp"></input> 

                                                            <hr>
                                                                                                
                                                            <ul class="list-unstyled">
                                                                <li><strong>Sub-Total :</strong> </li>
                                                            </ul>
                                                            <h4 class="mb-0 text-danger total"></h4>

                                                            <div class="modal-footer">
                                                                <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                                                <button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>
                                                            </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="fourthYear">
                                        <b>Settings Content</b>
                                        <div class="row" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <?php
                                                    $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                ?>

                                                <div class="options">
                                                @foreach($months as $month)
                                                    <label class="option">
                                                        <div class="basicBox">
                                                            {{$month}}
                                                            <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                            </svg>
                                                        </div>
                                                    </label>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card">
                                                    <h5 >Detail</h5>
                                                    <form id="form_validation" action="{{route('payment.bayar')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            
                                                            <div class="form-group form-float">
                                                                <input type="number" class="form-control" id="monthsToBePaid" placeholder="Months to be paid" name="monthsToBePaid" required>
                                                            </div>
                                                            <input type="hidden" id="yearInput" name="yearInput"></input>
                                                            <input type="hidden" id="jumlahBayar" name="jumlahBayar"></input>
                                                            <input type="hidden" id="idPetugas" name="idPetugas" value="{{ Auth::guard('admin')->user()->id_petugas }}"></input>   
                                                            <input type="hidden" id="idStudent" name="idStudent"></input> 
                                                            <input type="hidden" id="idSpp" name="idSpp"></input> 

                                                            <hr>
                                                                                                
                                                            <ul class="list-unstyled">
                                                                <li><strong>Sub-Total :</strong> </li>
                                                            </ul>
                                                            <h4 class="mb-0 text-danger total"></h4>

                                                            <div class="modal-footer">
                                                                <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                                                <button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>
                                                            </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="row">                
                            <div class="col-md-12 col-lg-8 col-xl-8">
                                <?php $student_nioni = null ?>
                                <div class="card">
                                    <div class="body">  
                                        <p id = "nisn"></p>
                                        <p id = "nis"></p>
                                        <p id = "name"></p>
                                        <p id = "class"></p>
                                        <p id = "telp"></p>           
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
    let nominal_nioni;
    $("#payment").hide();


    // for checkbox
    $('div[type="checkbox"]').on('change', (event) => {
        const name = event.target.name;
        const values = [];
        $('div[name="' + name + '"]:checked').each((index, input) => {
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

    function block(mClass, html) {
        //extra html you want to store.
        return '<li class="nav-item"><a class="nav-link" data-toggle="tab" href=#' + mClass + '>' + html + '</a></li>'
   
    }

    $("#searchStudent").change(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
        });
        $.ajax({
            type: "POST",
            url: '{{route('payment.search')}}',
            data: { 
                data: $("#searchStudent").val() 
            },
            dataType: 'json',
            success: function(response) {
            // use console.log for debugging, and access the property of the deserialised object
                console.log(response);
                $.each(response['data-siswa'], function(index, element) {
                    $("#name").text(element.nama);
                 
                    $("#nisn").text("Nisn : " + element.nisn);
                    $("#nis").text("Nis : " + element.nis);
                    $("#class").text("Class : " + element.kelas.kelas + " " + element.kelas.vocational.jurusan + " " + element.kelas.nama_kelas);
                    $("#payment").show();
                    
                    document.getElementById("yearInput").value = element.tuition.tahun;
                    document.getElementById("idStudent").value = element.id_siswa;
                    document.getElementById("idSpp").value = element.tuition.id_spp;


                    nominal_nioni = element.tuition.nominal;
                    var ul = document.getElementById('tab-tahun');

                    var date = parseInt(element.tuition.tahun);
                    var date2 = date + 1;
                    var i;
                    for(i = date; i < date2 + 2; i++){
                        console.log(i + ' - ' + (i + 1));
                        // ul.innerHTML += block(i, i +'-' +(i+1));
                        
                    }// end for

                    
                });
            }
        });
    });
    
    $(document).ready(function(){
        $("#monthsToBePaid").on("input", function() {
            var qty_nioni =$(this).val();
            var amount_nioni = (qty_nioni * nominal_nioni)
            
            $('.total').text(formatRupiah(amount_nioni));
            document.getElementById("jumlahBayar").value = amount_nioni;


        });              
    });

    
 
    const formatRupiah = (money) => {
    return new Intl.NumberFormat('id-ID',
            { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }
        ).format(money);
    }
</script>
@stop