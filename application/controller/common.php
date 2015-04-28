<?php
namespace simple\application\controller;
use simple\service\mapper;
use simple\system\core\controller;
use simple\system\core\registry;

class Common extends controller\Controller {
	public function logout() {
		session_start();
		session_destroy();
		echo '<script>location.href=' . "\"" . HTTP_PATH . "\"" . '</script>';
	}

	public static function header() {
		// 1.获取头部导航信息
		$mapper = new mapper\Category();
		$data = $mapper->firstCate();
		$data = registry\Request::instance()->set("nav", $data);
		return $data;
	}

	public static function footer() {

	}

}

?>