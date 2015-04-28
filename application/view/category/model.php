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
			<td>模型名称</td>
			<td>模型摘要</td>
			<td>操作</td>
		</tr>
		<?php if (!empty($data)) {?>
		<?php foreach ($data as $v) {?>

		<tr>
			<td><?php echo $v["mid"]?></td>
			<td><?php echo $v["modelName"]?></td>
			<td><?php echo $v["description"]?></td>
			<td>
				<a class="edit" href='<?php view\View::url("category/editModel");?>/<?php echo $v["id"];?>'>编辑</a>
				<a class="edit del" href="<?php view\View::url('category/deleteModel/');?><?php echo $v['id'];?>">删除</a>
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