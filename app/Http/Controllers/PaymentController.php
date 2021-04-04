<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Payment;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.payment');
    }

    public function loadData(Request $request)
    {
    	if ($request->has('q')) {
    		$cari = $request->q;
    		$data = DB::table('siswa_nioni')->select('id_siswa', 'nisn', 'nama')
                            ->where("nisn","LIKE",'%'.$cari.'%')
                            ->orWhere("nama","LIKE",'%'.$cari.'%')
                            ->get();
    		return response()->json($data);
    	}
    }

    public function search(Request $request) {

        $student_nioni = Students::with('kelas.vocational')
                            ->with('tuition')
                            ->where('id_siswa', $request->data)
                            ->get();

        $check_transaksi_siswa = Payment::where('students_id_siswa',$request->data)
                            ->where('jumlah_bayar', '!=', 0)
                            ->latest('created_at')
                            ->first();

        if($check_transaksi_siswa != null) {
            $history_transaksi_siswa = Payment::where('students_id_siswa',$request->data)
                                        ->where('bulan_sudah_bayar', 12)
                                        ->orderBy('tahun_dibayar', 'desc')
                                        ->having('tahun_dibayar', '<=', $check_transaksi_siswa->tahun_dibayar)
                                        ->get();
        } else {
            $history_transaksi_siswa = null;
        }
        
        return response()->json([
                            'data-siswa'=> $student_nioni,
                            'transaksi'=> $check_transaksi_siswa,
                            'history'=> $history_transaksi_siswa]);
    }
    
    public function payment(Request $request)
    {
        // dd($request->all());
        $id_siswa_nioni = $request->idStudent;
        $bulan_dibayar_nioni = $request->monthsToBePaid;
        $check_transaksi_siswa = Payment::where('students_id_siswa',$id_siswa_nioni)
                                    ->latest('created_at')
                                    ->first();
        // dd($check_transaksi_siswa->tahun_dibayar);
        $payment_nioni = new Payment;
        $payment_nioni->bulan_dibayar = $bulan_dibayar_nioni;
        $payment_nioni->tgl_bayar = date('Y-m-d H:i:s');
        $payment_nioni->jumlah_bayar = $request->jumlahBayar;
        $payment_nioni->officers_id_petugas = $request->idPetugas;
        $payment_nioni->students_id_siswa = $id_siswa_nioni;
        $payment_nioni->tuition_id_spp = $request->idSpp;
        
        

        if($check_transaksi_siswa == null ) {
            $payment_nioni->tahun_dibayar = $request->yearInput;
            $payment_nioni->bulan_sudah_bayar =  $bulan_dibayar_nioni;
            $payment_nioni->sisa_bulan_bayar = 12 -  $bulan_dibayar_nioni;
            $payment_nioni->save();
        } else {
            if ($check_transaksi_siswa->sisa_bulan_bayar == 0) {
                $payment_nioni->tahun_dibayar = (int)$check_transaksi_siswa->tahun_dibayar + 1;
                $payment_nioni->bulan_sudah_bayar =  $bulan_dibayar_nioni;
                $payment_nioni->sisa_bulan_bayar = 12 -  $bulan_dibayar_nioni;
                $payment_nioni->save();
            } else {
                $payment_nioni->tahun_dibayar = $request->yearInput;
                $payment_nioni->bulan_sudah_bayar = $check_transaksi_siswa->bulan_sudah_bayar + $bulan_dibayar_nioni;
                $payment_nioni->sisa_bulan_bayar = $check_transaksi_siswa->sisa_bulan_bayar -  $bulan_dibayar_nioni;
                $payment_nioni->save();
            }
        }
        
        return view('payment.payment_detail')->with('check_transaksi_siswa',$payment_nioni);

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
