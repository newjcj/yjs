<?php

header("Content-type:text/html;charset='utf-8'");

$showLoginUrl = "https://passport.jd.com/uc/login";
$loginViewStr = $this->curl->vget($showLoginUrl);//调用算定自定义类curl的方法

preg_match('/<input type="hidden" id="uuid" name="uuid" value="([\s\S]*?)"/',$loginViewStr,$rs);
//echo $loginViewStr;exit;
//preg_match('/.*/',$loginViewStr,$rs);
//print_r($rs);exit;
if(!isset($rs[1])) throw new Exception('分析页面源码分析uuid失败');
$uuid = $rs[1];
//还要获取到eid,fp,tid,BIoOfAmafd   请求fcf.html响应得到eid
//preg_match('/<input type="hidden" name="eid" id="eid" value="([\s\S]*?)"/',$loginViewStr,$rs_eid);//匹配eid
//$eid=$rs_eid[1];//print_r($rs_eid);exit;
$eid="EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4";//先给个固定的eid的值
preg_match('/<input type="hidden" name="_t" id="token" value="([\s\S]*?)"/',$loginViewStr,$rs_tid);//匹配_t
$tid=$rs_tid[1];//print_r($rs_tid);exit;
$fp="dd39af5b2459e07b77f357f2d9a8fead";//先给个固定的fp的值
preg_match('/<input type="hidden" name="_t" id="token" value="([\s\S]*?)"[\s\S]*?\n[\s\S]*?\n[\s\S]*?<input type="hidden" name="([\s\S]*?)" value="([\s\S]*?)"/',$loginViewStr,$rs_ch);//匹配name   value都变化的表单
//print_r($rs_ch);exit;
$name_ch=$rs_ch[2];
$value_ch=$rs_ch[3];
//echo $name_ch."=".$value_ch;exit;
//获取authcode的值

//$loginUrl = "https://passport.jd.com/uc/loginService?uuid={$uuid}&ReturnUrl=http%3A%2F%2Fwww.jd.com%2F";
//$fields = "uuid={$uuid}&loginname={$shopUser['name']}&nloginpwd={$shopUser['password']}&loginpwd={$shopUser['password']}&eid={$eid}&fp={$fp}&_t={$tid}&authcode={$authcode}&{$name_ch}={$value_ch}&machineNet=&machineCpu=&machineDisk=&authcode=";
//$response = $http->vpost($loginUrl,$fields);//先不执行post
 
// $jsonObj = json_decode(str_replace(array('(',')'),'',$response),true);
 
// if(isset($jsonObj['success'])) echo '登陆成功';
 
 
 // //echo $response;
// print_r($jsonObj);exit;
?>
<form action="<?=site_url('loginjd/login');?>" method="post" id="frm" class="portlet-body form" role="form" >
    <div style="width:60%;;position:relative;left:32%;margin-top:6%;font-family:微软雅黑"><h4>登录京东使用</h4></div>
    <div style="width:1px;height:1px;overflow:hidden;">
        <input type="hidden" name="cookieFile" value="<?=$this->curl->cookie_file;?>"><br>
        <input type="hidden" name="authcode" value=""><br>
        <!-- <img src="https://authcode.jd.com/verify/image?a=1&acid=<?php echo $uuid;?>&uid=<?php echo $uuid;?>&yys=1465616988719"/> --><br>
        <input type="hidden" name="uuid" value="<?php echo $uuid;?>"><br>
        <input type="hidden" name="eid" value="<?php echo $eid;?>"><br>
        <input type="hidden" name="tid" value="<?php echo $tid;?>"><br>
        <input type="hidden" name="fp" value="<?php echo $fp;?>"><br>
        <input type="hidden" name="name_ch" value="<?php echo $name_ch;?>"><br>
        <input type="hidden" name="value_ch" value="<?php echo $value_ch;?>"><br>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label>用户名：</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope font-red"></i>
                </span>
                <input type="text" class="form-control" name="username" placeholder="用户名" value="<?php echo $ulist['user']?>"/> 
                </div>
                <label style="margin-left:40px;margin-top:8px;"><?php echo form_error('user','<span style="color:red">','</span>')?></label>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">密码：</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user font-red"></i>
                </span>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="密码" value=""/>
            </div>
            <label style="margin-left:40px;margin-top:8px;"><?php echo form_error('password','<span style="color:red">','</span>')?></label>
        </div>
    </div>
            
        <div style="width:60%;;position:relative;left:29%;margin-bottom:7%">
            <button type="submit"  class="btn blue" onclick="window.frm.submit()">登录</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button"  class="btn default" onclick="window.location.href='<?php current_url()?>'">
                关闭
            </button>
        </div>
            
</form>
<div style="display:none">京东罗盘
jd_zhangpeng1
ysq86222</div>





