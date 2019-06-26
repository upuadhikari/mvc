<?php 

namespace App\Core;

abstract class Controller extends Common
{
	protected function render($filePath, $data = [])
	{
		extract($data);
		require(APPPATH."views/" . $filePath . ".php");
	}
    protected function render2($filePath, $data = [])
	{
		extract($data);
		require(APPPATH."Model/" . $filePath . ".php");
	}
	protected function render3($filePath, $data = [])
	{
		extract($data);
		require(APPPATH."Controller/" . $filePath . ".php");
	}
}
