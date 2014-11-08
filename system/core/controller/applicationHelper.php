<?php
namespace simple\system\core\controller;

class ApplicationHelper
{
	private $route;
	private $control;
	private $action;

	public function __construct() {
		//require CORE_PATH."request/pathinfo.php";
		//$this->route = new \simple\request\Pathinfo();
		//$this->init();
	}

	//类的自动加载
	public static function load($filename) {
		$filename = strtolower($filename);
		if(preg_match("/\\\\/", $filename)) {
			$path = substr(str_replace("\\", "/", $filename).".php", 7);
		}
		require $path;
	}


	private function init() {
		$this->control();
		$this->action();
	}
	
	private function control() {
		if(empty($this->route->get(1))) {
			return $this->control = "home";
		}
		return $this->control = $this->route->get(1);
	}

	private function action() {
		if(empty($this->route->get(2))) {
			return $this->action = "index";
		}
		return $this->action = $this->route->get(2);
	}

	public function run() {
		$filename = "application/controller/".$this->control.".php";
		if(file_exists($filename)) {
			//throw new \Exception("Error Processing Request", 1);
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

$path = new \simple\system\core\request\Pathinfo();
$chen = new \simple\system\core\controller\Controller();

?>