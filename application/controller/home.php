<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\common;
use simple\service\mapper;

class Home extends controller\Controller
{

	public function init() {
		$array = common\Config::get("web");
		$this->assign("webName", $array["webName"]);
		$this->assign("description",$array["description"]);
		$this->assign("powered",$array["powered"]);
		$this->view("home", "index");
	}

	public function index() {
		$mapper = new mapper\Category();
		$data = $mapper->firstCate();
		$this->assign("data", $data);
		$this->view("home", "index");
	}

	public function show() {
		$this->view("home", "show");
	}

	public function login() {
		$this->view("home", "login");
	}

	public function end() {
		header("content-type:text/html; charset=utf-8");
		echo "<!DOCTYPE html>\n<html>\n\t<title>网站维护中，请稍后访问！</title>\nchenshuo";
		echo "\n</html>";
	}

}

?>