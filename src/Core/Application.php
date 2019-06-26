<?php 

namespace App\Core;

class Application
{
	public function run()
	{   
		session_start();
		$router = new Router;
		$router->process();
	}
}