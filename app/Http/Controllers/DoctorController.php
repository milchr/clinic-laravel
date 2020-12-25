<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;


class DoctorController extends Controller {

  public function showCreateDoctorForm() {

    return view('przychodnia.create_doctor');

  }

  public function store(Request $request) {

    $doctor = new Doctor;
    $doctor->firstName = request('firstName');
    $doctor->lastName = request('lastName');
    $doctor->specialization = request('specialization');

    $doctor->save();

    return redirect('/lekarze');
  }

  public function destroy($id_doctor) {
    $doctor = Doctor::where('id_doctor', '=', $id_doctor);
    $doctor->delete();
    return redirect('/lekarze');
  }
}
