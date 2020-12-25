<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Visit;

class ClinicController extends Controller {

   public function showDoctors(){

     $lekarze = Doctor::all(); //z bazy danych

     return view('przychodnia.lekarze', ['dane' => $lekarze]);
   }

   public function showPatients(){

     $pacjenci = Patient::all();

  #   $pacjenci = [
  #     ['imie' => 'adam', 'nazwisko' => 'kowalski' , 'wiek' => 30],
  #     ['imie' => 'Jan', 'nazwisko' => 'kowal' , 'wiek' => 20],
  #     ['imie' => 'Janusz', 'nazwisko' => 'nowak' , 'wiek' => 50]
  #   ];
     return view('przychodnia.pacjenci', ['dane' => $pacjenci]);
   }

   public function showVisits(){
     $doctors = Doctor::all();
     $patients = Patient::all();
     $wizyty = Visit::all();

     return view('przychodnia.wizyty', ['dane' => $wizyty, 'doctor' => $doctors, 'patient' => $patients]);
   }
}
