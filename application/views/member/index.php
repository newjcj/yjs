<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>会员管理</title>
    
</head>

<frameset rows="5%,89%,*" frameborder=0 framespacing=0>
   <frame src='<?php echo site_url("member/top");?>' name='top' />        
   <frameset cols=9%,*>
        <frame src='<?php echo site_url("member/left");?>' name='left' />        
        <frame src='<?php echo site_url("member/right");?>' name='right' />        
    </frameset>
        <frame src='<?php echo site_url("member/bottom");?>' name='bottom' />       
</frameset>

</html>
