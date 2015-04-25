<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<title>CHENSHUO</title>
	<?php view\View::link("home/content.css"); ?>
</head>
<body>
<div id="warpper">
	<div id="header">
		<h1><a href="<?php echo URL; ?>">CHENSHUO</a></h1>
		<ul>
			<?php foreach ($data as $v) { ?>
			<li>[<a href="<?php view\View::url('category/show'); ?>/<?php echo $v['id']; ?>"><?php echo $v["name"]; ?></a>]</li>
			<?php } ?>
		</ul>
		<div class="clear"></div>
	</div>
	<div id="section">
		<?php if(!empty($cate)) { ?>
		<ul class="category">
			<?php foreach($cate as $v) { ?>
			<li><a href="<?php view\View::url("category/show"); ?>/<?php echo $v['id']; ?>"><?php echo $v["name"]; ?></a></li>
			<?php } ?>
			<div class="clear"></div>
		</ul>
		<?php }else{ ?>
		<ul class="category">
			<li><a href="<?php view\View::url("category/show"); ?>/<?php echo $more['id']; ?>"><?php echo $more["name"]; ?></a></li>
			<div class="clear"></div>
		</ul>
		<?php } ?>
		<div id="article">
			<h1 class="title"><?php echo $content["title"]; ?></h1>
			<p class="time"><?php echo $content["time"]; ?></p>
			<div class="content">
				<?php echo $content["content"]; ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<p>Powered By chenshuo &copy; 2015</p>
	</div>
</div>
</body>
</html>
