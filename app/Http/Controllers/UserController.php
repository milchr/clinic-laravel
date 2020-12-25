<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Patient;
use Validator;
use Auth;

class UserController extends Controller {

  public function showRegisterForm() {
    return view('przychodnia.register');
  }

  public function store(Request $request) {


        $user = new User;
        $user->name = request('name');
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $patient = new Patient;
        $patient->firstName = request('firstname');
        $patient->lastName = request('lastname');
        $patient->age = request('age');

        $patient->save();
        $user->save();

        return redirect('/login');

  }
}
