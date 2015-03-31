<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Match extends database\Mapper
{

	public $table;

	const SELECT = "select id, name, country from `match`";
	

	public function __construct() {
		parent::__construct();
	}

	public function select() {
		
		$select = $this->db->prepare(self::SELECT);
		
		$select->execute();

		//绑定结果集需要输出的字段
		$select-> bind_result($id, $name, $country);
		$data = array();
		while($select->fetch()){
			$data['id'][] = $id;
			$data['name'][] = $name;
			$data["country"][]= $country;
		}
		echo "<pre>";
		var_dump($data);
		echo "</pre>";

		foreach ($data as $v) {
			echo $v["id"];
		}
		
	}


}


?>