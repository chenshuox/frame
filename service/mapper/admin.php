<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Admin extends database\Mapper
{

	public $table;

	const INSERT = "INSERT INTO manage (username, password) VALUES (?, ?)";
	const SELECT = "SELECT username, password FROM manage WHERE username = ? AND password = ? AND id = ?";
	

	public function __construct() {
		parent::__construct();
	}

	public function insert($object) {
		$insert = $this->db->prepare(self::INSERT);
		$user = $object->getUser();
		$pass = $object->getPass();
		$insert->bind_param('ss',$user,$pass);
		$insert->execute();
		$insert->close();
	}

	public function select($object) {
		$user = $object->getUser();
		$pass = $object->getPass();
		$aid = 1;
		$select = $this->db->prepare(self::SELECT);
		//绑定参数
		$select -> bind_param('ssi',$user, $pass, $aid);
		$select->execute();

		//绑定结果集需要输出的字段
		//$select-> bind_result($user, $pass);
		
		$bool = $select->fetch();
		
		//释放结果集
		$select->free_result();
		//关闭
		$select->close();
		
		return $bool;
	}


}


?>