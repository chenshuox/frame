<?php
namespace simple\service\mapper;
use simple\system\core\database;
use simple\system\core\request;

class Article extends database\Mapper {

	public $table;

	public function __construct() {
		parent::__construct();
	}

	// 添加文章
	public function add() {
		$context = new request\Request();
		$cateid = $context->get("cateid");
		$title = $context->get("title");
		if (empty($context->get("cover"))) {
			$cover = 1;
		} else {
			$cover = $context->get("cover");
		}

		$description = $context->get("description");
		$content = $context->get("editor01");
		$index = $context->get("index");
		$time = date("Y-m-d H:i:s", time());
		$result = $this->insert()->table("article")->filed("cateid, title, description, content, time, cover, indexs")->value("$cateid, '$title', '$description','$content', '$time', $cover, $index")->query();
		return $result;
	}

	public function find() {
		$this->select("article.title, article.content, article.time, article.cateid, article.id, category.name, article.indexs")->table("`article`, `category`")->where("article.cateid=category.id")->order("time DESC")->fetchAll();
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
		$this->select("article.title, article.content, article.time, article.cateid, article.description, article.id, document.path")->table("`article`, `document`")->where("article.id = $id AND article.cover=document.id")->fetch();
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
		$index = $context->get("index");
		$get = new request\Pathinfo();
		$id = $get->get(3);

		$result = $this->update()->table("`article`")->set("title='$title', description='$description', content='$content', time='$time', indexs=$index")->where("id = $id")->query();
		return $result;
	}

	/*
	返回文件ID
	 */

	public function document($path) {
		$time = date("Y-m-d H:i:s", time());
		$result = $this->insert()->table("document")->filed("path, time")->value("'$path', '$time'")->query();
		return $this->link->insertId();
	}

	// 首页推荐
	public function indexShow() {
		$this->select("article.title, category.name, article.content, article.time, article.cateid, article.description, article.id, document.path")->table("`article`, `document`, `category`")->where("article.cateid=category.id AND article.cover=document.id AND article.indexs>0")->order("article.time DESC")->limit(0, 10)->fetchAll();
		return $this->data;
	}

	//添加心情
	public function addMood() {
		$context = new request\Request();
		$title = $context->get("title");
		$time = date("Y-m-d H:i:s", time());
		$result = $this->insert()->table("mood")->filed("title, time")->value("'$title', '$time'")->query();
		return $result;
	}

	//查询心情
	public function selectMood() {
		$this->select("*")->table("`mood`")->order("mood.time DESC")->fetch();
		return $this->data;
	}

}

?>