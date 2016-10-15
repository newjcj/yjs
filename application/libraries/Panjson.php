<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('Curl.php');
class Panjson{
    private $thor='';
    private $zz='';
    private $rurl='';
    private $method='get';//默认get
    private $fields='';//可以不传
    private $referer='';

    public function __construct($params){
        if(isset($params)){
            foreach($params as $key => $value){
                $this->$key=$value;
            }
        }
    }
    //提取json数据，得到需要的数据（返回匹配的数组）
    public function data($rurl='',$zz='',$method='get',$fields='',$referer=''){//参数1请求的地址，2正则模式，3post的传递参数，4头的请求来源地址
           $this->rurl=$rurl;
            $this->zz=$zz;
        if(!empty($fields)){
            $this->fields=$fields;
        }
        if($method=='post'){
            $this->method='post';
        }else{
            $this->method='get';
        }
        if($referer!=''){
            $this->referer=$referer;
        }
        $json=$this->json();
        if($this->zz==''){
            return $json;
        }else{
           preg_match("/$this->zz/",$json,$jarr);
            if(!empty($jarr)){
                //return $jarr;
                return $jarr;
            }else{
                return FALSE;
            }
        }
    }
    //用curl请求要访问的接口返回json数据
    public function json(){
        $params=array(
        "cookies"=>true,
        "cookie"=>tempnam("./tmp","cookie"),
        "thor"=>$this->thor,
        "header"=>false,
        "referer"=>$this->referer,
         );
        $curl=new Curl($params);
        if($this->method=='post'){
            $response = $curl->vpost($this->rurl,$this->fields);//调用自定自定义类curl的方法
        }else{
            $response = $curl->vget_only($this->rurl);//调用自定自定义类curl的方法
        }
        return $response;
    }
}
