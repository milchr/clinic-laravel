<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    private $id;
    private $id_doctor;
    private $id_patient;
    private $date;

    public function getId(){
      return $this->id;
    }

    public function setId($id){
      $this->id = $id;
    }

    public function getIdDoctor(){
      return $this->id_doctor;
    }

    public function setIdDoctor($id_doctor){
      $this->id_doctor = $id_doctor;
    }

    public function getIdPatient(){
      return $this->id_patient;
    }

    public function setIdPatient($id_patient){
      $this->id_patient = $id_patient;
    }

    public function getDate(){
      return $this->date;
    }

    public function setDate($date){
      $this->date = $date;
    }
}
