<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<?php view\View::import("common", "head");?>
	<?php view\View::link("home/base.css");?>
	<?php view\View::link("home/index.css");?>
</head>
<body>
<div id="warpper">
	<?php view\View::import("common", "header");?>
	<div id="feel">
		<h3><?php echo $mood["title"];?></h3>
		<p><?php echo $mood["time"];?></p>
	</div>
	<div id="section">
		<div class="left">
			<?php foreach ($odd as $v) {?>
			<div class="container">
				<a href="<?php view\View::url('article/show')?>/<?php echo $v['cateid'];?>/<?php echo $v['id'];?>">
					<img src="<?php echo URL;?><?php echo $v['path']?>" />
					<div class="content">
						<h3>[<?php echo $v["name"];?>] <?php echo $v["title"];?></h3>
						<p><?php echo $v['time'];?></p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<?php }?>
		</div>

		<div class="right">
			<?php foreach ($even as $v) {?>
			<div class="container">
				<a href="<?php view\View::url('article/show')?>/<?php echo $v['cateid'];?>/<?php echo $v['id'];?>">
					<img src="<?php echo URL;?><?php echo $v['path']?>" />
					<div class="content">
						<h3>[<?php echo $v["name"];?>] <?php echo $v["title"];?></h3>
						<p><?php echo $v['time'];?></p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<?php }?>
		</div>

		<div class="clear"></div>
	</div>
	<?php view\View::import("common", "footer");?>
</div>
</body>
</html>
