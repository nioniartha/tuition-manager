<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainLoginController extends Controller
{
    function login(){
    	return view('mainsite.login');
    }

    public function postLogin(Request $request)
    {
        // dd($request->all());
         // Validate the form data
        $this->validate($request, [
          'nisn' => 'required'
        ]);
        $student_nioni = DB::table('siswa_nioni')->where('nisn',$request->nisn)->first();
        // dd($student_nioni);
        if($student_nioni == null){
        
            return redirect('mainsite/login')->with('error', 'Nisn not found');
 
         } else {
            if($request->nisn == $student_nioni->nisn){
             
                // Session::put('login', 'Selamat anda berhasil login');
                return view('mainsite.index');
     
             } else {
                  
                return redirect('mainsite/login')->with('error', 'Nisn not found');
       
             }

         }
        
         
          // Attempt to log the user in
        // if (Auth::guard('student')->attempt(['nisn' => $request->nisn])) {
        //     // if successful, then redirect to their intended location
        //     Alert::success('Success', 'Login Succes');
        //     return redirect()->intended('mainsite');
        // } 
        
        // return redirect('mainsite/login')->with('error', 'Nisn not found');
    }

    public function logout()
    {
      if (Auth::guard('student')->check()) {
        Auth::guard('student')->logout();
      } elseif (Auth::guard('student')->check()) {
        Auth::guard('student')->logout();
      }
  
      return redirect('mainsite/login');
  
    }
}
