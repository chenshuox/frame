<?php
namespace simple;

class ApplicationHelper
{
	private $route;
	private $control;
	private $action;

	public function __construct() {
		require "request/pathinfo.php";
		$this->route = new \simple\request\Pathinfo();
		$this->init();
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


?>