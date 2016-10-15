<?php
//初始化一个 cURL 对象
      //$curl = curl_init();
//设置你需要抓取的URL
      //curl_setopt($curl, CURLOPT_URL, "http://localhost/one.php ");
//curl_setopt($curl, CURLOPT_URL, " http://passport.jd.com/uc/loginService ");
//设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
    //curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);
//运行cURL，请求网页
    //$data = curl_exec($curl);
//关闭URL请求
//curl_close($curl);
//


//POST
//$user = "jd_yingchao";
//$pass = "g17869098";
//$npass = "g17869098";
//$curlPost = "loginname=$user&loginpwd=$pass&nloginpwd=$npass";

//GET
$ReturnUrl="https://pop.jd.com";
$r=echo "<script>Math.random();</script>";


$headers = array(
"POST /uc/loginService?uuid=fc1444e2-32c9-4589-b231-16f22ecfa6cf&ReturnUrl=https://pop.jd.com/userLoginAction.action?time=1465214048445&r=0.5096000124849808&version=2015 HTTP/1.1",
"Host: passport.jd.com",
"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
"Accept: text/plain, */*; q=0.01",
"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
"Accept-Encoding: gzip, deflate, br",
"Content-Type: application/x-www-form-urlencoded; charset=utf-8",
"X-Requested-With: XMLHttpRequest",
"Referer: https://passport.jd.com/new/login.aspx?ReturnUrl=https://pop.jd.com/userLoginAction.action?time=1465214048445",
"Content-Length: 315",
"Cookie: __jda=122270672.610069664.1463798803.1465197980.1465214048.36; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; mp=jd_yingchao; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1puikGyQ3jtY-1VZFB746Y5turUtNlBCh9SxTWkindrdxKqoc28c_pf3F6vLXw8U9YCyw4Kj5T_w4ac3HDtnnOe-oqYXbkKpwQDiV-Ibdphc; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=0; ipLoc-djd=1-72-2799-0; ipLocation=%u5317%u4EAC; areaId=1; _jrda=9; calu=77789375047119A70C61EB0BC1D96494853A5C2D6E9E4F87A9A54B622B364D2F; _jrdb=1465214232528; __jdb=122270672.2.610069664|36.1465214048; alc=2KBAKgZt7XUgHdDJFPYHOQ==; _ntGndsU=/Vxeov4/MqEKq8yvfr1IATErnvVOKbnaOWNzyPNoRPc=; __jdc=122270672; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4",
"Connection: keep-alive"
  );



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, " http://passport.jd.com ");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_HTTPGET, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
$data = curl_exec($ch);


curl_close($ch);

echo "test";
