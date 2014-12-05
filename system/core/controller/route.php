<?php
namespace simple\system\core\controller;
class Route
{	
	private $route;
	public $control;
	public $action;
	private $data;

	public function __construct() {
		$this->route = new \simple\system\core\request\Pathinfo();
		$array = \simple\system\core\common\Config::get("route");
		$this->data = $array;
		$this->control();
		$this->action();
	}

	//获取控制器
	private function control() {
		$control = $this->route->get(1);
		if(empty($control)) {
			return $this->control = $this->data["default"]["controller"];
		}
		return $this->control = $this->route->get(1);
	}

	//获取方法
	private function action() {
		$action = $this->route->get(2);
		if(empty($action)) {
			return $this->action = $this->data["default"]["action"];
		}
		return $this->action = $this->route->get(2);
	}

}

?>