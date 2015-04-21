<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;


class Category extends controller\Controller
{
	public $data;

	public function set() {
		session_start();
		if(isset($_SESSION["manage"])){
			//调用模型
			$this->model("category", "select");
			//获取模型返回数据
			$this->data = registry\Request::instance()->get("data");
			//将数据返回视图
			$this->assign("data",$this->data);
			//显示界面
			$this->view("category", "set");
		}else{
			$this->view("common","404");
			exit;
		}
	}

	public function add() {
		$this->view("category", "add");
	}

	

}

?>