<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>会员管理</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
<!--加载自定义的css样式-->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/login/index.css">
<script src="<?php echo base_url()?>public/js/ajax3.0.js"></script>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script>
// function focus
	// var userobj=document.getElementById('userid');
	// alert(userobj.NodeValue);
// 
$(function(){
	$('#userid').focus();
});
</script>
</head>
<body onload="focus()">

<div class="login" id="log">
	<form action="<?php echo site_url('login/check');?>" method="post">
		<h1>会员登录</h1>
		<span>用户名：</span><input type="text" name="user" id='userid' /><br>
		<span>密　码：</span><input type="password" name="password" /><br>
		<span>验证码：</span><input type="text" name="captcha" /><img id="vimg" onclick="chimg()"/><br>
		<input type='submit' value="登录">
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
