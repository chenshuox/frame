<?php
namespace simple\system\core\controller;

class Controller
{
	public function __construct() {

	}

	public function assign() {

	}

	public function display($dir, $file) {
		$path = new \simple\system\core\request\Pathinfo();
		include "application/view/".$dir."/".$file.".php";
	}

	public function command() {

	}

	public function get() {
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			return true;
		}
	}

	public function post() {
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			return true;
		}
	}
}

?>