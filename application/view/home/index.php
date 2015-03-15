<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $webName; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<?php view\View::link("home/index.css"); ?>
</head>
<body>
<div id="warpper">
	<header>
		<h2><img src="<?php view\View::img('logo.png'); ?>" width="200"></h2>
		<nav>
			<ul>
				<li><a href="">首页</a></li>
				<li><a href="">生活</a></li>
				<li><a href="">笔记、记录</a></li>
				<li><a href="">Code</a></li>
				<li><a href="">Photo</a></li>
				<li><a href="">关于我</a></li>
				<li><a href="<?php view\View::url('admin/index');?>">管理</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
	</header>
	<section>
		<article>
			<dl>
				<dt><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></dt>
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<img src="<?php echo URL; ?>/resource/images/10.jpg">
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>

			<dl>
				<dt><a href="index.php/article/show/1">PHP中获取文件扩展名的N种方法</a></dt>
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>

			<dl>
				<dt><a href="index.php/article/show/1">你觉得体验比较好的浏览器是哪款？为什么？</a></dt>
				
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<img src="<?php echo URL; ?>/resource/images/html5.png">
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>

			<dl>
				<dt><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></dt>
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>

			<dl>
				<dt><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></dt>
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>

			<dl>
				<dt><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></dt>
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>

			<dl>
				<dt><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></dt>
				<dd>
					<p class="time">2015-01-18 13:43:45</p>
					<p class="description">SyntaxHighlighter是一套在浏览器上对各种代码进行语法着色的独立 JavaScript 库。好友排行版激发了大家游戏的热情，谁不想在自己的朋友圈拿个第一，然后接受朋友崇拜的眼神还要装作不在意的样子。</p>
				</dd>
			</dl>
		</article>
		<aside>
			<form>
				<input type="text" placeholder="搜索">
				<input type="submit" value="搜索">
			</form>
			
			<h4>标签云</h4>
			<div class="tag">
				<a href="">html5</a>
				<a href="">javascript</a>
				<a href="">mysql</a>
				<a href="">php</a>
				<a href="">语法着色</a>
				<a href="">语法</a>
				<a href="">jQuery</a>
				<a href="">新闻报道</a>
				<a href="">文件扩展名</a>
				<a href="">BootCamp</a>
				<div class="clear"></div>
			</div>
			<h4>阅读排行</h4>
			<ol>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
				<li><a href="index.php/article/show/1">一款非常好的javascript语法着色库</a></li>
			</ol>
			<h4>链接</h4>
			<h4>Code分类</h4>
			<ul>
				<li><a href="">php</a><span>120篇</span></li>
				<li><a href="">c/c++</a><span>1篇</span></li>
				<li><a href="">mysql</a><span>12篇</span></li>
				<li><a href="">javascript</a><span>12篇</span></li>
				<li><a href="">html/html5</a><span>12篇</span></li>
				<li><a href="">css</a><span>8篇</span></li>
				<li><a href="">cms</a><span>12篇</span></li>
			</ul>
		</aside>
		<div class="clear"></div>
	</section>
	
	<footer>
		<p><?php echo $powered; ?></p>
	</footer>
</div>	
	
	
</body>
</html>
