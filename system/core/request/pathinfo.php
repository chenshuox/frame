<?php
namespace simple\system\core\request;

class Pathinfo
{
	private $pathinfo;

	public function __construct() {
		$this->handle();
	}

	private function handle() {
		//缺少路径信息过滤
		if(empty($_SERVER["PATH_INFO"])) {
			return true;
		}

		if(preg_match("/.html/", $_SERVER["PATH_INFO"])) {
			$this->pathinfo = substr($_SERVER["PATH_INFO"], 0,-5);
		}else{
			$this->pathinfo = $_SERVER["PATH_INFO"];
		}		
		return $this->pathinfo = explode("/", $this->pathinfo);
	}

	public function get($key) {
		if(empty($this->pathinfo[$key])) {
			return;
		}else{
			return $this->pathinfo[$key];
		}
		
	}


}

?>