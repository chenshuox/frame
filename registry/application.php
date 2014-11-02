<?php
namespace simple\registry;
include "registry.php";

class ApplicationRegisrty extends Registry
{
	private static $instance;
	private $freezedir = "data";
	private $values = array();
	private $mtimes;

	private function __construct() {}

	public static function instance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	protected function get($key) {
		$path = $this->freezedir . "/" . $key;
		if(file_exists($path)) {
			clearstatcache();
			$filetime = filemtime($path);
			if(!isset($this->mtimes[$key])) {
				$this->mtimes[$key] = 0;
			}
			
			if($filetime > $this->mtimes[$key]) {
				$data = file_get_contents($path);
				$this->mtimes[$key] = $filetime;
				return ($this->values[$key] = unserialize($data));
			}
		}

		if(isset($this->values[$key])) {
			return $this->values[$key];
		}

		return null;
	}

	protected function set($key, $value) {
		$this->values[$key] = $value;
		$path = $this->freezedir . "/" . $key;
		file_put_contents($path, serialize($value));
		$this->mtimes[$key] = time();
	}

	public static function getDSN() {
		return self::instance()->get("dsn");
	}

	public static function setDSN($dsn) {
		self::instance()->set("dsn", $dsn);
	}
}

ApplicationRegisrty::setDSN("host=mysql,dbname=test");

echo ApplicationRegisrty::getDSN();

?>