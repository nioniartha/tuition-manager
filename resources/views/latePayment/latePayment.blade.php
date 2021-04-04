@extends('layout.master')
@section('title', 'Late Payment')
@section('parentPageTitle', 'Report')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')

<?php


// foreach ($latePayment_nioni as $year => $students) {
//  echo "<h2>$year</h2>";
//  echo "<ul>";
//    foreach ($students as $student) {
//      echo "<li>".$student->bulan_sudah_bayar."</li>";
//    }
//  echo "</ul>";
// }

?>
<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Late Payment</strong> Report </h2>
            </div>
            <div class="body">
                <!-- <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Filter
                </button>  -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Per Month</th>
                                <th>Late Payment (month)</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NISN</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Per Month</th>
                                <th>Late Payment (month)</th>
                                <th>Nominal</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($siswa_nunggak as $key => $value)
                                <tr>
                                    <td>{{ $value['data_siswa']['nisn']}}</td>
                                    <td>{{ $value['data_siswa']['nama']}}</td>
                                    <td>{{ $value['data_siswa']['kelas']['kelas']}} {{ $value['data_siswa']['kelas']['vocational']['jurusan']}} {{ $value['data_siswa']['kelas']['nama_kelas']}}</td>
                                    <td>@currency($value['data_siswa']['tuition']['nominal'])</td>
                                    <td>{{ $value['tunggakan']}}</td>
                                    <?php 
                                        $nominal =  (int)$value['data_siswa']['tuition']['nominal'] * $value['tunggakan'];
                                        $nominal = $nominal * -1;
                                    ?>
                                    <td>@currency($nominal)</td>
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
                         <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="body">
                                        <form id="form_validation" action="{{route('report.latePayment')}}" method="get" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="form-group form-float {{$errors->has('kelas') ? ' has-danger' : ''}}">
                                                <select name = "kelas" class="form-control show-tick">
                                                    <option value="">-- Please select class--</option>
                                                    @foreach ($class_nioni as $id_nioni => $v_nioni)
                                                        <option value="{{ $v_nioni->id_kelas }}">{{ $v_nioni->kelas}} {{ $v_nioni->vocational->jurusan}}</option>
                                                    @endforeach
                                                </select>
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