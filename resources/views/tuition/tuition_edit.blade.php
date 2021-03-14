@extends('layout.master')
@section('title', 'Tuition')
@section('parentPageTitle', 'Modules')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Basic Examples -->
<div class="row clearfix">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
            <form id="form_validation" action="class" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                                            
                <div class="form-group form-float" >
                    <select name="tahun_ajaran" class="form-control ">
                        <option value="">-- Please select year--</option>
                        <option value="">2021 - 2022</option>
                        <option value="">2022 - 2023</option>
                        <option value="">2023 - 2024</option>
                    </select>
                </div>
                <div class="form-group form-float">
                    <input type="text" class="form-control" placeholder="Nominal" name="nominal" required value="{{old('nominal')}}">
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
@stop