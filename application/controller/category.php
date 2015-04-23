<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;
use simple\system\core\request;
use simple\application\model;
use simple\service\mapper;

class Category extends controller\Controller
{
	
	//栏目管理
	public function set() {
		session_start();
		if(isset($_SESSION["manage"])){
			$this->find();
			//将数据返回视图
			$this->assign("data",$this->data);
			//显示界面
			$this->view("category", "set");
		}else{
			$this->view("common","404");
			exit;
		}
	}

	public function find() {
		//调用模型
		$this->model("category", "select");
		//获取模型返回数据
		$this->data = registry\Request::instance()->get("data");
	}

	//添加栏目
	public function add() {
		$get = new request\Pathinfo();
		$fid = $get->get(3);
		$mapper = new mapper\Category();
		$data = $mapper->id($fid);
		$this->assign("data",$data);
		
		if($this->post()){
			$add = new mapper\Category();
			if($add->add()){
				$this->assign("result", "添加成功！继续添加");
			}else{
				$this->assign("result", "添加失败！重新添加");
				exit;
			}
		}

		$this->view("category", "add");
	}

	public function addCate() {
		if($this->post()){
			$add = new mapper\Category();
			if($add->addCate()){
				$this->assign("result", "添加成功！继续添加");
			}else{
				$this->assign("result", "添加失败！重新添加");
			}
		}
		$this->view("category","addCate");
	}

	//删除栏目
	public function delete() {
		//获取GET路径参数
		$get = new request\Pathinfo();
		$data = $get->get(3);
		//注册器设置
		registry\Request::instance()->set("id", $data);
		
		//调用模型
		$cate = new model\Category();
		$cate->delete();
		
		//获取返回值
		$return = registry\Request::instance()->get("return");
		//返回值判断
		if($return){
			$this->assign("result", "删除成功！");
		}else{
			$this->assign("result", "删除失败！");
		}
		
		//调用模型方法
		$cate->select();
		//获取模型返回数据
		$this->data = registry\Request::instance()->get("data");
		$this->assign("data",$this->data);
		$this->assign("result", "删除成功！");
		//显示界面
		$this->view("category", "set");
	}

	public function only() {
		$get = new request\Pathinfo();
		$id = $get->get(3);
		$cate = new mapper\Category();
		$data = $cate->id($id);
		$this->assign("data", $data);
	}

	public function edit() {
		if($this->post())
		{
			$save = new mapper\Category();
			if($save->save()) {
				$this->assign("result", "修改成功！");
			}else{
				$this->assign("result", "修改失败！");
			}
		}
		$get = new request\Pathinfo();
		$id = $get->get(3);
		$cate = new mapper\Category();
		$data = $cate->id($id);
		$this->assign("data", $data);
		$this->view("category", "edit");	
	}


	

}

?>