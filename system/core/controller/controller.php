<?php
namespace simple\system\core\controller;
use simple\system\core\request;

class Controller
{
	public $data = array();
	
	public function __construct() {

	}

	public function assign($key, $value) {
		$this->data[$key] = $value;
	}

	public function display($dir, $file) {
		extract($this->data);
		$path = new request\Pathinfo();
		include "application/view/{$dir}/{$file}.php";
	}

	public function command($cmd) {
		include "service/command/{$cmd}.php";
		$classname = "\\simple\\service\\command\\{$cmd}";
		$object = new $classname;
		$object->execute();
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