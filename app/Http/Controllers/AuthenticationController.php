<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;
use Alert;

class AuthenticationController extends Controller
{
    
    function login(){
    	return view('authentication.login');
    }

    public function postLogin(Request $request)
    {
         // Validate the form data
        $this->validate($request, [
          'username' => 'required',
          'password' => 'required'
        ]);

          // Attempt to log the user in
          // Passwordnya pake bcrypt
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            Alert::success('Success', 'Login Succes');
            return redirect()->intended('dashboard');
        } 

        return redirect('/login')->with('error', 'Wrong username/password');
    }

    public function logout()
    {
      if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
      } elseif (Auth::guard('student')->check()) {
        Auth::guard('student')->logout();
      }
  
      return redirect('/');
  
    }

    function register(){
    	return view('authentication.register');
    }

    function lockscreen(){
        return view('authentication.lockscreen');
    }

    function forgot(){
    	return view('authentication.forgot');
    }
    
    function page404(){
    	return view('authentication.page404');
    }

    function page500(){
        return view('authentication.page500');
    }

    function offline(){
    	return view('authentication.offline');
    }
}
