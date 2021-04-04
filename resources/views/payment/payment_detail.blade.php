@extends('layout.master')
@section('title', 'Detail Payment')
@section('parentPageTitle', 'Transaction')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <h5><strong>Payment ID: </strong> #{{$check_transaksi_siswa->id_pembayaran}}</h5>
                <div class="row">                                
                    <div class="col-md-6 col-sm-6">
                        <address>
                            <strong>{{$check_transaksi_siswa->students->nama}}</strong><br>
                            @currency($check_transaksi_siswa->jumlah_bayar)<br>
                        </address>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <p class="mb-0"><strong>Payment Date: </strong> {{date('d-m-Y')}}</p>
                        <p class="mb-0"><strong>Payment Status: </strong> <span class="badge badge-success">Success</span></p>     
                        <br>
                        <a href="{{route('payment.payment')}}">Back</a>                               
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@stop
