<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>会员管理</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
<script src="<?php echo base_url()?>public/js/ajax3.0.js"></script>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div>

<form action="<?php echo site_url('reg/index');?>" method="post" name="frm">
    <span>用户名：</span> <input type="text" name="user" value="<?php echo set_value('user');?>" /><?php echo form_error('user','<span style="color:red">','</span>');?><br>
     <span>密码：</span> <input type="password" name="password" value='<?php echo set_value('password');?>' /><?php echo form_error('password','<span style="color:red">','</span>');?><br>
     <span>确认密码：</span>  <input type="password" name="repassword" value="<?php echo set_value('repassword');?>" /><?php echo form_error('repassword','<span style="color:red">','</span>');?><br>
     <span>邮箱：</span> <input type="email" name="email" value="<?php echo set_value('email');?>" /><?php echo form_error('email','<span style="color:red">','</span>');?><br>
    <span>手机号：</span>  <input type="text" name="tell" value="<?php echo set_value('tell');?>" /><?php echo form_error('tell','<span style="color:red">','</span>');?><br>
    <span>qq</span>  <input type="text" name="qq" value="<?php echo set_value('tell');?>" /><?php echo form_error('qq','<span style="color:red">','</span>');?><br>
	<input type="text" name='verify'><img id="vimg" onclick="chimg()"/><br>
    <input type="submit" value="注册" />
</form>
</div>
<!--用ajax获取验证码图片-->
<script>
	var imgobj=document.getElementById('vimg');
	function chimg(){
	Ajax().get('<?php echo site_url('login/verify');?>',function(data){
		var imgsrc=data;
		//alert(imgsrc);
		imgobj.src=imgsrc;
	});
	}
	chimg();
	
</script>


<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
