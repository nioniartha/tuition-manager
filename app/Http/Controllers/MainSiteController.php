<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use Session;

class MainSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_info = Session::get('student_nioni');

        $check_transaksi_siswa = Payment::where('students_id_siswa',$student_info->id_siswa)
                            ->latest('created_at')
                            ->first();
        if($check_transaksi_siswa != null) {
            $history_transaksi_siswa = Payment::where('students_id_siswa',$student_info->id_siswa)
                                                    ->where('bulan_sudah_bayar', 12)
                                                    ->orderBy('tahun_dibayar', 'asc')
                                                    ->having('tahun_dibayar', '<=', $check_transaksi_siswa->tahun_dibayar)
                                                    ->get();
        } else {
            $history_transaksi_siswa = null;
        }
        // dd($check_transaksi_siswa);
        return view('mainsite.index')
                            ->with('check_transaksi_siswa', $check_transaksi_siswa)
                            ->with('history_transaksi_siswa', $history_transaksi_siswa);
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
