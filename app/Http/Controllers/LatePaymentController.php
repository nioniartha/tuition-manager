<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Kelas;
use App\Tuition;
use App\Students;

class LatePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa_nunggak = [];
        $get_record_payment = Payment::all()
                            ->groupBy('students_id_siswa')
                            ->sortByDesc('tgl_bayar');
        
        if($get_record_payment != null) {
            foreach($get_record_payment as $keyId => $value) {
                foreach($value as $key => $val) {
                    $check_transaksi_siswa = Payment::where('students_id_siswa',$keyId)
                            ->latest('created_at')
                            ->first();
                    
                            $month_now = (int) date('m');
                            $year_now = date("Y");
                            $year_now = (int)$check_transaksi_siswa->tahun_dibayar + 1;
                            $done = 0; $latePayment = 0; 

                            $done += $check_transaksi_siswa->bulan_sudah_bayar;
                            if($year_now == $check_transaksi_siswa->tahun_dibayar || $year_now) {
                                if($month_now <= 6) {
                                    $month_now = $month_now + 6;
                                    if($check_transaksi_siswa->bulan_sudah_bayar < 6) {
                                        $latePayment = $month_now - (+$check_transaksi_siswa->bulan_sudah_bayar);
                                        $latePayment = (-$latePayment);
                                    } else {
                                        $latePayment = $month_now - $check_transaksi_siswa->bulan_sudah_bayar;
                                    }
                                } else {
                                    $month_now = $month_now - 6;
                                    if($check_transaksi_siswa->bulan_sudah_bayar != 12) {
                                        if($check_transaksi_siswa->bulan_sudah_bayar > 6) {
                                            $latePayment = $month_now - (+$check_transaksi_siswa->bulan_sudah_bayar);
                                            $latePayment = (-$latePayment);
                                        } else {
                                            $latePayment = $month_now - $check_transaksi_siswa->bulan_sudah_bayar;
                                        }  
                                    }                                                                                              $latePayment = $month_now - (+$check_transaksi_siswa->bulan_sudah_bayar);

                                }
                                if($latePayment > 1 || $check_transaksi_siswa->bulan_sudah_bayar == 12) {
                                    $latePayment = 0;
                                }
                                
                               
                                // $check_transaksi_siswa->put('latePayment', $latePayment);

                                if($latePayment != 0) {
                                    $data_siswa = $students_nioni = Students::where('id_siswa', $check_transaksi_siswa->students_id_siswa)
                                                                            ->with('kelas')
                                                                            ->with('kelas.vocational')
                                                                            ->with('tuition')
                                                                            ->first();
                                    $siswa_nunggak[] = array_merge(['payment'=>$check_transaksi_siswa->toArray()], ['tunggakan' => $latePayment], ['data_siswa' =>$data_siswa->toArray()]);
                                }
                                
                                
                                
                            }
                    
                }// end foreach
            }
            // dd($siswa_nunggak);
        }
        
        

        $class_nioni = Kelas::with('vocational')
                            ->get();
        
        $tuition_nioni = Tuition::orderBy('created_at','desc')->get();

        // dd($request->query->all());
        return view ('latePayment.latePayment')
                ->with('siswa_nunggak',$siswa_nunggak)
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
