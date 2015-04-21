<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/resource/css/admin/manage.css">
</head>
<body>
	<?php if(isset($success)) {?>
	<div class="dalog">
	<?php echo $success; ?>
	</div>
	<?php } ?>
	<div id="content" class="add">
		<form action="<?php view\View::url('club/add'); ?>" method="post">
		<table>
			<tr>
				<td>联赛 / 球场</td>
				<td>
					<select>
						<?php foreach($data as $v) {?>
						<option><?php echo $v["name"]; ?></option>
						<?php } ?>
					</select>

					<select>
						<option>伯纳乌球场</option>
						<option>西班牙足球甲级联赛</option>
						<option>西班牙足球甲级联赛</option>
						<option>西班牙足球甲级联赛</option>
						<option>西班牙足球甲级联赛</option>
						<option>西班牙足球甲级联赛</option>
						<option>西班牙足球甲级联赛</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>俱乐部名称</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>俱乐部简称</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>俱乐部介绍</td>
				<td><textarea rows="5"></textarea></td>
			</tr>
			<tr>
				<td>俱乐部创建时间</td>
				<td><input type="date"></td>
			</tr>
			<tr>
				<td>标志 / 队徽</td>
				<td><input type="file"></td>
			</tr>
			<tr>
				<td>所在城市</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>
					操作
				</td>
				<td>
					<input type="reset"> <input type="submit">
				</td>
			</tr>
		</table>
		</form>
	</div>
	
</body>
</html>