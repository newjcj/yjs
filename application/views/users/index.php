<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>用户信息</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<?php echo $rlist[2]['goods_name'];?><br>
<table style="width:600px;border:1px solid red;" align='center' border=1>
<?php foreach($glist as $item){?>
	<tr>
	<td>
	<?=$item['price']?><br>
	</td>
	</tr>
<?php }?>
</table>
<?=$ulist['user']?><br>





<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
