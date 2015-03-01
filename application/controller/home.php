<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\common;

class Home extends controller\Controller
{
	public function index() {
	
		if($this->get())
		{
			$array = common\Config::get("web");
			$this->assign("webName", $array["webName"]);
			$this->assign("description",$array["description"]);
			$this->assign("powered",$array["powered"]);
			$this->view("home", "index");
		}

		if($this->post())
		{
			//处理登陆数据过滤
			$this->model();
		}

	}

	public function show() {
		$this->view("home", "show");
	}

	public function end() {
		header("content-type:text/html; charset=utf-8");
		echo "<!DOCTYPE html>\n<html>\n\t<title>网站维护中，请稍后访问！</title>\nchenshuo";
		echo "\n</html>";
	}

}

?>