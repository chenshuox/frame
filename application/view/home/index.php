<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<title>CHENSHUO</title>
	<?php view\View::link("home/index.css"); ?>
</head>
<body>
<div id="warpper">
	<div id="header">
		<h1>CHENSHUO</h1>
		<ul>
			<!--
			<li>[<a href="">随笔</a>]</li>
			<li>[<a href="">代码</a>]</li>
			<li>[<a href="">分享</a>]</li>
			<li>[<a href="">作品</a>]</li>
			<li>[<a href="">心情</a>]</li>
			<li>[<a href="">图库</a>]</li>
			<li>[<a href="">Website</a>]</li>-->
			<?php foreach ($data as $v) { ?>
			<li>[<a href="<?php view\View::url('category/show'); ?>/<?php echo $v['id']; ?>"><?php echo $v["name"]; ?></a>]</li>
			<?php } ?>
		</ul>
		<h3>See You Again</h3>
		<p>2015-05-01 12:12:12</p>
	</div>
	<div id="section">
		<div class="left">
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/03.jpeg" />
					<div class="content">
						<p>[分享]Pexlex设计师的免费图片库</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/04.jpg" />
					<div class="content">
						<p>我是一个不擅于讲故事的人</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/05.jpg" />
					<div class="content">
						<p>我是一个不擅于讲故事的人</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
		</div>

		<div class="right">
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/01.jpg" />
					<div class="content">
						<p>我是一个不擅于讲故事的人</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/02.jpeg" />
					<div class="content">
						<p>我是一个不擅于讲故事的人</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/06.jpg" />
					<div class="content">
						<p>我是一个不擅于讲故事的人</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<div class="container">
				<a href="index.php">
					<img src="<?php echo URL; ?>/resource/images/07.jpg" />
					<div class="content">
						<p>我是一个不擅于讲故事的人</p>
					</div>
					<div class="clear"></div>
				</a>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	<div id="footer">
		<p>Powered By chenshuo &copy; 2015</p>
	</div>
</div>
</body>
</html>
