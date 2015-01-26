<?php
namespace simple\application\controller;
use simple\system\core\controller;

class Home extends controller\Controller
{
	public function index() {
	
		if($this->get())
		{
			$this->display("home", "index");
		}

		if($this->post())
		{
			//处理登陆数据过滤
			if($this->command("login")){
				$this->model("admin");
			}
			
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