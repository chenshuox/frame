<?php
namespace simple;

class Application
{
	private $route;

	public function __construct() {
		require "request/pathinfo.php";
		$this->route = new \simple\request\Pathinfo();
	}

	private function control() {
		if(empty($this->route->get(1))) {
			return "home";
		}
		return $this->route->get(1);
	}

	private function action() {
		if(empty($this->route->get(2))) {
			return "index";
		}
		return $this->route->get(2);
	}

	public function run() {
		$control = $this->control();
		$controller = new $control();
		$action = $this->action();
		$controller -> $action();
	}

}


?>