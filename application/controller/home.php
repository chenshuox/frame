<?php
namespace simple\application\controller;
use simple\service\mapper;
use simple\system\core\common;
use simple\system\core\controller;

class Home extends controller\Controller {

	public function init() {
		$array = common\Config::get("web");
		$this->assign("webName", $array["webName"]);
		$this->assign("description", $array["description"]);
		$this->assign("powered", $array["powered"]);
		$this->view("home", "index");
	}

	public function index() {
		$mapper = new mapper\Article();
		$data = $mapper->indexShow();

		$count = count($data);
		for ($i = 0; $i < $count; $i++) {
			if ($i % 2 == 0) {
				$even[$i] = $data[$i];
			} else {
				$odd[$i] = $data[$i];
			}
		}
		$this->assign("odd", $odd);
		$this->assign("even", $even);

		$mood = $mapper->selectMood();
		$this->assign("mood", $mood);
		$this->view("home", "index");
	}

	public function show() {
		$this->view("home", "show");
	}

	public function login() {
		$this->view("home", "login");
	}

	public function end() {
		header("content-type:text/html; charset=utf-8");
		echo "<!DOCTYPE html>\n<html>\n\t<title>网站维护中，请稍后访问！</title>\nchenshuo";
		echo "\n</html>";
	}

}

?>