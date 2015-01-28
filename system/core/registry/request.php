<?php
namespace simple\system\core\registry;
use simple\system\core\request;

class Request extends registry\Registry
{
	private $values = array();
	private static $instance;

	private function __construct () {}

	public static function instance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function get ($key){
		if(isset($this->values[$key])) {
			return $this->values[$key];
		}
		return null;
	}

	public function set ($key, $value){
		$this->values[$key] = $value;
	}

	public static function getRequest() {
		return self::instance()->get("request");
	}

	public static function setRequest(registry\Request $request) {
		self::instance()->set("request", $request);
	}
}


?>