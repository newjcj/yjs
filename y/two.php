<?php
//通过http打开远程文件
$url ='https://api.jd.com/routerjson?access_token=acf3f067-a3d5-4abc-a2a2-8c1ef4119db5&app_key=5C89FB56CEB21A85EB6A8A0043304F10&app_secret=b81e7718c3ea4c4791a4da59e14088b1&method=jingdong.ware.search&timestamp=2016-07-13 10:11:55&token=acf3f067-a3d5-4abc-a2a2-8c1ef4119db5&v=2.0&360buy_param_json={"area_ids":"","filt_type":"","key":"sd","page":"","sort_type":""}&sing=333C2281A447BB8E064CE6C9CC1500D6';
$str=str_replace(" ","%20",$url);
$str=str_replace('"',"%20",$str);
$str=str_replace("×tamp","&timestamp",$str);
echo $str;exit;
$file = fopen($url, "r") or die("打开远程文件失败！！");
$str=str_replace(" ","%20",$file);
$line='';
while (!feof($str)){
    $line .= fgets($str,1024);     //每读取一行
}
 
fclose($str);
echo $line;


