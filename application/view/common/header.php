<?php
use simple\service\mapper;
use simple\system\core\view;
$mapper = new mapper\Category();
$nav = $mapper->firstCate();
?>
<div id="header">
	<h1><a href="<?php echo URL;?>">CHENSHUO</a></h1>
	<ul>
		<?php foreach ($nav as $v) {?>
		<li>[<a href="<?php view\View::url('category/show');?>/<?php echo $v['id'];?>/<?php echo $v['type'];?>"><?php echo $v["name"];?></a>]</li>
		<?php }?>
	</ul>
	<div class="clear"></div>
</div>

