<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Alert;
use App\Students;
use App\Payment;
use Session;

class MainLoginController extends Controller
{
    public function index() {
        if(!Session::get('login')){
            return redirect('mainsite/login')->with('alert','Login first!');
        }
        else{
            // $student_nioni = Students::with('kelas.vocational')
            //                 ->with('tuition')
            //                 ->where('nisn', $request->nisn)
            //                 ->first();
            
            // $history_transaksi_siswa = Payment::where('students_id_siswa',$student_nioni->id_siswa)
            //                 ->orderBy('tahun_dibayar', 'desc')
            //                 ->get();
            return view('mainsite.index');
        }
    }

    function login(){
    	return view('mainsite.login');
    }

    public function postLogin(Request $request)
    {
         // Validate the form data
        $this->validate($request, [
          'nisn' => 'required'
        ]);
        
        $student_nioni = Students::with('kelas.vocational')
                                  ->with('tuition')
                                  ->where('nisn', $request->nisn)
                                  ->first();
        // dd($student_nioni);
        if($student_nioni == null){
            return redirect('mainsite/login')->with('alert', 'Nisn not found');
         } else {
            if($request->nisn == $student_nioni->nisn){
                Session::put('student_nioni',$student_nioni->nisn);
                Session::put('login',TRUE);
                return redirect('mainsite');
             } else {
                return redirect('mainsite/login')->with('error', 'Nisn not found');
             }

         }
          //Attempt to log the user in
        // if (Auth::guard('student')->attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
        //     // if successful, then redirect to their intended location
            
        //     Alert::success('Success', 'Login Succes');
        //     return redirect()->intended('mainsite');
        // } 
        
        return redirect('mainsite/login')->with('error', 'Nisn not found');
    }

    public function logout()
    {
      Session::flush();
      return redirect('mainsite/login')->with('alert','Logout Success');
  
    }
}
