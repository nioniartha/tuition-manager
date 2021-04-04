@extends('layout.master')
@section('title', 'Payment')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/payment.css')}}"/>

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
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#firstYear"><b id = "tab-harus-bayar"></b></a></li>
                                    <li class="nav-item"><a class="nav-link" id = "tab-history_kelas_x" data-toggle="tab" href="#secondYear">XI</a></li>
                                    <li class="nav-item"><a class="nav-link" id = "tab-history_kelas_xi" data-toggle="tab" href="#thirdYear">XII</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fourthYear">XII</a></li> -->
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="firstYear">
                                        <b>Payment</b>
                                        <div class="row" id = "x" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <div class="options" id="cardspp">
                                                </div> 
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card" id="form_parent_x">
                                                    <h5 >Detail</h5>
                                                    <form id="form_validation" action="{{route('payment.bayar')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            
                                                            <div class="form-group form-float">
                                                                <input type="number" class="form-control" id="monthsToBePaid" min="0" max="12" placeholder="Months to be paid" name="monthsToBePaid" required>
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
                                                                <button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>
                                                            </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="secondYear">
                                        
                                        <div class="row" id = "xi" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <div class="options" id='history_kelas_x'></div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card" id="form_parent_xi">
                                                    <h4 class="text-success">This year's payment has been paid off..</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="thirdYear">
                                        
                                        <div class="row" id = "xii" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <div class="options" id='history_kelas_xi'></div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card">
                                                <h4 class="text-success">This year's payment has been paid off</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="fourthYear">
                                        <b>Settings Content</b>
                                        <div class="row" id = "xiii" style="min-width: 800px;">
                                            <div class="col-12 col-md-8">
                                                <?php
                                                    $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                ?>

                                                <!-- <div class="options">
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
                                                </div> -->
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="card">
                                                    <h5 >Detail</h5>
                                                
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
                            
                                <?php $student_nioni = null ?>
                                <div class="card">
                                    <div class="body">  
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="body datasiswa">
                                                <small class="text-muted">Nisn : </small>
                                                <p  id = "nisn"></p>
                                                <hr>
                                                <small class="text-muted">Nis : </small>
                                                <p  id = "nis"></p>
                                                <hr>
                                                <small class="text-muted">Name : </small>
                                                <p  id = "name"></p>
                                                <hr>
                                                <small class="text-muted">Class : </small>
                                                <p  id = "class"></p>
                                                <hr>
                                                <small class="text-muted">Number phone : </small>
                                                <p  id = "telp"></p>
                                                <hr>
                                                <span class="text-danger">*Tuition fees paid are non-refundable</span>
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
</div>

@stop
@section('page-script')
<script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/sweetalert.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="{{ asset('assets/js/payment.js') }}"></script>

@stop