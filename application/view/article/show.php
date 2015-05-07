<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<?php view\View::import("common", "head");?>
	<?php view\View::link("home/base.css");?>
	<?php view\View::link("home/content.css");?>
	<?php view\View::link("styles/monokai_sublime.css");?>
	<script src="<?php echo URL;?>/resource/js/highlight.pack.js"></script>
	<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
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
			<li><a href="<?php view\View::url("category/show");?>/<?php echo $more['id'];?>/<?php echo $more['type'];?>"><?php echo $more["name"];?></a></li>
			<div class="clear"></div>
		</ul>
		<?php }?>
		<div id="article">
			<h1 class="title"><?php echo $content["title"];?></h1>
			<p class="time"><?php echo $content["time"];?></p>
			<div class="content">
				<?php echo $content["content"];?>
			</div>
		</div>
	</div>
	<?php view\View::import("common", "footer");?>
</div>
</body>
</html>
