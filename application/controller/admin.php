<?php
namespace simple\application\controller;
use simple\system\core\controller;


class Admin extends controller\Controller
{
	public function index() {
	
		if($this->get()) {
			$this->display("admin", "login");
		}

		if($this->post()) {
			$this->model();
			$this->display("admin", "index");
		}

	}

	public function login() {
		if($this->get()) {
			echo "<meta charset='utf-8'> 非法访问！";
		}

		if($this->post()) {
			echo "post";
		}
	}

	public function show() {
		echo "show";
	}

	public function end() {
		header("content-type:text/html; charset=utf-8");
		echo "<!DOCTYPE html><html>网站维护中，请稍后访问！\nchenshuo";
		echo "\n</html>";
	}

}

?>