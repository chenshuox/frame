<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;


class Admin extends controller\Controller
{

	public function init(){
		$this->view("admin","init");
	}

	public function index() {
		session_start();
		if($this->get()) {
			if(isset($_SESSION["manage"])){
				$this->view("admin", "index");
			}else{
				$this->view("admin", "login");
			}
		}
		if($this->post()) {
			//调用模型
			$this->model("admin", "index");
			if(registry\Request::instance()->get("bool")){
				$user = $this->getdata("username");
				$this->assign("user", $user);
				$this->view("admin", "index");
			}else{
				$this->assign("error", "用户名或者密码错误！");
				$this->view("admin", "login");
			}
		}
	}

	public function logout() {
		$user = $this->getdata("username");
		setcookie($user, time()-3600);
		$this->jump("home", "index");
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