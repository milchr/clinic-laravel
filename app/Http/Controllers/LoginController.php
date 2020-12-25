<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller {

  public function login() {
    return view('przychodnia.login');
  }

  public function checkLogin(Request $request) {

    $this->validate($request, [
      'email' => 'required',
      'password'  => 'required|alphaNum|min:3'
    ]);

    $user_data = array(
      'email' => $request->get('email'),
      'password' => $request-> get('password')
    );

    if(Auth::attempt($user_data)) {
      return redirect('/successLogin');
    }
    else {
      return back()->with('error',"Niepoprawne dane");
    }

  }

  public function successLogin() {
    return view('przychodnia.successLogin');
  }

  public function logout() {

    Auth::logout();

    return redirect('/');
  }
}
