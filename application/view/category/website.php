<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<?php view\View::import("common", "head");?>
	<?php view\View::link("home/base.css");?>
	<?php view\View::link("home/website.css");?>
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
			<table>
				<tr>
					<td>序号</td>
					<td>网站</td>
					<td>访问</td>
					<td>备注</td>
					<td>添加时间</td>
				</tr>
			<?php $i = 0;foreach ($value as $v) {?>
				<?php $i++;?>

				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $v["title"];?></td>
					<td><a href="<?php echo $v["description"];?>" target="new">LINK</a></td>
					<td><?php echo $v["content"];?></td>
					<td><?php echo $v["time"];?></td>
				</tr>
			<?php }?>
			</table>
		</div>
	</div>
	<div id="footer">
		<p>Powered By chenshuo &copy; 2015</p>
	</div>
</div>
</body>
</html>