<?php
date_default_timezone_set ( 'UTC' );
class Jdapi{
     //'token'=>$_SESSION['token_em'],
     //'access_token'=>'acf3f067-a3d5-4abc-a2a2-8c1ef4119db5',
     //'app_key'=>'5C89FB56CEB21A85EB6A8A0043304F10',
    //'app_secret'=>'b81e7718c3ea4c4791a4da59e14088b1'
   private $server_url='https://api.jd.com/routerjson';
    private $method='';
   private $sysatr='';
   // private $timestamp=date("Y-m-d H:i:s",time());//时间戳
    private $v='2.0';
   function __construct($params){
       $this->sysatr=$params;
        if(isset($params)){
            foreach($params as $key => $value){
                $this->$key=$value;
            }
        }
    }
   public function geturl($sysarr='',$myarr=''){
       $sysarr=array_merge($sysarr,$this->sysatr);
        ksort($sysarr);
        ksort($myarr);
        if(isset($sysarr) && $sysarr!=''){
            $sysjson = json_encode($sysarr);
        }else{
            $sysjson='';
        }
        $str='';
        $str1='';
        $myarr_j=json_encode($myarr);
        foreach($sysarr as $key=>$value){
            $str.=$key.$value;
        }
        foreach($sysarr as $key=>$value){
            $str1.=$key."=".$value."&";
        }
        //$str1=rtrim($str1,"&");
        $sign_src=$this->app_secret."360buy_param_json".$myarr_j.$str.$this->app_secret;
        $sign=strtoupper(md5($sign_src));
        
        $url="https://api.jd.com/routerjson?".$str1."360buy_param_json=".$myarr_j."&sing=".$sign;
        //$url="api.jd.com/routerjson?".$str1."360buy_param_json=".$myarr_j."&sing=".$sign;
        //$url="https://".urlencode($url);
        return $url;
   }
    public function getJson($a='',$b=''){
        $apiurl=$this->geturl($a,$b);
        $apiurl1=str_replace('"',"%22",$apiurl);
        $apiurl2=str_replace(' ',"%20",$apiurl1);
        //$apiurl=str_replace('×tamp','&timestamp',$apiurl);
       // echo $apiurl2;exit;
        file_put_contents("./111.txt",$apiurl2);
            $file = fopen($apiurl2, "r") or die("打开远程文件失败！！");
            $line='';
            while (!feof($file)){
                $line .= fgets($file,1024);     //每读取一行
            }
            fclose($file);
            return $line;
            //return file_get_contents($url);
        
    }

}
