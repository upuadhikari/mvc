<?php

namespace App\Controller;

use App\Core\Controller as BaseController;

class ModelController extends BaseController
{

	public function index()
	{

		
	$this->render2('loginch');
	//$this->render2('userhome');
    
	    
	}
	public function logout()
      {
    session_destroy();
    $this->redirect('register/index');
      } 
	
/*if(isset($_POST['submit'])) 
{
  echo $_POST['passwd1'];
}
*/
   
}