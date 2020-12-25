<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    private $id;
    private $id_user;
    private $description;

    public function getId(){
      return $this->id;
    }

    public function setId($id){
      $this->id = $id;
    }

    public function getIdUser(){
      return $this->id_user;
    }

    public function setIdUser($id_user){
      $this->id_user = $id_user;
    }

    public function getdescription(){
      return $this->description;
    }

    public function setdescription($description){
      $this->description = $description;
    }

}
