<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class User extends BaseModel{

    public function signup($email, $password){
        $sql = "INSERT INTO user (email, password) VALUES ('".$email."', '".$password."')";
        $this->db->query($sql);
    }
}