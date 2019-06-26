<?php 

namespace App\Model;

use App\Core\Model as BaseModel;
class Student extends BaseModel{

	public function createTable(){
        $sql = "CREATE TABLE tbl_student2(
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(100) NOT NULL,
            date_of_birth DATE NOT NULL,
            address TEXT,
            roll_no INT NOT NULL,
            PRIMARY KEY ( id )
        );";

        $this->db->query($sql);
	}
}