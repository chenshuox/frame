<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<?php view\View::import("common", "head");?>
	<?php view\View::link("home/base.css");?>
	<?php view\View::link("home/show.css");?>
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
			<dl>
			<?php foreach ($value as $v) {?>
				<dt><a href="<?php view\View::url('article/show');?>/<?php echo $v['cateid'];?>/<?php echo $v['id'];?>"><?php echo $v["title"];?></a></dt>
				<dd>
					<p class="time"><?php echo $v["time"];?></p>
					<p class="desc"><?php echo $v["description"];?></p>
				</dd>
			<?php }?>
			</dl>
		</div>
	</div>
	<div id="footer">
		<p>Powered By chenshuo &copy; 2015</p>
	</div>
</div>
</body>
</html>
