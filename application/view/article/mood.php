<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/admin/manage.css">
	<script type="text/javascript" src="<?php echo URL;?>/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>/resource/js/jquery.js"></script>
</head>
<body>
<div id="content">
<?php if (isset($result)) {?>
	<div class="dalog">
	<?php echo $result;?>
	</div>
<?php }?>
	<form id="form" action="<?php view\View::url('article/mood');?>" method="post">
	<table>

		<tr>
			<td width="140">此刻说点什么</td>
			<td><input autocomplete="off" id="title" class="h-title" type="text" name="title"></td>
		</tr>
		<tr>
			<td><input type="reset" value="重置"></td>
			<td><input type="submit" value="发布文章"></td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript">CKEDITOR.replace('editor01');</script>
<script type="text/javascript">
    $(function(){
    	$(".first").change(function(){
    		var data = $(this).val();
    		$.ajax({
    			type: "post",
    			url : "<?php view\View::url('article/first');?>",
    			data: {id:data},
    			success: function(a, b , c){
    				$(".cate select:gt(0)").remove();
    				$(".cate").append(a);
    			}
    		})
    	});

        $("#file").change(function(){
                data = new FormData();
                data.append('files', $('#file')[0].files[0]);
                $.ajax({
                    type: "post",
                    url: "<?php view\View::url('admin/upload');?>",
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(a, b, c){
                        $(".list ul").append(a);
                    }
                });
            });
    });
    </script>
    <script type="text/javascript">
    var title = document.getElementById('title');
    var form = document.getElementById('form');
    form.onsubmit=function(){
    	var value = title.value;
    	if(value == ""){
    		alert("发表心情不能为空！");
    		return false;
    	}
    	return true;
    }

    </script>
</script>
</body>
</html>