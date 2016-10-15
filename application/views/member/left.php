<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>会员管理</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
<!--加载自定义的css样式-->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/member/left.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script>
	$(function(){
		//alert('hellow');
		$('.container div:eq(0) .btn-primary').click(function(){
			$('.container div:eq(0) .btn-default').toggle();
		});
		$('.container div:eq(1) .btn-primary').click(function(){
			$('.container div:eq(1) .btn-default').toggle();
		});
		$('.container div:eq(2) .btn-primary').click(function(){
			$('.container div:eq(2) .btn-default').toggle();
		});
	});
</script>
</head>
<body>
	<div>
		<ul>
			<li><a href="<?php echo site_url('users/userinfo');?>" target="right">会员信息</a></li>
			<li><a href="<?php echo site_url('users/record');?>" target="right">购买记录</a></li>
			<li><a href="<?php echo site_url('users/order');?>" target="right">订单号</a></li>
			<li><a href="<?php echo site_url('users/menu');?>" target="right">用户菜单</a></li>
			<li><a href="<?php echo site_url('users/goods');?>" target="right">产品</a></li>
			<li><a href="<?php echo site_url('users/cuserinfo');?>" target="right">修改用户信息</a></li>
		</ul>
	</div>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
