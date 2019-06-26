<?php
namespace App\Controller;

use App\Core\Controller as BaseController;


class DefaultController extends BaseController
{
	public function index(){
		$this->render('default/index');
	}
}