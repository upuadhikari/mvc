<?php

namespace App\Core;

class Router extends Common
{
	private $controller;

	public function process(){
		$pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null;
		// default controller for home path
		if(!$pathInfo){
			$controllerClass = 'DefaultController';
			$parsedUrl = [];
		}else{
			$parsedUrl = $this->parse($pathInfo);
			$controllerClass = $this->toCamelCase(array_shift($parsedUrl)) . 'Controller';
		}

		if (file_exists(APPPATH.'Controller/' . $controllerClass . '.php')){
			$controllerClass = '\App\Controller\\'.$controllerClass;
        	$this->controller = new $controllerClass;
		}
		else{
        	return $this->redirect('error');
		}

		// default method index to load
		if(empty($parsedUrl)) $parsedUrl[] = 'index';


		call_user_func_array(array($this->controller, array_shift($parsedUrl)), $parsedUrl);
	}

	public function parse($url){
		$parsedUrl = parse_url($url);
		$parsedUrl['path'] = ltrim($parsedUrl['path'], '/');
		$parsedUrl['path'] = trim($parsedUrl['path']);

		$params = explode('/', $parsedUrl['path']);

		return $params;
	}

	private function toCamelCase($text)
	{
		$text = str_replace('-', ' ', $text);
		$text = ucwords($text);
		$text = str_replace(' ', '', $text);

		return $text;
	}


}