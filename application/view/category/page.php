<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php view\View::import("common", "head");?>
	<?php view\View::link("home/base.css");?>
	<link rel="stylesheet" type="text/css" href="<?php echo URL?>/resource/css/home/<?php echo $value['0']['description'];?>">
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
		<div class="content">
			<?php foreach ($value as $v) {?>
				<?php echo $v['content'];?>
			<?php }?>
			<div class="clear"></div>
		</div>
	</div>
	<?php view\View::import("common", "footer");?>
</div>
</body>
</html>