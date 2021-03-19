@extends('layout.master')
@section('title', 'Tuition')
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
            <form id="form_validation" action="{{ action('KelasController@update', $class_nioni->id_kelas) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}                        
                <div class="form-group form-float {{$errors->has('kelas') ? ' has-danger' : ''}}" >
                    <select name="kelas" class="form-control show-tick">
                        <option value="">-- Please select class--</option>
                        <option {{$class_nioni->kelas == 'X'  ? 'selected' : ''}} value="X">X</option>
                        <option {{$class_nioni->kelas == 'XI'  ? 'selected' : ''}} value="XI">XI</option>
                        <option {{$class_nioni->kelas == 'XII'  ? 'selected' : ''}} value="XII">XII</option>
                        <option {{$class_nioni->kelas == 'XIII' ? 'selected' : ''}} value="XIII">XIII</option>
                    </select>
                    @if($errors->has('kelas'))          
                        <span class="help-block"> {{$errors->first('kelas')}}</span>
                    @endif
                </div>

                <div class="form-group form-float {{$errors->has('vocational_id_jurusan') ? ' has-danger' : ''}}">
                    <select name = "vocational_id_jurusan" class="form-control show-tick">
                        <option value="">-- Please select vocational--</option>
                        @foreach ($vocational_nioni as $id_nioni => $v_nioni)
                            <option {{$class_nioni->vocational_id_jurusan == $id_nioni  ? 'selected' : ''}} value="{{ $id_nioni }}">{{ $v_nioni }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('vocational_id_jurusan'))          
                        <span class="help-block"> {{$errors->first('vocational_id_jurusan')}}</span>
                    @endif
                </div>

                <div class="form-group form-float {{$errors->has('nama_kelas') ? ' has-danger' : ''}}" >
                    <select name="nama_kelas" class="form-control show-tick">
                        <option value="">-- Please select class name--</option>
                        <option {{$class_nioni->nama_kelas == 'A'  ? 'selected' : ''}} value="A">A</option>
                        <option {{$class_nioni->nama_kelas == 'B'  ? 'selected' : ''}} value="B">B</option>
                        <option {{$class_nioni->nama_kelas == 'C'  ? 'selected' : ''}} value="C">C</option>
                        <option {{$class_nioni->nama_kelas == 'D'  ? 'selected' : ''}} value="D">D</option>
                    </select>
                @if($errors->has('nama_kelas'))          
                    <span class="help-block"> {{$errors->first('kelas')}}</span>
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