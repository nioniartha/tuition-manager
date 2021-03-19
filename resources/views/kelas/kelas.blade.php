@extends('layout.master')
@section('title', 'Class')
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
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Add Class
                </button>  
                <div class="table-responsive">
                    <table id="classDataTables" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead> 
                            <tr>
                                <th>No</th>
                                <th>Grade</th>
                                <th>Vocational</th>
                                <th>Class Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Grade</th>
                                <th>Vocational</th>
                                <th>Class Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($class_nioni as $value_nioni)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $value_nioni->kelas}}</td>
                                <td>{{ $value_nioni->vocational->jurusan}}</td>
                                <td>{{ $value_nioni->nama_kelas}}</td>
                                <td>
                                    <a href="class/{{ $value_nioni->id_kelas}}/edit" class="btn btn-warning btn-block">Edit</a>
                                    <form action="{{ action('KelasController@destroy', $value_nioni->id_kelas) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                                <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Add Officer</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                        <form id="form_validation" action="class" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            
                                            <div class="form-group form-float {{$errors->has('kelas') ? ' has-danger' : ''}}" >
                                                <select name="kelas" class="form-control show-tick">
                                                    <option value="">-- Please select class--</option>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                    <option value="XIII">XIII</option>
                                                </select>
                                                @if($errors->has('kelas'))          
                                                    <span class="help-block"> {{$errors->first('kelas')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group form-float {{$errors->has('vocational_id_jurusan') ? ' has-danger' : ''}}">
                                                <select name = "vocational_id_jurusan" class="form-control show-tick">
                                                    <option value="">-- Please select vocational--</option>
                                                    @foreach ($vocational_nioni as $id_nioni => $v_nioni)
                                                        <option value="{{ $id_nioni }}">{{ $v_nioni }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('vocational_id_jurusan'))          
                                                    <span class="help-block"> {{$errors->first('vocational_id_jurusan')}}</span>
                                                @endif
                                            </div>
                                            
                                            <div class="form-group form-float {{$errors->has('nama_kelas') ? ' has-danger' : ''}}" >
                                                <select name="nama_kelas" class="form-control show-tick">
                                                    <option value="">-- Please select class name--</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
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