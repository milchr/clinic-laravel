<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Visit;

class PatientController extends Controller {

  public function showCreatePatientForm() {

    return view('przychodnia.create_patient');

  }

  public function store(Request $request) {

    $patient = new Patient;
    $patient->firstName = request('firstName');
    $patient->lastName = request('lastName');
    $patient->age = request('age');

    $patient->save();

    return redirect('/pacjenci');
  }

  public function destroy($id_patient) {
    $patient = Patient::where('id_patient', '=', $id_patient);
    $patient->delete();
    return redirect('/pacjenci');
  }
}
