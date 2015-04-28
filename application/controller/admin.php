<?php
namespace simple\application\controller;
use simple\service\mapper;
use simple\system\core\common;
use simple\system\core\controller;
use simple\system\core\registry;

class Admin extends controller\Controller {

	public function init() {
		$this->view("admin", "init");
	}

	public function index() {
		session_start();
		if ($this->get()) {
			if (isset($_SESSION["manage"])) {
				$this->view("admin", "index");
			} else {
				$this->view("admin", "login");
			}
		}
		if ($this->post()) {
			//调用模型
			$this->model("admin", "index");
			if (registry\Request::instance()->get("bool")) {
				$user = $this->getdata("username");
				$this->assign("user", $user);
				$this->view("admin", "index");
			} else {
				$this->assign("error", "用户名或者密码错误！");
				$this->view("admin", "login");
			}
		}
	}

	public function logout() {
		$user = $this->getdata("username");
		setcookie($user, time() - 3600);
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

	public function upload() {

		//允许的类型
		$allowtype = array('image/pjpeg', 'image/jpeg', 'image/jpg', 'image/png', 'image/x-png', 'image/gif', 'application/octet-stream');
		//最大上传尺寸2048K
		$filesize = (1024 * 2);
		//上传文件存储目录
		$filepath = "upload/";
		//执行文件上传
		$upload = new common\Upload($allowtype, $filesize, $filepath);
		$file = $upload->fileupload('files');
		$filepath = URL . "/" . $file;

		//将文件记录在数据库
		$mapper = new mapper\Article();
		$documentID = $mapper->document($file);
		$html = "<li><img src='{$filepath}' /><input type='text' class='file' value='{$filepath}'> <input type='radio' name='cover' value='{$documentID}'>设为封面</li>";
		echo $html;

	}

}

?>