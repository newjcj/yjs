<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function P($dump=FALSE){
	if($dump != FALSE){
		if(is_array($dump)){
			echo "<pre>";
			print_r($dump);
			echo "</pre>";
		}else{
			echo "<pre>";
			var_dump($dump);
			echo "</pre>";
		}
	}else{
		echo "未传打印参数";
	}
}
//格式化商品剩余时间
function G_TIME($num){
	if($num>=(365*24*60*60)){
		$nums=$num/(365*24*60*60);
		return ceil($nums)."年";
	}else if($num>=(30*24*60*60)){
		$nums=$num/(30*24*60*60);
		return ceil($nums)."月";
	}else if($num>=(24*60*60)){
		$nums=$num/(24*60*60);
		return ceil($nums)."天";
	}else if($num>=(60*60)){
		$nums=$num/(60*60);
		return ceil($nums)."小时";
	}else if($num>=(60)){
		$nums=$num/(60);
		return ceil($nums)."分钟";
	}else if($num>=(1)){
		$nums=$num/(1);
		return ceil($nums)."秒";
	}else{
		return "<font color='red'>已过期</font>";
	}
}
//构造路径
function P_URL($url){
	return base_url().'/public/'.$url;
}
//模态框
function C($in_url){
	/*$CI =& get_instance();
	$CI->load->view('public/alert');*/
	$url=site_url($in_url);
	$str="$.weeboxs.open('".$url."', {tyle:'dialog', contentType:'ajax',showTitle:true,width:600, clickClose:true, title: 'hello world', width:400, height: 200, draggable:true, animate:false,  onok:function(){alert(1);$.weeboxs.close();}});";
	return $str;
}
//时间
function T($idname){
	$str='<script type="text/javascript">
	        function startTime(){
	            var today=new Date()
	            var years=today.getFullYear();
	            var months=today.getMonth();
	            var d=today.getDate()
	            var h=today.getHours()
	            var m=today.getMinutes()
	            var s=today.getSeconds()
	            // add a zero in front of numbers<10
	            months=months+1
	            months=checkTime(months)
	            d=checkTime(d)
	            m=checkTime(m)
	            s=checkTime(s)
	            var weekday=new Array(7)
	            weekday[0]="星期日"
	            weekday[1]="星期一"
	            weekday[2]="星期二"
	            weekday[3]="星期三"
	            weekday[4]="星期四"
	            weekday[5]="星期五"
	            weekday[6]="星期六"
	            var w=weekday[today.getDay()]
	            //document.getElementById(objid).innerHTML=years+"年"+months+"月"+d+"日 "+w+" "+h+":"+m+":"+s;
	            document.getElementById("'.$idname.'").innerHTML=years+"-"+months+"-"+d+" "+h+":"+m+":"+s;
	            t=setTimeout("startTime()",500)
	        }
	        function checkTime(i){
	            if (i<10){
	                i="0" + i
	            }
	            return i
	        }
	        var i=1;
	        while(true){
	            var tdobj="td"+i;
	            if(document.getElementById(tdobj)==null){
	                break;
	            }
	            startTime(tdobj);
	            i++;
	        }
	        startTime();
	    </script>';
        return $str;
}
//用Ajax入库
function A_D($arr,$url,$funname,$idname,$increase){
	$url=site_url($url);
	$str1='';
	$str2='';
	foreach($arr as $k=>$v){
		$str1.="'{$v}',";
		$str2.="{$v}:values['{$v}'],";
	}
	$str1=rtrim($str1,',');
	$str='<script>
            function '.$funname.'(obj,sour){
                obj.parentNode.parentNode.style="background:#ccddaa";
                var ch=document.getElementsByName("'.$idname.'");
                for(var i=0;i<ch.length;i++){
                    if(ch[i]==obj){
                        var nums=i;
                    }
                }
                var trs=document.getElementsByTagName("tr");
                for(var i in trs){
                    if(i==0 || trs[i].innerHTML==undefined){
                        continue;
                    }
                    if(i==nums+1){
                        var tds=trs[i];
                    }
                }
                var items=new Array('.$str1.');//传值的键
                var values=new Array();
                var a=0;
                for(var i in tds.childNodes){
                    if(tds.childNodes[i].nodeName=="TD"){
                        var iname=items[a];
                        values[iname]=tds.childNodes[i].innerHTML;//得到tr对象
                        a++;
                    }
                }
                Ajax().post("'.$url.'",{'.$str2.$increase.'source:sour},function(data){
                        if(data!=""){
                        	var data="插入第"+data+"条数据成功";
                        	jSuccess(data,{TimeShown:1000,HorizontalPosition:"center",LongTrip:250,OpacityOverlay:0.5});
                        }else{
                        	jError("保存失败！",{TimeShown:1000,HorizontalPosition:"center",LongTrip:250,OpacityOverlay:0.5});
                        }
                });
            }
        </script>';
        return $str;
}
