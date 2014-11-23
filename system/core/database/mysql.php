<?php
namespace simple\system\core\database;

class Mysql
{
		
	private static $instance;
	//数据库连接句柄
	private $link;

	private function __construct() {
		$data = \simple\system\core\common\Config::get("database");
		$this->link = new \mysqli($data["mysqli"]["host"], $data["mysqli"]["user"], $data["mysqli"]["pass"],$data["mysqli"]["database"]);
	}

	public static function instance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function execute($sql) {
		
	}
	
}


?>