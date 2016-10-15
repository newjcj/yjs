<?php
 
header("Content-type:text/html;charset='utf-8'");

//$cookieFile = './cookie_a.txt';
//$cookieFile = $info['cookieFile'];
//$http = new util_curl(true,$cookieFile);
$loginUrl = "https://passport.jd.com/uc/loginService?uuid={$info['uuid']}";
// $fields = "uuid={$uuid}&loginname={$shopUser['name']}&nloginpwd={$shopUser['password']}&loginpwd={$shopUser['password']}&eid={$eid}&fp={$fp}&_t={$tid}&authcode={$authcode}&{$name_ch}={$value_ch}&machineNet=&machineCpu=&machineDisk=&authcode=";
$fields = "uuid={$info['uuid']}&loginname={$info['username']}&nloginpwd={$info['password']}&loginpwd={$info['password']}&eid={$info['eid']}&fp={$info['fp']}&_t={$info['tid']}&authcode={$info['authcode']}&{$info['name_ch']}={$info['value_ch']}&machineNet=&machineCpu=&machineDisk=&authcode=";
//$fields = "uuid={$_POST['uuid']}&loginname={$shopUser['name']}&nloginpwd={$shopUser['password']}&loginpwd={$shopUser['password']}&_t={$_POST['tid']}&authcode={$_POST['authcode']}&machineNet=&machineCpu=&machineDisk=&authcode=";
$response = $this->curl->vpost($loginUrl,$fields);//调用自定自定义类curl的方法

$jsonObj = json_decode(str_replace(array('(',')'),'',$response),true);

if(isset($jsonObj['success'])) echo '登陆成功';
 
 //echo $response;
 //echo $response;
//print_r($jsonObj);
 $wUrl="http://easybuy.jd.com/address/getEasyBuyList.action";
//$wUrl="https://pop.jd.com/advancedDataModel/getViewSourceTypeNew.action?filter.startDate=2016-6";
$welcome = $this->curl->get($wUrl);//调用算定自定义类curl的方法
//var_dump($http);
preg_match('/thor=(.*?);/',$response,$th);//正则匹配出thor的参数
$thor=$th[1];
if($thor != ''){
    session_start();
    $_SESSION['thor']=$thor;
    echo "登录成功！";
    redirect("yjs/rate");
}else{
    //echo $response;
    redirect('user/goods');
}

 
