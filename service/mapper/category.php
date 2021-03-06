<?php
namespace simple\service\mapper;
use simple\system\core\database;
use simple\system\core\registry;
use simple\system\core\request;

class Category extends database\Mapper {

	public $table;

	public function __construct() {
		parent::__construct();
	}

	public function add() {
		$context = new request\Request();
		$get = new request\Pathinfo();
		$name = $context->get("name");
		$english = $context->get("english");
		$type = $context->get("type");
		$description = $context->get("description");
		$fid = $get->get(3);
		$path = $get->get(4) . $fid . "-";
		$result = $this->insert()->table("category")->filed("name, english, type, description, parentid, path")->value("'$name', '$english', $type, '$description', $fid, '$path'")->query();
		return $result;
	}

	//新增一级栏目
	public function addCate() {
		$context = new request\Request();
		$name = $context->get("name");
		$english = $context->get("english");
		$type = $context->get("type");
		$description = $context->get("description");
		$fid = 0;
		$path = "0-";
		$result = $this->insert()->table("category")->filed("name, english, type, description, parentid, path")->value("'$name', '$english', $type, '$description', $fid, '$path'")->query();
		return $result;
	}

	public function find() {
		$this->select("*")->table("`category`, `model`")->where("category.type = model.mid")->order("concat(category.path,category.id)")->fetchAll();
		return $this->data;
	}

	public function id($id) {
		$this->select("*")->table("category")->where("id=$id")->fetch();
		return $this->data;
	}

	public function parentid($id) {
		$this->select("*")->table("category")->where("parentid=$id")->fetchAll();
		return $this->data;
	}

	public function save() {
		$context = new request\Request();
		$name = $context->get("name");
		$english = $context->get("english");
		$type = $context->get("type");
		$description = $context->get("description");

		$get = new request\Pathinfo();
		$id = $get->get(3);

		$result = $this->update()->table("`category`")->set("name='$name', english='$english', description='$description', type=$type")->where("id = $id")->query();
		return $result;
	}

	public function del() {
		$id = registry\Request::instance()->get("id");
		$data = $this->delete()->table("category")->where("id = $id")->query();
		registry\Request::instance()->set("return", $data);
	}

	//获取一级栏目
	public function firstCate() {
		$this->select("*")->table("category")->where("parentid = 0")->fetchAll();
		return $this->data;
	}

	//通过一级栏目id查询子栏目的文章
	public function childList($id) {
		$this->select("article.id, article.title, article.time, article.description,article.cover, article.content, article.cateid, document.path")->table("`category`, `article`, `document`")->where("article.cateid = category.id AND category.parentid = $id AND article.cover=document.id")->order("time DESC")->fetchAll();
		return $this->data;
	}

	//直接由栏目ID查询文章
	public function article($id) {
		$this->select("article.id, article.title, article.time, article.description,article.cover, article.content, article.cateid, document.path")->table("`category`, `article`, `document`")->where("article.cateid = category.id AND category.id = $id AND article.cover=document.id")->order("time DESC")->fetchAll();
		return $this->data;
	}

	//查询模型
	public function selectModel() {
		$this->select("*")->table("`model`")->fetchAll();
		return $this->data;
	}

}

?>