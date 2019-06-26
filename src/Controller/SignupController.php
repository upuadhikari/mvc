<?php
namespace App\Controller;

// use App\Core\Controller as BaseController;

class SignupController extends FrontController
{
	public function index(){
		if(isset($_POST['btnSubmit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$userModel = new \App\Model\User;
			$userModel->signup($email, $password);

			$this->redirect('register/login');
		}
		$this->templateData['layout'] = 'signup/index';

		$this->render('base', $this->templateData);
	}
}


