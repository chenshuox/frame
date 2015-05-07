<!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/simple-line-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/perfect-scrollbar.css">
</head>
<body>
	<?php if (isset($_SESSION["manage"])) {?>
	<header>
		<h1><i class="icon-paper-plane"></i>CHENSHUO</h1>
		<div class="menu">
			<p>欢迎你管理员，<?php echo $_SESSION["manage"];?> <a href="<?php echo HTTP_PATH?>" target="new">站点首页</a> <a href="<?php echo HTTP_PATH?>/common/logout">退出</a></p>
		</div>
	</header>

	<section>
		<aside id="aside">
			<nav>
				<h3>Discover</h3>
				<ul>
					<li>
						<a href=""><i class="icon-settings text-primary-lter"></i>设置</a>
						<ul>
							<li><a href="<?php echo HTTP_PATH?>/admin/system" target="content"><i class="fa fa-angle-right text-xs"></i>系统设置</a></li>
							<li><a href="<?php echo HTTP_PATH?>/admin/manager" target="content"><i class="fa fa-angle-right text-xs"></i>管理设置</a></li>
						</ul>
					</li>
					<li>
						<a href="" target="content"><i class="icon-book-open text-primary-lter"></i>内容</a>
						<ul>
							<li><a href="<?php echo HTTP_PATH?>/article/add" target="content"><i class="fa fa-angle-right text-xs"></i>添加新内容</a></li>
							<li><a href="<?php echo HTTP_PATH?>/article/set" target="content"><i class="fa fa-angle-right text-xs"></i>文章管理</a></li>
							<li><a href="<?php echo HTTP_PATH?>/article/file" target="content"><i class="fa fa-angle-right text-xs"></i>附件管理</a></li>
							<li><a href="<?php echo HTTP_PATH?>/article/mood" target="content"><i class="fa fa-angle-right text-xs"></i>发布心情</a></li>
						</ul>
					</li>
					<li>
						<a href="" target="content"><i class="icon-user text-primary-lter"></i>分类</a>
						<ul>
							<li><a href="<?php echo HTTP_PATH?>/category/set" target="content"><i class="fa fa-angle-right text-xs"></i>分类管理</a></li>
							<li><a href="<?php echo HTTP_PATH?>/category/addCate" target="content"><i class="fa fa-angle-right text-xs"></i>新增栏目</a></li>
							<li><a href="<?php echo HTTP_PATH?>/category/selectModel" target="content"><i class="fa fa-angle-right text-xs"></i>页面模型</a></li>
							<li><a href="<?php echo HTTP_PATH?>/category/addCate" target="content"><i class="fa fa-angle-right text-xs"></i>单页管理</a></li>
						</ul>
					</li>

					<li><a href=""><i class="icon-cloud-download text-primary-lter"></i>评论</a></li>
					<li><a href=""><i class="icon-drawer text-primary-lter"></i>工具</a></li>
					<li>
						<a href="" target="content"><i class="icon-user text-primary-lter"></i>用户</a>
						<ul>
							<li><a href="https://github.com/chenshuox" target="content"><i class="fa fa-github-square text-xs"></i>GitHub开源库</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>添加用户</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>用户管理</a></li>
						</ul>
					</li>
				</ul>

			</nav>
		</aside>
		<div id="content">
			<iframe name="content" src="<?php echo HTTP_PATH;?>/article/mood"></iframe>
		</div>
	</section>
	<script src="<?php echo URL;?>/resource/js/jquery.js"></script>
	<script src="<?php echo URL;?>/resource/js/perfect-scrollbar.js"></script>
	<script>
		$(function(){
			$('#aside').perfectScrollbar();
			$("#aside > nav > ul > li > a").click(function(){
				$(this).parent("li").addClass("on").siblings().removeClass("on");
				$(this).parent("li").siblings().find("ul").slideUp();
				$(this).parent("li").siblings().find("ul").find("li").removeClass("on");
				if($(this).next("ul").is(":visible")){
	        		$(this).next("ul").slideUp();
			    }else{
			        $(this).next("ul").slideDown();
			    }

			    $("#aside > nav > ul > li > ul > li").click(function(){
					$(this).addClass("on").siblings().removeClass("on");
				});
				return false;
			});
		});
	</script>
	<?php } else {echo "非法访问！";}?>
</body>


</html>
