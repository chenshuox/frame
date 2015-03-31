<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;


class Club extends controller\Controller
{	

	public function add() {
		session_start();
		if(isset($_SESSION["manage"])){
			if($this->get()){
				$this->model("club","selectMatch");
				$this->view("club","add");
			}
			if($this->post()){
				$this->assign("success","添加成功！请继续添加！");
				$this->view("club","add");
			}
			
		}else{
			$this->view("common","404");
			exit;
		}
		
	}
}

?>