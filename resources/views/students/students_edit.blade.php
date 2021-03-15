@extends('layout.master')
@section('title', 'Students')
@section('parentPageTitle', 'Modules')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
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
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
            <form id="form_validation" action="{{ action('StudentsController@update', $students_nioni->id_siswa) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}                        
                <div class="form-group form-float {{$errors->has('nisn') ? 'has-danger' : ''}}">
                    <input type="number" class="form-control" placeholder="Nisn" name="nisn" required value="{{ $students_nioni->nisn }}">
                </div>                                  
                                                     
                <div class="form-group form-float">
                    <input type="number" class="form-control" placeholder="Nis" name="nis" required value="{{ $students_nioni->nis }}" >
                </div>

                <div class="form-group form-float">
                    <input type="text" class="form-control" placeholder="Full Name" name="fullName" required value="{{$students_nioni->nama}}" >
                </div>

                <div class="form-group form-float {{$errors->has('kelas') ? ' has-danger' : ''}}">
                    <select name = "kelas" class="form-control show-tick">
                            <option value="">-- Please select class--</option>
                            @foreach ($class_nioni as $v_nioni)
                            <option {{$students_nioni->kelas_id_kelas == $v_nioni->id_kelas  ? 'selected' : ''}} value="{{ $v_nioni->id_kelas }}">{{ $v_nioni->id_kelas }} {{ $v_nioni->kelas}} {{ $v_nioni->vocational->jurusan}}</option>
                            @endforeach
                    </select>
                    @if($errors->has('kelas'))          
                        <span class="help-block"> {{$errors->first('kelas')}}</span>
                    @endif
                </div>

                <div class="form-group form-float">
                    <input type="number" class="form-control" placeholder="Phone Number" name="notelp" required value="{{$students_nioni->no_telp}}" >
                </div>

                <div class="form-group form-float">
                    <textarea name="address" cols="30" rows="5" placeholder="Address" class="form-control no-resize" required="" aria-required="true"> {{$students_nioni->alamat}} </textarea>
                </div>
                <div class="form-group form-float {{$errors->has('tahun') ? ' has-danger' : ''}}" >
                    <select name="tuition_id_spp" class="form-control ">
                        <option value="">-- Please select batch year --</option>
                        @foreach ($tuition_nioni as $id_nioni => $v_nioni)
                        <option {{$students_nioni->tuition_id_spp == $v_nioni->id_spp  ? 'selected' : ''}} value="{{ $v_nioni->id_spp }}">{{ $v_nioni->tahun}} - @currency($v_nioni->nominal)</option>
                        @endforeach
                    </select>
                @if($errors->has('tahun'))          
                    <span class="help-block"> {{$errors->first('tahun')}}</span>
                @endif
                </div>  
                <div class="modal-footer">
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
       
@stop
@section('page-script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/basic-form-elements.js')}}"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
@stop