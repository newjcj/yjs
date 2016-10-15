<?php
class Loginjd extends CI_Controller{
    public function index(){
    	//加载自己的curl类(注意在视图里不能加载类)
    	$params=array(
        "cookies"=>true,
        "cookie"=>tempnam("./tmp","cookie"),
    );
		$this->load->library('curl',$params);
        $this->load->view('loginjd/index');
    }
    public function login(){
    	header("Content-type:text/html;charset='utf-8'");
    	
		$info=array(
				"authcode"=>$this->input->post('authcode'),
				"uuid"=>$this->input->post('uuid'),
				"eid"=>$this->input->post('eid'),
				"tid"=>$this->input->post('tid'),
				"fp"=>$this->input->post('fp'),
				"name_ch"=>$this->input->post('name_ch'),
				"value_ch"=>$this->input->post('value_ch'),
				"username"=>$this->input->post('username'),
				"password"=>$this->input->post('password'),
				"cookieFile"=>$this->input->post('cookieFile')
			);
		//加载自己的curl类
		$params=array(
		        "cookies"=>TRUE,
		        "cookie"=>$info['cookieFile'],
		    );
		$this->load->library('curl',$params);
		$this->load->vars("info",$info);
		$this->load->view('loginjd/login');
	}
	//授权京东
	public function empower(){
		$logurl='https://auth.360buy.com/oauth/authorize?response_type=code&client_id=5C89FB56CEB21A85EB6A8A0043304F10&redirect_uri=http://localhost/loginjd/empower.php';
		$code=$_GET['code'];
		if($code==''){
			header("location:{$logurl}");
		}
		$stata='';
		$client_secret='b81e7718c3ea4c4791a4da59e14088b1';
		$client_id='5C89FB56CEB21A85EB6A8A0043304F10';
		$rurl='http://localhost/loginjd/empower.php';
		$url="https://oauth.jd.com/oauth/token?grant_type=authorization_code&client_id={$client_id}&redirect_uri={$rurl}&code={$code}&state={$stata}&client_secret={$client_secret}";
		//echo $url;
		if($code!=''){
		    //header("location:{$url}");
		    function vget($url){ // 模拟提交数据函数
		        $header=array(
		            'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
		            'Connection: Keep-Alive'
		        );
		        $user_agent='Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
		        $curl = curl_init(); // 启动一个CURL会话
		        //$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=GBK';
		        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
		        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
		        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
		        curl_setopt($curl, CURLOPT_USERAGENT, $user_agent); // 模拟用户使用的浏览器
		        //curl_setopt($curl, CURLOPT_NOBODY, 0);
		        //if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie_file);
		        //if ($this->cookies == TRUE) curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie_file);
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
		    session_start();
		    if(!isset($_SESSION['token_em']) || $_SESSION['token_em']==''){
			    $token=vget($url);
			    preg_match('/"access_token": "([\s\S]*?)"/',$token,$re);
			    if($_SESSION['token_em']==$re[1]){
			    	redirect('yjs/rate');
			    }//把token保存到session
			}else{
				redirect('user/index');
			}
		}

	}
}
