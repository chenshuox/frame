<?php
namespace simple\system\core\controller;

class ApplicationHelper
{
	private $control;
	private $action;

	//类的自动加载
	public static function load($filename) {
		$filename = strtolower($filename);
		if(preg_match("/\\\\/", $filename)) {
			$path = substr(str_replace("\\", "/", $filename).".php", 7);
		}
		require $path;
	}


	private function init() {
		$route = new \simple\system\core\controller\Route();
		$this->control = $route->control;
		$this->action = $route->action;
	}
	
	

	public function run() {
		$this->init();
		$filename = "application/controller/".$this->control.".php";
		
		if(!file_exists($filename)) {
			throw new \Exception("Error Processing Request");
		}
		include $filename;
		$control = ucfirst(strtolower($this->control));
		$classname = "\\simple\\application\\controller\\{$this->control}";
		$object = new $classname;
		$method = $this->action;
		$object->$method();
	}

}

spl_autoload_register("\simple\system\core\controller\ApplicationHelper::load");

?>