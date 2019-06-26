<?php
namespace App\Controller;

use App\Core\Controller as BaseController;

class RegisterController extends BaseController
{

	public function index()
	{

		$this->render('register/index');
		$obj= new \App\Model\allpost;
	    $obj->showall();
	
    }



public function login()
{   
	$this->render('register/login');

if (isset($_POST['lsubmit'])) 
    {
      $_SESSION['username']=$_POST['email1'];
      $_SESSION['pass']=$_POST['pass1'];
      return $this->redirect("model");
    }
}



public function cacc()
{
	
	if (isset($_POST['submit'])) 
  {  
    $this->render2('caccch');
    $_SESSION['username']=$_POST['mail'];
    $_SESSION['pass']=$_POST['passwd1'];
    return $this->redirect("model");
    
  }

$this->render('register/index');
$this->render('register/cacc');
}
}

