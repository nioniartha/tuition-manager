<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Alert;

class MainLoginController extends Controller
{
    function login(){
    	return view('mainsite.login');
    }

    public function postLogin(Request $request)
    {
         // Validate the form data
        $this->validate($request, [
          'nisn' => 'required'
        ]);
          
          //Attempt to log the user in
        if (Auth::guard('student')->attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            Alert::success('Success', 'Login Succes');
            return redirect()->intended('mainsite');
        } 
        
        return redirect('mainsite/login')->with('error', 'Nisn not found');
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
