<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;
use simple\system\core\request;
use simple\application\model;
use simple\service\mapper;


class Article extends controller\Controller
{
	
	public function add() {
		if($this->post()){
			$mapper = new mapper\Article();
			if($mapper->add()){
				$this->assign("result","恭喜！文章发布成功！");
			}else{
				$this->assign("result","糟糕！文章发布失败！");
			}
		}
		$mapper = new mapper\Category();
		$data = $mapper->firstCate();
		$this->assign("data", $data);
		$this->view("article", "add");
	}

	public function first() {
		$context = new request\Request();
		$id = $context->get("id");
		$mapper = new mapper\Category();
		$data = $mapper->parentid($id);
		if(count($data) >0 ){
			echo "<select class='second' name='cateid'>";
			foreach($data as $v){
				echo "<option value={$v['id']}>".$v["name"]."</option>";
			}
			echo "</select>";
		}else{
			return true;
		}
		
	}

	//文章管理
	public function set() {
		$mapper = new mapper\Article();
		$data = $mapper->find();
		$this->assign("data", $data);
		$this->view("article","set");
	}

	//删除文章
	public function delete() {
		$mapper = new mapper\Article();
		if($mapper->del()){ 
			$this->assign("result", "删除成功！");
		}else{
			$this->assign("result", "删除失败！");
		}
		$data = $mapper->find();
		$this->assign("data", $data);
		$this->view("article","set");
	}

	//编辑文章
	public function edit() {
		$mapper = new mapper\Article();
		if($this->post())
		{
			if($mapper->save()) {
				$this->assign("result", "修改成功！");
			}else{
				$this->assign("result", "修改失败！");
			}
		}
		$data = $mapper->selectArticle();
		$this->assign("data", $data);
		$this->view("article", "edit");
	}

	public function show() {
		$mapper = new mapper\Category();
		$data = $mapper->firstCate();
		$this->assign("data", $data);
		

		//获取当前导航传过来的ID
		$get = new request\Pathinfo();
		$id = $get->get(3);
		
		$cate = $mapper->parentid($id);
		if(empty($cate)) {
			$more = $mapper->id($id);
			$this->assign("more", $more);
			$value = $mapper->article($id);
			$this->assign("value", $value);
		}else{
			$this->assign("cate", $cate);
			$value = $mapper->childList($id);
			$this->assign("value", $value);
		}
		
		$aid = $get->get(4);
		$article = new mapper\Article();
		$content = $article->id($aid);
		$this->assign("content", $content);
		$this->view("article", "show");
	}
	

}

?>