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
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Add Tuition
                </button>  
                <div class="table-responsive">
                    <table id="tuitionDataTables" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead> 
                            <tr>
                                <th>School Year</th>
                                <th>Nominal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>School Year</th>
                                <th>Nominal</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($tuitions_nioni as $tuition_nioni)
                            <tr>
                                <td>{{ $tuition_nioni->tahun}}</td>
                                <td>@currency($tuition_nioni->nominal)</td>
                                <td>
                                    <a href="tuition/{{ $tuition_nioni->id_spp}}/edit" class="btn btn-warning btn-block">Edit</a>
                                    <form action="{{ action('TuitionController@destroy', $tuition_nioni->id_spp) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
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
                         <h5 class="modal-title" id="exampleModalLabel">Add Tuition</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                    <form id="form_validation" action="tuition" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            
                                            <div class="form-group form-float {{$errors->has('kelas') ? ' has-danger' : ''}}" >
                                                <select name="tahun" class="form-control ">
                                                    <option value="">-- Please select year--</option>
                                                    <?php
                                                        $date = date('Y', strtotime('-5 Years'));
                                                        $date2 = date('Y', strtotime('+1 Years'));
                                                        for($i = $date; $i < $date2 + 4; $i++){
                                                            echo '<option value='.$i.'-'.($i+1).'>'.$i.'-'.($i+1).'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                @if($errors->has('kelas'))          
                                                    <span class="help-block"> {{$errors->first('kelas')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group form-float {{$errors->has('vocational') ? 'has-danger' : ''}}">
                                                <input type="number" class="form-control" id="nominal" placeholder="Nominal" name="nominal" required value="{{old('nominal')}}">
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#nominal').mask('0.000.000.000.000.000', {reverse: true});
    });       
</script>

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