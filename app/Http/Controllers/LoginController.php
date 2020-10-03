<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AddUser;

class LoginController extends Controller
{
   public function showLoginForm ()
   {
       return view ('users.asisten.login');
   }


   public function postLogin(Request $request)
  {
      // Validate the form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);
      // Attempt to log the user in
      // Passwordnya pake bcrypt
    if (Auth::guard('assistant')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('assistant')->with('susksens');
    } else{
      return redirect()->intended('login');
    }
  }
}
