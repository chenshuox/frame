<?php
namespace simple\application\controller;

class Home extends \simple\system\core\controller\Controller
{
	public function index() {
	
		if($this->get())
		{
			$this->display("home", "index");
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
		echo "网站维护中，请稍后访问！";
	}

}

?>