<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    private $id_doctor;
    private $firstName;
    private $lastName;
    private $specialization;

    public function getId(){
      return $this->id_doctor;
    }

    public function setId($id_doctor){
      $this->id_doctor = $id_doctor;
    }

    public function getFirstName(){
      return $this->firstName;
    }

    public function setFirstName($firstName){
      $this->firstName = $firstName;
    }

    public function getLastName(){
      return $this->lastName;
    }

    public function setLastName($lastName){
      $this->lastName = $lastName;
    }

    public function getSpecialization(){
      return $this->specialization;
    }

    public function setSpecialization($specialization){
      $this->specialization = $specialization;
    }
}
