<?php
namespace simple\system\core\registry;

//include "registry.php";

class SessionRegistry extends  Registry
{
	private static $instance;

	private function __construct() {
		session_start();
	}

	public static function instance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function get($key) {
		if(isset($_SESSION[__CLASS__][$key])) {
			return $_SESSION[__CLASS__][$key];
		}
		return null;
	}

	public function set($key, $value) {
		$_SESSION[__CLASS__][$key] = $value;
	}


}

$session = SessionRegistry::instance();
$session->set("username", "chenshuo");
echo $session->get("username");

?>