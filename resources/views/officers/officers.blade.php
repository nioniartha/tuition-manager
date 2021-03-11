@extends('layout.master')
@section('title', 'Officers')
@section('parentPageTitle', 'Modules')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
<!-- Basic Examples -->
<div class="row clearfix">
    @if(count($errors) > 0) 
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic</strong> Examples </h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Add Officer
                </button>  
                <div class="table-responsive">
                    <table id="officersDataTables" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead> 
                            <tr>
                                <th>Username</th>
                                <th>Officer Name</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Officer Name</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($officers_nioni as $officer_nioni)
                            <tr>
                                <td>{{ $officer_nioni->username}}</td>
                                <td>{{ $officer_nioni->nama_petugas}}</td>
                                <td>{{ $officer_nioni->level}}</td>
                                <td>
                                    <a href="officers/{{ $officer_nioni->id_petugas}}/edit" class="btn btn-warning btn-block">Edit</a>
                                    <form action="{{ action('OfficersController@destroy', $officer_nioni->id_petugas) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
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
                                        <form id="form_validation" action="officers" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group form-float {{$errors->has('username') ? ' has-danger' : ''}}">
                                                <input type="text" class="form-control" placeholder="Username" name="username" required value="{{old('username')}}">
                                            </div>
                                            <div class="form-group form-float">
                                                <input type="text" class="form-control" placeholder="Officer Name" name="officerName" required>
                                            </div>
                                            <div class="form-group form-float">
                                            <p class="text-danger"> * Default password : password</p>
                                            </div>
                                            <div class="form-group">
                                                <div class="radio inlineblock m-r-20">
                                                    <input type="radio" name="role" id="admin" class="with-gap" value="admin">
                                                    <label for="admin">Admin</label>
                                                </div>                                
                                                <div class="radio inlineblock">
                                                    <input type="radio" name="role" id="officer" class="with-gap" value="officer" checked="">
                                                    <label for="officer">Officer</label>
                                                </div>
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
@stop