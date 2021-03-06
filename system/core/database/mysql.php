<?php
namespace simple\system\core\database;
use simple\system\core\common;

class Mysql
{
		
	private static $instance;
	//数据库连接句柄
	public $link;

	private $result;

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

	public function query($sql) {
		return $this->link->query($sql);
	}

	//获取mysql信息
	public function version() {
		return $this->link->client_version;
	}

	public function info() {
		return $this->link->client_info;
	}

	public function insertId() {
		return $this->link->insert_id;
	}

	public function close() {
		$this->link->close();
	}

	
}


?>