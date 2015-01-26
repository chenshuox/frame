<?php
namespace simple\system\core\database;
use simple\system\core\common;

class Mysql
{
		
	private static $instance;
	//数据库连接句柄
	private $link;

	private function __construct() {
		try{
			$data = common\Config::get("database");
			$this->link = new \mysqli($data["mysqli"]["host"], $data["mysqli"]["user"], $data["mysqli"]["pass"],$data["mysqli"]["database"]);
			$this->link->set_charset($data["mysqli"]["char"]);
		}catch(Exception $e) {
			throw new Exception('Can not connect db');
		}
		
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

	public function close(){
		$this->link->close();
	}

	
}


?>