<?php 

namespace App\Core;

abstract class Controller2 extends Common
{
	
    protected function render($filePath, $data = [])
	{
		extract($data);
		require(APPPATH."Model/" . $filePath . ".php");
	}
}
