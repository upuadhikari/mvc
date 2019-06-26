<?php
namespace App\Controller;

use App\Core\Controller as BaseController;


class ErrorController extends BaseController
{
	public function index(){
		$this->render('error/404');
	}
}