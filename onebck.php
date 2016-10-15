<?php
$url="https://passport.jd.com/uc/loginService";
$cookie_file=tempnam("./tmep","cookie");
$post_file='uuid=b862a9c9-99d7-4478-86a9-12baf1dbcb0e&ltype=logout&r=0.46274660737253726&version=2015';
$post_file='';
$header=array(
	"Accept:text/plain, */*; q=0.01",
	"Accept-Encoding:gzip,deflate",
	"Accept-Language:zh-CN",
	"Connection:keep-alive",
	"Content-Length:305",
	"Content-Type:application/x-www-form-urlencoded; charset=UTF-8",
	"Cookie:cn=0; mt_xid=V2_52007VwcaW1xcW1sdSClUAG5QFVMKD04PSBsfQABlBkBODlwCXwNBGV8CZlEVAQ8NUlIvShhcAnsCFk5eXkNaGkIZXg5nByJQbVtiXhxPGVkCVwMWUw%3D%3D; unpl=V2_ZzNtbUsHRB19XEFUKEtdVWIBQQkRXktFcF9BA3sdCFZnAEJfclRCFXIUR1NnGF4UZgsZXUFcQRNFCHZUSxlZAmcLG21DVkccdVhFXS8RDgRvBUIKQ1VGQEULR2R7GGwBbwoTWUtWQRRFOE9dSylsBFcCIlxyGkcdfAlCXXobXTVm; ipLoc-djd=1-72-2799-0; ipLocation=%u5317%u4EAC; dmpjs=dmp-d34541af6128202cabaea7f30e3545fcb40a64; __jdv=122270672|dmp|dmp_52|cpc|dmp_52_11106_d34541af6128202cabaea7f30e3545fcb40a64_1464941767; calu=77789375047119A70C61EB0BC1D96494853A5C2D6E9E4F87A9A54B622B364D2F; mp=jd_yingchao; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=17DSW2gTQ7BWMWYMqPkXs0mP92H95AGh3_nOsJ2B-ZDpDf4j9hoJ3PcBy44VFV50r8EYMpQ3Y7cxoAOirvgLNgtdFinQAlew2ZYNJ3oXYnvOIlQJ2o09ZmJK1xYSRcZED; pinId=-4v9SR1LWIxyn6U5uUHgOg; _ntNcSAd=440+6pseUSJSxUzaBHu/A9nY/c8K06VovJB++7xYbvQ=; alc=sesy+pa0L2QRnZ2/adZPNw==; _ntnynSn=d3LML1lft2THEvQnDH43sfmXZ4IvacG90gZ3CVXooUs=; __jda=122270672.598058030.1464329102.1465190913.1465263908.12; __jdb=122270672.1.598058030|12.1465263908; __jdc=122270672; __jdu=598058030; _jrda=4; _jrdb=1465263908432; 3AB9D23F7A4B3C9B=0B7BDD23B8B2ED9E19BF79A5EF9DAA764864A8B52BE8D35312E453F5B977E0BFCE244F822E2F0852981BB59D8BC2C753; CNZZDATA1256793290=5227637-1465028122-%7C1465260398",
	"DNT:1",
	"Host:passport.jd.com",
	"Origin:https://passport.jd.com",
	"Referer:https://passport.jd.com/new/login.aspx?ReturnUrl=https://pop.jd.com/userLoginAction.action?time=1465263909584",
	"User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.9.2.1000 Chrome/39.0.2146.0 Safari/537.36",
	"X-DevTools-Emulate-Network-Conditions-Client-Id:3BB3D817-11FF-46C6-9E99-B9B25FFD5C2E",
	"X-Requested-With:XMLHttpRequest",
);
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_HEADER,$header);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_file);
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
$contents=curl_exec($ch);
echo $contents;
curl_close($ch);


/*$url="http://localhost/login/index";
$cookie_file=tempnam("./tmep","cookie");
//$post_file='user=xiao&password=xiao888';
//$post_file='';
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_file);
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
$conents=curl_exec($ch);
var_dump($conents);
curl_close($ch);
*/