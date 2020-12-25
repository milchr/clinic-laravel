<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    private $id_patient;
    private $firstName;
    private $lastName;
    private $age;

    public function getId(){
      return $this->id_patient;
    }

    public function setId($id_patient){
      $this->id_patient = $id_patient;
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

    public function getAge(){
      return $this->age;
    }

    public function setAge($age){
      $this->age = $age;
    }
}
