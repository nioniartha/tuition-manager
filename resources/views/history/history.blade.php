@extends('layout.master')
@section('title', 'History')
@section('parentPageTitle', 'Transaction')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')

<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Transaction</strong> History </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>Name</th>
                                <th>Per Month</th>
                                <th>Paid (month)</th>
                                <th>Nominal</th>
                                <th>Payment Date</th>
                                <th>School Year</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NISN</th>
                                <th>Name</th>
                                <th>Per Month</th>
                                <th>Paid (month)</th>
                                <th>Nominal</th>
                                <th>Payment Date</th>
                                <th>School Year</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($history_nioni as $value_nioni)
                            <tr>
                                <td>{{ $value_nioni->students->nisn}}</td>
                                <td>{{ $value_nioni->students->nama}}</td>
                                <td>{{ $value_nioni->tuition->nominal}}</td>
                                <td>{{ $value_nioni->bulan_dibayar}}</td>
                                <td>{{ $value_nioni->jumlah_bayar}}</td>
                                <td>{{ $value_nioni->created_at}}</td>
                                <td>{{ $value_nioni->tahun_dibayar}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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