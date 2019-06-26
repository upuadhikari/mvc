<?php
namespace App\Controller;

use App\Core\Controller as BaseController;

class FrontController extends BaseController
{
	protected $templateData = [];
	public function __construct(){
		parent::__construct();
	}
}


