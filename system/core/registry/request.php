<?php
namespace simple\system\core\registry;

//include "registry.php";
//include "../request/request.php";

class RequestRegistry extends Registry
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

	protected function get ($key){
		if(isset($this->values[$key])) {
			return $this->values[$key];
		}
		return null;
	}

	protected function set ($key, $value){
		$this->values[$key] = $value;
	}

	public static function getRequest() {
		return self::instance()->get("request");
	}

	public static function setRequest(\simple\request\Request $request) {
		self::instance()->set("request", $request);
	}
}

//实例化Request类
RequestRegistry::setRequest(new \simple\request\Request());

//返回Request类的实例
$data = RequestRegistry::getRequest();

//输出请求中action的值
echo $data->getProperty("action");


?>