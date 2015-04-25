<?php
namespace simple\service\mapper;
use simple\system\core\database;
use simple\system\core\registry;
use simple\system\core\request;

class Article extends database\Mapper
{

	public $table;

	public function __construct() {
		parent::__construct();
	}

	public function add() {
		$context = new request\Request();
		$cateid  = $context->get("cateid");
		$title   = $context->get("title");
		if(empty($context->get("cover"))){
			$cover = 0;
		}else{
			$cover = $context->get("cover");
		}
		
		$description   = $context->get("description");
		$content = $context->get("editor01");
		$time    = date("Y-m-d H:i:s", time());
		$result = $this->insert()->table("article")->filed("cateid, title, description, content, time, cover")->value("$cateid, '$title', '$description','$content', '$time', $cover")->query();
		return $result;
	}

	public function find() {
		$this->select("article.title, article.content, article.time, article.cateid, article.id, category.name")->table("`article`, `category`")->where("article.cateid=category.id")->order("time DESC")->fetchAll();
		return $this->data;
	}

	public function findId() {
		$get = new request\Pathinfo();
		$id = $get->get(3);
		$this->select("*")->table("`article`")->where("id = $id")->fetch();
		return $this->data;
	}

	public function selectArticle() {
		$get = new request\Pathinfo();
		$id = $get->get(3);
		$this->select("*")->table("`article`, `document`")->where("article.id = $id AND article.cover=document.id")->fetch();
		return $this->data;
	}

	public function id($id) {
		$this->select("*")->table("`article`")->where("id = $id")->fetch();
		return $this->data;
	}

	public function del() {
		$get = new request\Pathinfo();
		$id = $get->get(3);
		$result = $this->delete()->table("`article`")->where("id = $id")->query();
		return $result;
	}

	//更新文章
	public function save() {
		$context = new request\Request();
		$title = $context->get("title");
		$description = $context->get("description");
		$content = $context->get("editor01");
		$time = date("Y-m-d H:i:s", time());

		$get = new request\Pathinfo();
		$id = $get->get(3);

		$result = $this->update()->table("`article`")->set("title='$title', description='$description', content='$content', time='$time'")->where("id = $id")->query();
		return $result;
	}

	/*
		返回文件ID
	*/

	public function document($name) {
		$time = date("Y-m-d H:i:s", time());
		$result = $this->insert()->table("document")->filed("name, time")->value("'$name', '$time'")->query();
		return $this->link->insertId();
	}


}


?>