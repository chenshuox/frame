<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/admin/manage.css">
	<script type="text/javascript" src="<?php echo URL;?>/resource/js/jquery.js"></script>
</head>
<body>
<div id="content">
<?php if (isset($result)) {?>
	<div class="dalog">
	<?php echo $result;?>
	</div>
<?php }?>
	<table>
		<tr class="title">
			<td>编号</td>
			<td>栏目名称</td>
			<td>类型</td>
			<td>英文名称</td>
			<td>路径</td>
			<td>访问</td>
			<td>操作</td>
		</tr>
		<?php if (!empty($data)) {
	?>
		<?php foreach ($data as $v) {
		?>
		<?php
$length = substr_count($v["path"], "-") - 1;
		$display = "none";
		if ($length > 0) {$display = "inline";}
		?>
		<tr>
			<td><?php echo $v["id"]?></td>
			<td style="text-indent:<?php echo $length * 2;?>em;"><span style="display:<?php echo $display?>;">|---- </span><?php echo $v["name"]?></td>
			<td><?php echo $v["modelName"]?></td>
			<td><?php echo $v["english"]?></td>
			<td><?php echo $v["path"];?></td>
			<td><a target="new" href='<?php view\View::url("category/show")?>/<?php echo $v["id"];?>'>访问</a></td>
			<td>
				<a class="edit" href='<?php view\View::url("category/add")?>/<?php echo $v["id"];?>/<?php echo $v["path"];?>'>添加子栏目</a>
				<a class="edit" href='<?php view\View::url("category/edit");?>/<?php echo $v["id"];?>'>编辑</a>
				<a class="edit del" href="<?php view\View::url('category/delete/');?><?php echo $v['id'];?>">删除</a>
			</td>
		</tr>
		<?php }}?>
	</table>
	<script type="text/javascript">
	$(function() {
		$(".del").click(function() {
			if(confirm("确定删除嘛？")){
				return true;
			}else{
				return false;
			}
		});
	});
	</script>
</div>
</body>
</html>