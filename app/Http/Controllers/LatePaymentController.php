<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Kelas;
use App\Tuition;

class LatePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check_transaksi_siswa = Payment::latest('tgl_bayar')
                            ->first();

        $month = (int) date('m');

        
        $history_transaksi_siswa = Payment::groupBy('students_id_siswa')->first();
        
        dd($history_transaksi_siswa);
        $class_nioni = Kelas::with('vocational')
                            ->get();
        
        $tuition_nioni = Tuition::orderBy('created_at','desc')->get();

        // dd($request->query->all());
        return view ('latePayment.latePayment')
                ->with('income_nioni',$income_nioni)
                ->with('class_nioni',$class_nioni)
                ->with('tuition_nioni',$tuition_nioni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
