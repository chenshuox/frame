<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php view\View::import("common", "head");?>
	<?php view\View::link("home/base.css");?>
	<?php view\View::link("home/photo.css");?>
</head>
<body>
<div id="warpper">
	<?php view\View::import("common", "header");?>
	<div id="section">
	<?php if (!empty($cate)) {?>
		<ul class="category">
			<?php foreach ($cate as $v) {?>
			<li><a href="<?php view\View::url("category/show");?>/<?php echo $v['id'];?>/<?php echo $v['type'];?>"><?php echo $v["name"];?></a></li>
			<?php }?>
			<div class="clear"></div>
		</ul>
		<?php } else {?>
		<ul class="category">
			<li><a href=""><?php echo $more["name"];?></a></li>
			<div class="clear"></div>
		</ul>
		<?php }?>
		<div class="list">
			<ul>
			<?php foreach ($value as $v) {?>
				<li><a href="<?php view\View::url('article/show')?>/<?php echo $v['cateid'];?>/<?php echo $v['id'];?>"><img src="<?php echo URL;?>/<?php echo $v['path'];?>" alt=""><?php echo $v['title'];?></a></li>
			<?php }?>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<?php view\View::import("common", "footer");?>
</div>
</body>
</html>