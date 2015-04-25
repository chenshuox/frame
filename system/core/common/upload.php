<?php
namespace simple\system\core\common;

class Upload{
	
	//最大尺寸
	private $maxsize;

	//允许的类型
	private $allowtype;

	//上传路径
	private $filepath;

	//源文件名称
	private $orig_name;

	//源文件大小
	private $orig_size;

	//源文件的后缀
	private $orig_ext;

	//源文件的MIME类型
	private $orig_mimetype;

	//临时文件名称
	private $tmp_name;

	//新文件名称
	public $newname;

	

	//构造函数初始化
	public function __construct($allowtype, $filesize, $filepath){
		if(!file_exists($filepath)){
			mkdir($filepath,0777);
		}
		$this->maxsize = $filesize;
		$this->allowtype = $allowtype;
		$this->filepath = $filepath;
	}

	//获取上传文件的信息
	public function fileupload($file){

		$this->orig_name = $_FILES[$file]['name'];
		$this->orig_size = $_FILES[$file]['size'];
		$this->orig_mimetype = $_FILES[$file]['type'];
		$this->tmp_name = $_FILES[$file]['tmp_name'];
		$this->movefile();
		$filepath = "/upload/".$this->newname;
		return $filepath;
		/*
		if(is_array($this->orig_name)){
			for($i=0; $i<count($this->orig_name); $i++){
				$this->checktype($i);
				$this->checksize($i);
				$this->movefile($i);
			}
		}
		*/
	}

	//检查文件大小
	private function checksize($i){
		$this->orig_size[$i] = ceil($this->orig_size[$i]/(1024));

		if($this->orig_size[$i] <= $this->maxsize){
			return true;
		}else{
			echo $this->errorhalt(1,$i);
			exit();
		}
	}

	//检查文件类型
	private function checktype($i){
		if(in_array($this->orig_mimetype[$i], $this->allowtype)){
			return true;
		}else{
			echo $this->errorhalt(2,$i);
			exit();
		}
	}

	//执行文件上传
	private function movefile(){
		$this->orig_ext = strtolower(substr($this->orig_name, strrpos($this->orig_name, '.')+1));
		$this->newname = date('Y_m_d_His').rand(100,999).".".$this->orig_ext;
		return move_uploaded_file($this->tmp_name, $this->filepath.$this->newname);
	}
	/*
	private function movefile($i){
		$this->orig_ext = strtolower(substr($this->orig_name[$i], strrpos($this->orig_name[$i], '.')+1));
		$this->newname[$i] = date('Y_m_d_His').rand(100,999).".".$this->orig_ext;
		return move_uploaded_file($this->tmp_name[$i], $this->filepath.$this->newname[$i]);
	}
	*/

	//错误提示
	private function errorhalt($errornum,$i){
		$error = "<p style='color: #ff0000;'>上传文件<strong>{$this->orig_name[$i]}</strong>时发生以下错误：</p>";
		switch ($errornum) {
			case '1':
				$error .= "超过了最大上传尺寸！最大上传尺寸为：".$this->maxsize."K";
				break;

			case '2':
				$error .= "文件类型不正确！您所上传的文件类型为：".$this->orig_mimetype[$i];
				break;
			default:
				$error .= "发生一个未知的错误，请联系站点管理员！";
				break;
		}
		return $error;
	}
}

?>