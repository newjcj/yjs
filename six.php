<?php
 
 
class util_curl {
    var $headers;
    var $user_agent;
    var $compression;
    var $cookie_file;
    var $proxy;
    function util_curl($cookies=TRUE,$cookie='cookies.txt',$header = array(),$compression='gzip',$proxy='') {
 
        if(empty($header))
        {
            $this->headers[] = 'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
            $this->headers[] = 'Connection: Keep-Alive';
            //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
            //$this->headers[] = '';
        }
 
        $this->user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
        $this->compression=$compression;
        $this->proxy=$proxy;
        $this->cookies=$cookies;
        if ($this->cookies == TRUE) $this->cookie($cookie);
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
        curl_setopt($process, CURLOPT_HEADER, 0);
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
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie_file);;
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
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
    function vget($url){ // 模拟提交数据函数
        $curl = curl_init(); // 启动一个CURL会话
        //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=GBK';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $this->user_agent); // 模拟用户使用的浏览器
        //curl_setopt($curl, CURLOPT_NOBODY, 0);
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie_file);;
        if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
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
 
    function error($error) {
        echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>util_curl Error</b><br>$error</div></center>";
        die;
    }
}
 
 
$shopUser = array();
$shopUser['name'] = 'jd_yingchao';
$shopUser['password'] = 'g17869098';
 
$cookieFile = './cookie_aaa.txt';
$http = new util_curl(true,$cookieFile);
 
//1.获取登录页面代码，从中找出uuid变量值
$showLoginUrl = "https://passport.jd.com/new/login.aspx";
$loginViewStr = $http->vget($showLoginUrl);

preg_match('/<input type="hidden" id="uuid" name="uuid" value="([\s\S]*?)"/',$loginViewStr,$rs);
if(!isset($rs[1])) throw new Exception('分析页面源码分析uuid失败');
$uuid = $rs[1];
//还要获取到eid,fp,tid,BIoOfAmafd   请求fcf.html响应得到eid
preg_match('/<input type="hidden" name="eid" id="eid" value="([\s\S]*?)"/',$loginViewStr,$rs_eid);//匹配eid
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

$loginUrl = "https://passport.jd.com/uc/loginService?uuid={$uuid}&ReturnUrl=http%3A%2F%2Fwww.jd.com%2F";
$fields = "uuid={$uuid}&loginname={$shopUser['name']}&nloginpwd={$shopUser['password']}&loginpwd={$shopUser['password']}&eid={$eid}&fp={$fp}&_t={$tid}&{$name_ch}={$value_ch}&machineNet=&machineCpu=&machineDisk=&authcode=";
$response = $http->vpost($loginUrl,$fields);
 
$jsonObj = json_decode(str_replace(array('(',')'),'',$response),true);
 
if(isset($jsonObj['success'])) echo '登陆成功';
 
 
 //echo $response;
print_r($jsonObj);exit; 