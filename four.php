<?php
function curl_1(){
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip,deflate,br",
			//"Cookie: __jda=122270672.610069664.1463798803.1465300301.1465305712.43; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; mp=jd_yingchao; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1zx-4uTlLy_d8MMgvqEFBsEcbB7NYpayHurGuMNGaBoUp7Z6sXkbZlmaYXyVcKmhgBxlYtjfL84cbgYL2UTFGNmh1F39OInvdHRz8T5kWyJI; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; calu=77789375047119A70C61EB0BC1D96494853A5C2D6E9E4F87A9A54B622B364D2F; alc=RdgDCJeyaG8SB9LZMOWRgA==; _ntxYzED=Ctb+uifwEMrxCTGHrwREww6oW9R/CN93yAb0GsUfTPQ=; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; __jdb=122270672.9.610069664|43.1465305712; ipLoc-djd=1-72-2799-0; _ntMtPHr=COfg4qmcKuZSYo/XjU2IgITpG2R6gV9tDXaSdFmRiY0=; _jrda=1; _jrdb=1465306173012; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4",
			"Connection:keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		// curl_setopt($ch, CURLOPT_URL, "https://passport.jd.com/uc/login");
		curl_setopt($ch, CURLOPT_URL, "https://passport.jd.com/new/login.aspx");
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);

}
function curl_2(){
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: */*",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Referer: https://passport.jd.com/uc/login",
			//"Cookie: __jda=122270672.610069664.1463798803.1465305712.1465349112.44; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; mp=jd_yingchao; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1G-AzdeK3HMpa4WnvdDb1Cv6-hiWFs_n0d1Yv5k_F5cRvkipww4fbVPndClDVzMTSCVuM2XFuZUAhm9fCzIDgBQYEl86igAYdPTIcPpeA12o; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; calu=77789375047119A70C61EB0BC1D96494853A5C2D6E9E4F87A9A54B622B364D2F; ipLoc-djd=1-72-2799-0; __jdb=122270672.13.610069664|44.1465349112; alc=znhuXdgnwwb/ArbIJl0YcA==; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _ntakZET=rR/4/V/2ByqlBBChml+OhSFwp/uOHu9mk2SZIp1v61E=; _jrda=1; _jrdb=1465349298278; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4; _ntmrHvj=J9E4IAdG+Ok/5VfbO0UFIC0j7elQvbn0Np+N96NZclA=",
			"Connection: keep-alive",
			"If-Modified-Since: Thu, 26 May 2016 15:43:00 GMT",
			'If-None-Match: W/"14213-1464277380000',
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://passport.jd.com/new/misc/js/login2015.js");
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);

}
function curl_3(){
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: */*",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Referer: https://passport.jd.com/uc/login",
			"Cookie: __jda=122270672.610069664.1463798803.1465305712.1465349112.44; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1G-AzdeK3HMpa4WnvdDb1Cv6-hiWFs_n0d1Yv5k_F5cRvkipww4fbVPndClDVzMTSCVuM2XFuZUAhm9fCzIDgBQYEl86igAYdPTIcPpeA12o; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; ipLoc-djd=1-72-2799-0; __jdb=122270672.13.610069664|44.1465349112; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _jrda=1; _jrdb=1465349298278; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://payrisk.jd.com/fp.html");
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数
		setcookie("aaaaa","jcj");
		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
function curl_4(){
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$rand="<script>alert(Math.random());</script>";//用js random方法得到一个18位的随机数 设置给v
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: */*",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Referer: https://passport.jd.com/uc/login",
			//"Cookie: __jda=122270672.610069664.1463798803.1465305712.1465349112.44; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1G-AzdeK3HMpa4WnvdDb1Cv6-hiWFs_n0d1Yv5k_F5cRvkipww4fbVPndClDVzMTSCVuM2XFuZUAhm9fCzIDgBQYEl86igAYdPTIcPpeA12o; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; ipLoc-djd=1-72-2799-0; __jdb=122270672.13.610069664|44.1465349112; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _jrda=1; _jrdb=1465349298278; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://payrisk.jd.com/y.html?v={$rand}&o=passport.jd.com/uc/login");
		
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
function curl_5(){
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$rand="<script>alert(Math.random());</script>";//用js random方法得到一个18位的随机数 设置给v
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Referer: https://passport.jd.com/uc/login",
			//"Cookie: __jda=122270672.610069664.1463798803.1465305712.1465349112.44; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1G-AzdeK3HMpa4WnvdDb1Cv6-hiWFs_n0d1Yv5k_F5cRvkipww4fbVPndClDVzMTSCVuM2XFuZUAhm9fCzIDgBQYEl86igAYdPTIcPpeA12o; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; ipLoc-djd=1-72-2799-0; __jdb=122270672.13.610069664|44.1465349112; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _jrda=1; _jrdb=1465349298278; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://payrisk.jd.com/JdSecurity.swf");
		
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
function curl_6(){
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$rand="<script>alert(Math.random());</script>";//用js random方法得到一个18位的随机数 设置给v
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: */*",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Referer: https://passport.jd.com/uc/login",
			//"Cookie: __jda=122270672.610069664.1463798803.1465305712.1465349112.44; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; __jru=JR610069664; __jrrda=122270672.2034992279.1464166930.1465300444.1465349114.30; __jrrdv=122270672|JD|-|referral|-; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1G-AzdeK3HMpa4WnvdDb1Cv6-hiWFs_n0d1Yv5k_F5cRvkipww4fbVPndClDVzMTSCVuM2XFuZUAhm9fCzIDgBQYEl86igAYdPTIcPpeA12o; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; ipLoc-djd=1-72-2799-0; __jdb=122270672.13.610069664|44.1465349112; __jrrdb=122270672.9.2034992279|30.1465349114; __jdc=122270672; __jrrdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _jrda=1; _jrdb=1465349298278; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://jrclick.jd.com/wl.dev.js");
		
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
function curl_9(){//post
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$rand_r="<script>alert(Math.random());</script>";//用js random方法得到一个18位的随机数 设置给v
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: text/plain, */*; q=0.01",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Content-Type: application/x-www-form-urlencoded; charset=utf-8",
			"X-Requested-With: XMLHttpRequest",
			"Referer: https://passport.jd.com/uc/login",
			"Content-Length: 21",
			"Cookie: __jda=122270672.610069664.1463798803.1465305712.1465349112.44; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; mp=jd_yingchao; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1G-AzdeK3HMpa4WnvdDb1Cv6-hiWFs_n0d1Yv5k_F5cRvkipww4fbVPndClDVzMTSCVuM2XFuZUAhm9fCzIDgBQYEl86igAYdPTIcPpeA12o; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; calu=77789375047119A70C61EB0BC1D96494853A5C2D6E9E4F87A9A54B622B364D2F; ipLoc-djd=1-72-2799-0; __jdb=122270672.14.610069664|44.1465349112; alc=znhuXdgnwwb/ArbIJl0YcA==; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _ntakZET=rR/4/V/2ByqlBBChml+OhSFwp/uOHu9mk2SZIp1v61E=; _jrda=1; _jrdb=1465349310791; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4; _ntmrHvj=J9E4IAdG+Ok/5VfbO0UFIC0j7elQvbn0Np+N96NZclA=",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://passport.jd.com/uc/showAuthCode?r={$rand_r}&version=2015");
		curl_setopt($ch, CURLOPT_POST,TRUE);//使用post的传输方式
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'loginName=jd_yingchao');//设置post的传输参数
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向 时 ，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随 重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随 重定向 跳转的次数
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
function curl_10(){//post
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		$rand_r="<script>alert(Math.random());</script>";//用js random方法得到一个18位的随机数 设置给v
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate, br",
			"Content-Type: application/x-www-form-urlencoded;charset=UTF-8",
			"Referer: https://passport.jd.com/uc/login",
			"Content-Length: 21344",
			"Origin: https://passport.jd.com",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://payrisk.jd.com/fcf.html?");
		curl_setopt($ch, CURLOPT_POST,TRUE);//使用post的传输方式
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'loginName=jd_yingchao');//设置post的传输参数
		//curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随重定向跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
function curl_11(){//get  请求www.jd.com
		$cookie_file=tempnam("./temp","cookie");//设置cookie的保存位置
		//$post_file='https://dl.reg.163.com/gt?un=18666015093%40163.com&nocache=1465281660066';
		//$post_file='';
		//$rand_r="<script>alert(Math.random());</script>";//用js random方法得到一个18位的随机数 设置给v
		$header=array(
			"User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0",
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
			//"Accept-Encoding: gzip, deflate",
			"Cookie: __jda=122270672.610069664.1463798803.1465376722.1465521702.47; __jdv=248344976|baidu|-|organic|not set; __jdu=610069664; _tp=3X3DM0kg7mBgWtLs2%2FP1%2Bg%3D%3D; _pst=jd_yingchao; TrackID=1TlOrCWLe17FSEhgrKfmuW9_lKovNuXjUrvSwlBl9rRDNvwOy8MLPrFsqEqALaGVc6jGw15WUu_4pqgP4kxbgxzSXCiD5_q9CLdsdLBMAKas; pinId=-4v9SR1LWIxyn6U5uUHgOg; unpl=V2_ZzNtbRcDQBR1AEBVeRpUAmJRQFURVEJAdVxFBC4cXwEyC0IIclRCFXIUR1BnG1wUZwMZXUBcRh1FCHZXfBpaAmEBFl5yBBNNIEwEACtaDlwJARpbQlRHHXEMRl1LKV8EVwMTbUVXQhRyAEFTfilsAlczIlpKVEYXcjhHZHopHlE7CxVUQ1ZFWHIIR1V8EVsCYjMT; user-key=81a5ce4e-c169-42c5-9c43-21b463ad4855; cn=1; ipLocation=%u5317%u4EAC; areaId=1; ipLoc-djd=1-72-2799-0; __jdb=122270672.6.610069664|47.1465521702; __jdc=122270672; ceshi3.com=xW2WYA1xW1J6rVd0DNgnPPfNEZd5OBOpuRcEgK6rlW8; _jrda=1; _jrdb=1465523303573; 3AB9D23F7A4B3C9B=EDC9E783706DCD60DB1091163593D0ACB43282D68115E4DD8E1C9346ADB86ABB0E85F9F9319AFA2AB8F914268CAE93D4; thor=0AA172256DAC262804650F1ABFFFAF46E05F7B8E3B08250B10530A1971B6EE6D4B5C1C4E9F0F7839D856DFDE851E0EBDC1FAF3B4E320C9E20ED0C1258BA7FE412AA95EC4ECC59C30FC26435157FEC21063ACE548BC0774B943E0790566C8A4CC4AE4E7730B868921007B9073ABD55AB2CB0C77F5A37E7DAA358BF4A03965D54DB1F0D29EF96C7A9528130F26220A7BA6; logining=1; pin=jd_yingchao",
			"Connection: keep-alive",
		);
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file); //设置cookie的发送路径
		curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file); //设置cookie的保存位置
		curl_setopt($ch, CURLOPT_URL, "https://www.jd.com");
		curl_setopt($ch, CURLOPT_POST,TRUE);//使用post的传输方式
		//curl_setopt($ch, CURLOPT_POSTFIELDS, 'loginName=jd_yingchao');//设置post的传输参数
		curl_setopt($ch, CURLOPT_HEADER, TRUE); // 是否返回response header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header); // set request header
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // Location: 重定向 时，自动设置 header 中的Referer:信息。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 直接输出返回
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //是否跟随 重定向
		curl_setopt($ch, CURLOPT_MAXREDIRS,6); //跟随 重定向 跳转的次数

		$r = curl_exec($ch);
		echo '<!-- ' , print_r(curl_getinfo($ch)), ' -->'; // header
		echo $r;
		curl_close($ch);
}
curl_1();







