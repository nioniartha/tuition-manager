<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Students;
use App\Officers;
use App\Payment;


class DashboardController extends BaseController
{
    function index(){
        $students_nioni = Students::with('kelas')->with('tuition')->count();
        $officers_nioni = Officers::count();
        $history_nioni = Payment::where('officers_id_petugas',auth()->user()->id_petugas)
                                    ->with('officers')
                                    ->with('students')
                                    ->with('tuition')
                                    ->count();

        $history_nominal_nioni = Payment::where('officers_id_petugas',auth()->user()->id_petugas)
                                    ->with('officers')
                                    ->with('students')
                                    ->with('tuition')
                                    ->get();
        $nominal = 0;
        foreach($history_nominal_nioni as $value) {
            $nominal += $value->jumlah_bayar;
        }
        // dd($students_nioni,$officers_nioni,$history_nioni, $nominal);
    	return view('dashboard.index')
                    ->with('students_nioni',$students_nioni)
                    ->with('officers_nioni',$officers_nioni)
                    ->with('history_nioni',$history_nioni)
                    ->with('nominal',$nominal);
    }
}
