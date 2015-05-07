<?php

class page{
	
	//起始查询条件
	private $offset;

	//查询总记录数
	private $count;

	//每一页显示的个数
	private $nums;

	//当前页面
	private $page;

	//起始页码
	private $init = 1;

	//结束页码
	private $max;


	//页面显示页码个数
	private $pagelength = 10;

	

	/**
	 *	构造方法初始化
	 */

	public function __construct($offset, $count, $nums, $page){
		$this->offset = $offset;
		$this->count = $count;
		$this->nums = $nums;
		$this->page = $page;
	}

	public function get_page_nums(){
		return ceil($this->count / $this->nums);
	}

	public function get_page_offset(){
		return ceil($this->pagelength / 2);
	}

	public function show(){
		//通过判断得到起始页码和最大页码
		if($this->get_page_nums() >= $this->pagelength){
			
			if($this->page <= $this->get_page_offset()){
				$this->init = 1;
				$this->max = $this->pagelength;
			}else{
				if($this->page+$this->get_page_offset() >= $this->get_page_nums()+1){
					$this->init = $this->get_page_nums()-$this->pagelength+1;
					$this->max = $this->get_page_nums();
				}else{
					$this->init = $this->page-$this->get_page_offset();
					$this->max = $this->page+$this->get_page_offset();
				}
			}
		}else{
			$this->max = $this->get_page_nums();
		}


		echo "<ul>";
			$prev = $this->page-1;
			if($prev < 2){
				$prev = 1;
			}
			echo "<li><b>{$this->page}/{$this->get_page_nums()}</b></li>";
			if($this->page != 1){
				echo "<li><a href='page.php?page=1'>首页</a></li>";
				echo "<li><a href='page.php?page=$prev'>上一页</a></li>";
			}


			for($i=$this->init; $i<=$this->max; $i++){
				
				if($i==$this->page){
					$show = "<li><b>$i</b></li>";
				}else{
					$show = "<li><a href='page.php?page=$i'>$i</a></li>";
				}
				echo $show;
			}

			

			$next = $this->page+1;
			if($next > $this->get_page_nums()){
				$next = $this->get_page_nums();
			}
			$last = $this->get_page_nums();
			if($this->page != $last){
				echo "<li><a href='page.php?page=$next'>下一页</a></li>";
				echo "<li><a href='page.php?page=$last'>尾页</a></li>";
			}
			
		echo "</ul>";
	}

	

}

?>