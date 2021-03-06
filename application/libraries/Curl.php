<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Curl {
    var $headers=array();
    var $user_agent;
    var $compression='gzip';
    var $cookie_file;
    var $proxy='';
    var $thor='';
    var $referer;
    var $header=1;
    function __construct($params) {
 
        foreach($params as $key => $value){
            if(!empty($params)){
                $this->$key=$value;
            }
        }
        if(empty($this->headers))
        {
            $this->headers[] = 'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
            $this->headers[] = 'Connection: Keep-Alive';
            if(!empty($this->thor)){
                $this->headers[] = "Cookie: thor={$this->thor}";
            }
                 //$this->headers[] = "Cookie: mx=0_X; xtest=49153.39223.14ee22eaba297944c96afdbe5b16c65b.14ee22eaba297944c96afdbe5b16c65b";
                 //$this->headers[] = "HOST: search.jd.com";
                    //$this->headers[] = "GET /Search?keyword=sd&enc=utf-8&pvid=wkkkf7qi.hpv6ki HTTP/1.1";
                 //$this->headers[] = "Referer: http://search.jd.com/Search?keyword=sd&enc=utf-8&pvid=bcilh7qi.10narc";
            if(isset($this->referer) && !empty($this->referer)){
               $this->headers[] = "referer:{$this->referer}"; 
            }
            //$this->headers[] = 'Cookie: alc=q60kMKSs6LNSMp2O5HOh4A==; _ntNuHgz=SGLf4FG9JkTHsYnKyzkTgLgTKMGKxqnyTeOXWe+3aG4=; __jda=122270672.1326083765.1465627045.1465627045.1465627045.1; __jdb=122270672.2.1326083765|1.1465627045; __jdc=122270672; __jdv=122270672|direct|-|none|-; _jrda=1; _jrdb=1465627053471; __jdu=1326083765; _ntdmROm=sGYAtDhyDz4K5i0TB8k8llZyl+Aaij5vLuBWvT3oDs0=; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4
//';
            //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
            //$this->headers[] = '';
        }
 
            $this->user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
       // $this->user_agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0';
       // $this->compression=$compression;
       // $this->proxy=$proxy;
        // $this->cookies=$cookies;
        if ($this->cookies == TRUE) $this->cookie($this->cookie);
    }
 
    function cookie($cookie_file) {
        if (file_exists($cookie_file)) {
            $this->cookie_file=$cookie_file;
        } else {
            if($h = fopen($cookie_file,'w')){
                $this->cookie_file=$cookie_file;
                fclose($h);
            } else {
                $this->error('The cookie file could not be opened. Make sure this directory has the correct permissions');
            }
 
        }
    }
    function get($url) {
        $process = curl_init($url);
        curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($process, CURLOPT_HEADER, 1);
        curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
        if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
        if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($process,CURLOPT_ENCODING , $this->compression);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        if ($this->proxy) curl_setopt($process, CURLOPT_PROXY, $this->proxy);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
        $return = curl_exec($process);
        curl_close($process);
        return $return;
    }
 
    function post($url,$data) {
        $process = curl_init($url);
        curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($process, CURLOPT_HEADER, 0);
        curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
        if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
        if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($process, CURLOPT_ENCODING , $this->compression);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        if ($this->proxy) curl_setopt($process, CURLOPT_PROXY, $this->proxy);
        curl_setopt($process, CURLOPT_POSTFIELDS, $data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($process, CURLOPT_POST, 1);
        $return = curl_exec($process);
        curl_close($process);
        return $return;
    }
 
    function vpost($url,$data){ // 模拟提交数据函数
        $curl = curl_init(); // 启动一个CURL会话
        //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=GBK';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $this->user_agent); // 模拟用户使用的浏览器
        //curl_setopt($curl, CURLOPT_NOBODY, 0);
		curl_setopt($curl, CURLOPT_COOKIESESSION, 0);
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie_file);;
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
		curl_setopt($curl, CURLOPT_MAXREDIRS,6); //跟随 重定向 跳转的次数
		
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, $this->header); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $tmpInfo = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//捕抓异常
        }
        curl_close($curl); // 关闭CURL会话
        return $tmpInfo; // 返回数据
    }
    function vget($url){ // 模拟提交数据函数
        $curl = curl_init(); // 启动一个CURL会话
        //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=GBK';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $this->user_agent); // 模拟用户使用的浏览器
        //curl_setopt($curl, CURLOPT_NOBODY, 0);
        //if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie_file);
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
		curl_setopt($curl, CURLOPT_MAXREDIRS,6); //跟随 重定向 跳转的次数
        //curl_setopt($curl, CURLOPT_POST, 0); // 发送一个常规的Post请求
        //curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 1); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $tmpInfo = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//捕抓异常
        }
        curl_close($curl); // 关闭CURL会话
        return $tmpInfo; // 返回数据
    }
     function vget_only($url){ // 模拟提交数据函数
        $curl = curl_init(); // 启动一个CURL会话
        //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=GBK';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $this->user_agent); // 模拟用户使用的浏览器
        //curl_setopt($curl, CURLOPT_NOBODY, 0);
        //if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie_file);
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
		curl_setopt($curl, CURLOPT_MAXREDIRS,6); //跟随 重定向 跳转的次数
        //curl_setopt($curl, CURLOPT_POST, 0); // 发送一个常规的Post请求
        //curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $tmpInfo = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//捕抓异常
        }
        curl_close($curl); // 关闭CURL会话
        return $tmpInfo; // 返回数据
    }
    
    public function test(){
        return "jjjjcccccccc";
    }
 
    function error($error) {
        echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>util_curl Error</b><br>$error</div></center>";
        die;
    }
}
