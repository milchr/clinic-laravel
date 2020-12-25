<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DoctorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('przychodnia.index');
});

Route::get('/pacjenci', 'ClinicController@showPatients');
Route::get('/lekarze', 'ClinicController@showDoctors');
Route::get('/wizyty', 'ClinicController@showVisits');

Route::get('/create_doctor', 'DoctorController@showCreateDoctorForm');
Route::post('/create_doctor', 'DoctorController@store');
Route::get('/delete_doctor/{id_doctor}', 'DoctorController@destroy');

Route::get('/create_patient', 'PatientController@showCreatePatientForm');
Route::post('/create_patient', 'PatientController@store');
Route::get('/delete_patient/{id_patient}', 'PatientController@destroy');

Route::get('/create_visit', 'VisitController@showVisitForm');
Route::post('/create_visit', 'VisitController@store');
Route::get('/create_application', 'VisitController@showApplicationForm');
Route::post('/create_application', 'VisitController@storeApplication');
Route::get('/delete_visit/{id}', 'VisitController@destroy');
Route::get('/patient_visits', 'VisitController@showPatientVisits');

Route::get('/login', 'LoginController@login');
Route::post('/checkLogin', 'LoginController@checkLogin');
Route::get('/successLogin', 'LoginController@successLogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/register', 'UserController@showRegisterForm');
Route::post('/register', 'UserController@store');
