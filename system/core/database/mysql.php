<?php
namespace simple\system\core\database;
use simple\system\core\common;

class Mysql
{
		
	private static $instance;
	//数据库连接句柄
	private $link;

	private function __construct() {
		$data = common\Config::get("database");
		$this->link = new \mysqli($data["mysqli"]["host"], $data["mysqli"]["user"], $data["mysqli"]["pass"],$data["mysqli"]["database"]);
		$this->link->set_charset($data["mysqli"]["char"]);
	}

	public static function instance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function execute($sql) {
		return $this->link->query($sql);
	}


	//获取mysql信息
	public function version() {
		$this->link->mysql_get_server_info();
	}

	public function close(){
		$this->link->close();
	}

	
}


?>