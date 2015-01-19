<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=URL?>/resource/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=URL?>/resource/css/simple-line-icons.css">
	<link rel="stylesheet" type="text/css" href="<?=URL?>/resource/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=URL?>/resource/css/perfect-scrollbar.css">
</head>
<body>
	<header>
		<h1><i class="icon-paper-plane"></i>足球迷</h1>
	</header>
	<section>
		<aside id="aside">
			<nav>
				<h3>Discover</h3>
				<ul>
					<li>
						<a href="" target="content"><i class="icon-book-open text-primary-lter"></i>俱乐部</a>
						<ul>
							<li><a href="" target="content"><i class="fa fa-angle-right text-xs"></i>添加俱乐部</a></li>
							<li><a href="" target="content"><i class="fa fa-angle-right text-xs"></i>话题管理</a></li>
							<li><a href="http://www.baidu.com" target="content"><i class="fa fa-angle-right text-xs"></i>添加分类</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>分类管理</a></li>
						</ul>
					</li>
					<li>
						<a href="" target="content"><i class="icon-user text-primary-lter"></i>用户</a>
						<ul>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>添加用户</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>用户管理</a></li>
						</ul>
					</li>
					<li><a href=""><i class="icon-settings text-primary-lter"></i>设置</a></li>
					<li><a href=""><i class="icon-cloud-download text-primary-lter"></i>球队</a></li>
					<li><a href=""><i class="icon-drawer text-primary-lter"></i>工具</a></li>
					<li>
						<a href=""><i class="icon-folder-alt text-primary-lter"></i>开源</a>
						<ul>
							<li><a href="https://www.yahoo.com/" target="content"><i class="fa fa-github-square text-xs"></i>GitHub</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>2</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>3</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>4</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>2</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>3</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>4</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>2</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>3</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>4</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>2</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>3</a></li>
							<li><a href="http://www.so.com" target="content"><i class="fa fa-angle-right text-xs"></i>4</a></li>
						</ul>
					</li>
				</ul>

			</nav>
		</aside>
		<div id="content">
			<iframe name="content" src=""></iframe>
		</div>
	</section>
</body>
<script src="<?=URL?>/resource/js/jquery.js"></script>
<script src="<?=URL?>/resource/js/perfect-scrollbar.js"></script>
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
</html>