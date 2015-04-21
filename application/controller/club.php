<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;


class Club extends controller\Controller
{	
	public $data;

	public function add() {
		session_start();
		if(isset($_SESSION["manage"])){
			if($this->get()){
				$this->selectMatch();
				//传递变量
				$this->assign("data",$this->data);
				//分配视图
				$this->view("club","add");
			}
			if($this->post()){
				$this->selectMatch();
				$this->assign("data",$this->data);
				$this->assign("success","添加成功！请继续添加！");
				$this->view("club","add");
			}
			
		}else{
			$this->view("common","404");
			exit;
		}
		
	}
	
	//查询所有的联赛
	public function selectMatch() {
		//调用模型
		$this->model("club","selectMatch");
		//获取数据
		$this->data = registry\Request::instance()->get("data");
	}
}

?>