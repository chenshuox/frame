<?php
namespace simple\application\controller;

class Admin extends \simple\system\core\controller\Controller
{
	public function index() {
	
		if($this->get())
		{
			$this->display("admin", "login");
		}

		if($this->post())
		{
			$this->command("login");
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