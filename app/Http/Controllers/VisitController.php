<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Visit;
use App\Models\User;
use App\Models\Application;

class VisitController extends Controller {

  public function showVisitForm() {

    $users = User::all();
    $applications = Application::all();
    $doctors = Doctor::all();
    $patients = Patient::all();

    return view('przychodnia.create_visit', [
    'doctors' => $doctors,
    'patients' => $patients,
    'applications' => $applications,
    'users' => $users ]);

  }

  public function showApplicationForm() {


    return view('przychodnia.visit_application');

  }

  public function showPatientVisits() {

    $doctors = Doctor::all();
    $patients = Patient::all();
    $wizyty = Visit::all();
    $users = User::all();
    return view('przychodnia.patient_visits', ['visits' => $wizyty, 'doctors' => $doctors, 'patients' => $patients, 'users' => $users]);
  }

  public function store(Request $request) {

    $visit = new Visit;
    $visit->id_doctor = request('id_doctor');
    $visit->id_patient = request('id_patient');
    $visit->date = request('date');

    $visit->save();

    return redirect('/wizyty');

  }

  public function storeApplication(Request $request) {

    $application = new Application;
    $id =  User::where('email', request('email')) -> first();
    $application->id_user = $id['id'];
    $application->description = request('description');

    $application->save();

    return redirect('/patient_visits');

  }

  public function destroy($id) {
    $visit = Visit::where('id', '=', $id);
    $visit->delete();
    return redirect('/wizyty');
  }
}
