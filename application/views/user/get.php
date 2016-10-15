<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title></title>
    <?php $this->load->view('public/weebox')?><!--加载weebox的js 和 css-->
</head>
<body>
<a class="dl" id="DownloadReport" href="http://www.qq.com">下载</a> 
<a class="dl" id="DownloadReport2" href="">下载2</a> 
<script type="text/javascript">  
$(function(){  
    <?php echo C('user/test')?>
    
});  
     
</script>  
</body>
</html>
