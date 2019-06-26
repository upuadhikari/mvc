<?php 

namespace App\Core;

abstract class Common
{
	public $config;

	public function __construct(){
		$this->config = new Config;
	}

	public function redirect($uri = '')
	{
		if ( ! preg_match('#^(\w+:)?//#i', $uri))
		{
			$uri = $this->config->base_url.'/index.php/'.$uri;
		}

		header('Location: '.$uri, TRUE);
		exit;
	}
}