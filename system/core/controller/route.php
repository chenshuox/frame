<?php
namespace simple\system\core\controller;
class Route
{	
	private $route;
	public $control;
	public $action;

	public function __construct() {
		$this->route = new \simple\system\core\request\Pathinfo();
		$this->control();
		$this->action();
	}

	//获取控制器
	private function control() {
		if(empty($this->route->get(1))) {
			return $this->control = "home";
		}
		return $this->control = $this->route->get(1);
	}

	//获取方法
	private function action() {
		if(empty($this->route->get(2))) {
			return $this->action = "index";
		}
		return $this->action = $this->route->get(2);
	}
}

?>