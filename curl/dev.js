var __jrrda= ['122270672.2034992279.1464166930.1465300444.1465349114.30'];
var __jrrdb= ['122270672.12.2034992279|30.1465349114'];
var __jrrdc= ['122270672'];
var __jrrdv= ['122270672|JD|-|referral|-'];
var c_domain='jrclick.jd.com';
(function(){var utils={cdomain:"",getHost:function(url){var regex=/.*\:\/\/([^\/|:]*).*/;var match=url
.match(regex);var host="";if(typeof match!="undefined"&&null!=match){host=match[1]}return host},urlParams
:function(name){var reg=new RegExp("(^|&)"+name+"=([^&]*)(&|$)");var r=window.location.search.substr
(1).match(reg);if(r!=null){return unescape(r[2])}return null},setCookie:function(name,value,MillsTime
){var exp=new Date();exp.setTime(exp.getTime()+MillsTime);document.cookie=name+"="+escape(value)+";expires
="+exp.toGMTString()+";path=/;domain="+this.cdomain},getCookie:function(name){var cookieValue="";if(document
.cookie&&document.cookie!=""){var cookies=document.cookie.split(";");for(var i=0;i<cookies.length;i+
+){var cookie=$.trim(cookies[i]);if(cookie.substring(0,name.length+1)==(name+"=")){cookieValue=decodeURIComponent
(cookie.substring(name.length+1));break}}}return cookieValue}};var service={account:"",visit:function
(){var jrda=utils.getCookie("_jrda");var jrdb=utils.getCookie("_jrdb");var timeStamp=new Date().getTime
();var visitNum=1;var bTime=30*60*1000;var aTime=180*24*60*60*1000;if(!jrda&&!jrdb){utils.setCookie("_jrda"
,visitNum,aTime);utils.setCookie("_jrdb",timeStamp,bTime)}else{if(jrda&&!jrdb){visitNum=parseInt(jrda
)+1;utils.setCookie("_jrda",visitNum,aTime);utils.setCookie("_jrdb",timeStamp,bTime)}else{utils.setCookie
("_jrdb",timeStamp,bTime)}}},order:function(referrerURL){var host=utils.getHost(referrerURL),orderMsg
="",orderNO=null,orderSum=null,projectId=null,projectType=null;var currentHost=utils.getHost(document
.location.href);if(currentHost=="trade.z.jd.com"||host=="trade.z.jd.com"){projectType="10002";orderNO
=$(".module_item:first dl:first dd").html();projectId=$("#_projectId").val();var orderSumStr=$(".f_red28
:first").html();if(orderSumStr!=null){orderSum=orderSumStr.substr(1,orderSumStr.length-1)}}else{if(host
=="licai.bx.jd.com"){projectType="102";orderNO=utils.urlParams("orderId");orderSum=utils.urlParams("shouldPay"
)}else{if(host=="bill.jr.jd.com"){projectType="10003";orderNO=$("#orderId").val();orderSum=$("#shouldPay"
).val()}else{if(host==""){host=document.location.href;if(host.match("trade.jr.jd.com")){var xjkFlag=$
("a[href='/centre/jrbpayin.action']").size();if(xjkFlag==1){projectType="10000";orderNO=utils.urlParams
("order");orderSum=utils.urlParams("amount")}else{$("a[class='loan-pub-btn']").each(function(){var thisE
=this;var hrefStr=$(thisE).attr("href");if(hrefStr.indexOf("list.jr.jd.com/detail")){projectType="101"
;orderNO=utils.urlParams("order");orderSum=$(".bill-money").html().substr(1);projectId=$(".loan-pub-btn"
).last().attr("href").split("/")[4].split(".")[0]}})}}}else{if(host=="jrapp.jd.com"){host=document.location
.href;if(host.match("m.z.jd.com")){projectType="10002";orderNO=utils.urlParams("orderId");orderSum=utils
.urlParams("amount")}}}}}}if(orderNO!=null&&orderSum!=null){orderMsg=orderNO+"|"+orderSum+"|"+projectId
+"|"+projectType}return orderMsg},req:function(pageCode,params){var referrerURL=document.referrer;var
 vsstring="";for(var v in params){vsstring+=((v+"="+params[v])+"$")}vsstring=vsstring.substring(0,vsstring
.length-1);var uid=utils.getCookie("__jdu");if(uid==""){var jda=utils.getCookie("__jda");if(jda!="")
{var jdaParams=jda.split(".");uid=jdaParams[1]}}var pin=utils.getCookie("pin");var jrda=utils.getCookie
("_jrda");var sitead=utils.getCookie("flow_site_ad");var outsitead=utils.getCookie("flow_outsite_ad"
);var traceurl=("https:"==document.location.protocol?"https://":"http://")+c_domain+"/log.gif"+"?uid
="+uid+"&p="+pin+"&t="+pageCode+"&m="+this.account+"&ref="+encodeURIComponent(referrerURL)+"&v="+encodeURIComponent
(vsstring)+"&order="+this.order(referrerURL)+"&jrda="+jrda+"&sitead="+sitead+"&outsitead="+outsitead
+"&rm="+(new Date).getTime()+"&__jrrda="+__jrrda+"&__jrrdb="+__jrrdb+"&__jrrdc="+__jrrdc+"&__jrrdv="
+__jrrdv;var d=new Image(1,1);d.src=traceurl;d.onload=function(){d.onload=null;d.onerror=null}}};if("undefined"
==typeof _jraq||_jraq.length==0){var fd_index=document.domain.lastIndexOf(".");var sd_index=document
.domain.substring(0,fd_index).lastIndexOf(".");if(sd_index>-1){utils.cdomain=document.domain.substring
(sd_index)}else{utils.cdomain="."+document.domain}service.account="UA-J2000-1"}else{if(_jraq.length=
=1){var _account=_jraq.pop();service.account=_account[1];var fd_index=document.domain.lastIndexOf("."
);var sd_index=document.domain.substring(0,fd_index).lastIndexOf(".");if(sd_index>-1){utils.cdomain=document
.domain.substring(sd_index)}else{utils.cdomain="."+document.domain}}else{var _domain=_jraq.pop();utils
.cdomain=_domain[1];var _account=_jraq.pop();service.account=_account[1]}}var $jrc="jr.jd.com,z.jd.com
,zbbs.jd.com,baitiao.jd.com,baitiao.ps.jd.com,go.jd.com,loan.jd.com,bao.jd.com,baoxian.jd.com,licai.bx
.jd.com,licai.jd.com,8.jd.com,8.jr.jd.com,jinku.pay.jd.com".split(",");var jrgd=function(a){var rfr=document
.referrer,d=utils.cdomain;var rdomain=rfr&&rfr.split("/")[2],b=false;var jrrdv=__jrrdv;var reg=/from
=jrad_(([0-9]{1,})|JD)/;var jrad=reg.exec(D.location.href);
var locReg=/&loc=([0-9]{1,})/;var loc=locReg.exec(D.location.href);if(jrad!=null&&loc!=null&&loc[1]=
=2){a.set(usc,"jrad_"+jrad[1]);a.set(ucp,"-");a.set(umd,"referral");a.set(uct,"-")}else{if(rdomain&&
(rdomain.indexOf(".jd.com")>-1)){for(var ss=$jrc,i=0;i<ss.length;i++){var e=ss[i].toLowerCase();if(rdomain
.indexOf(e)>-1){b=true;break}}if(!b&&(/jrad_(([0-9]{1,})|JD)/.exec(a.get(usc))==null)){a.set(usc,"JD"
);a.set(ucp,"-");a.set(umd,"referral");a.set(uct,"-")}}else{if(!rdomain){if(jrrdv[0]!=null&&"JD"===a
.get(usc)){a.set(usc,"direct");a.set(ucp,"-");a.set(umd,"none");a.set(uct,"-")}}}}if(window.jrBase&&window
.jrBase.navId){a.set(nav,window.jrBase.navId)}};var W=window,D=document,aa=encodeURIComponent,bb=decodeURIComponent
,g=void 0,p="push",y="join",s="split",l="length",ind="indexOf",pr="prototype",t="toLowerCase";var JDA
={};JDA.util={getParameter:function(url,name){var f=new RegExp("(?:^|&|[?]|[/])"+name+"=([^&]*)");var
 result=f.exec(url);return result?aa(result[1]):""},Wv:function(n,v,d,t){n=n+"="+v+"; path=/; ";t&&(n
+="expires="+(new Date(new Date().getTime()+t)).toGMTString()+"; ");d&&(n+="domain="+d+";");D.cookie
=n},Vv:function(n){for(var b=[],c=D.cookie[s](";"),name=RegExp("^\\s*"+n+"=\\s*(.*?)\\s*$"),d=0;d<c[l
];d++){var e=c[d]["match"](name);e&&b[p](e[1])}return b}};var Ba=0;function K(a){return(a?"_":"")+Ba
++}var Ca=K(),O=K(),L=K(),Dm=K(),Fa=K(),Ha=K(),Ja=K(),Ia=K(),tn=K(),tl=K(),mp=K(),mr=K(),mh=K(),fl=K
(),br=K(),bv=K(),co=K(),cs=K(),cd=K(),ml=K(),je=K(),cr=K(),wb=K(),xb=K(),yb=K(),zb=K(),cb=K(),se=K()
,usc=K(),ucp=K(),umd=K(),uct=K(),et=K(),tad=K(),nav=K();var lr=function(){var c={};this.set=function
(a,b){c[a]=b},this.get=function(a){return c[a]!==g?c[a]:null},this.m=function(b){var x=this.get(b);var
 y=x==g||x===""?0:1*x;c[b]=y+1};this.set(Ca,"UA-J2011-1");this.set(Dm,utils.cdomain);this.set(L,dh()
);this.set(Fa,Math.round((new Date).getTime()/1000));this.set(Ha,63072000000);this.set(Ja,15768000000
);this.set(Ia,1800000);this.set(fl,Jc());var b=bo();this.set(br,b.name);this.set(bv,b.version);this.set
(co,os());var ci=Hc();this.set(cs,ci.D);this.set(cd,ci.C);this.set(ml,ci.language);this.set(je,ci.javaEnabled
);this.set(cr,ci.characterSet);this.set(se,$c);this.set(et,new Date().getTime())};var $c="baidu:wd,baidu
:word,so.com:q,so.360.cn:q,360so.com:q,360sou.com:q,baidu:q1,m.baidu:word,m.baidu:w,wap.soso:key,m.so
:q,page.yicha:key,sz.roboo:q,i.easou:q,wap.sogou:keyword,google:q,soso:w,sogou:query,youdao:q,ucweb:keyword
,ucweb:word,114so:kw,yahoo:p,yahoo:q,live:q,msn:q,bing:q,aol:query,aol:q,daum:q,eniro:search_word,naver
:query,pchome:q,images.google:q,lycos:query,ask:q,netscape:query,cnn:query,about:terms,mamma:q,voila
:rdata,virgilio:qs,alice:qs,yandex:text,najdi:q,seznam:q,search:q,wp:szukaj,onet:qt,szukacz:q,yam:k,kvasir
:q,ozu:q,terra:query,rambler:query".split(","),fa=function(){return Math.round((new Date).getTime()/1000
)},pa=function(){return Math.round(Math.random()*2147483647)},ud=function(){return pa()^Ic()&2147483647
},dh=function(){return oa(D.domain)},Hc=function(){var a={},b=W.navigator,c=W.screen;a.D=c?c.width+"x"
+c.height:"-";a.C=c?c.colorDepth+"-bit":"-";a.language=(b&&(b.language||b.browserLanguage)||"-")[t](
);a.javaEnabled=b&&b.javaEnabled()?1:0;a.characterSet=D.characterSet||D.charset||"-";return a},Jc=function
(){var b,c,d,e;d="ShockwaveFlash";if((b=(b=window.navigator)?b.plugins:g)&&b[l]>0){for(c=0;c<b[l]&&!e
;c++){d=b[c],d["name"][ind]("Shockwave Flash")>-1&&(e=d.description[s]("Shockwave Flash ")[1])}}else
{d=d+"."+d;try{c=new ActiveXObject(d+".7"),e=c.GetVariable("$version")}catch(f){}if(!e){try{c=new ActiveXObject
(d+".6"),e="WIN 6,0,21,0",c.AllowScriptAccess="always",e=c.GetVariable("$version")}catch(i){}}if(!e)
{try{c=new ActiveXObject(d),e=c.GetVariable("$version")}catch(m){}}e&&(e=e[s](" ")[1][s](","),e=e[0]
+"."+e[1]+" r"+e[2])}var _r2=JDA.util.Vv("_r2");b=e?(e+(_r2[l]>0?("_"+_r2[0]):"")):"-";var limgs=JDA
.util.Vv("limgs");b=b+(limgs[l]>0?("_"+limgs[0]):"");return b},C=function(a){return g==a||"-"==a||""
==a},oa=function(a){var b=1,c=0,d;if(!C(a)){b=0;for(d=a[l]-1;d>=0;d--){c=a.charCodeAt(d),b=(b<<6&268435455
)+c+(c<<14),c=b&266338304,b=c!=0?b^c>>21:b}}return b},Ic=function(){var Fc=Hc();for(var a=Fc,b=W.navigator
,a=b.appName+b.version+a.language+b.platform+b.userAgent+a.javaEnabled+a.D+a.C+(D.cookie?D.cookie:""
)+(D.referrer?D.referrer:""),b=a.length,c=W.history.length;c>0;){a+=c--^b++}return oa(a)},bo=function
(){var b={name:"other",version:"0"},ua=navigator.userAgent.toLowerCase();browserRegExp={jrapp:/jdjr[
|\-]([\w.]+)/,jdapp:/jdapp[|\;]([\w.]+)/,weixin:/micromessenger[|\/]([\w.]+)/,walletclient:/[|\/]walletclient
/,se360:/360se/,se360_2x:/qihu/,ie:/msie[ ]([\w.]+)/,firefox:/firefox[|\/]([\w.]+)/,chrome:/chrome[|
\/]([\w.]+)/,safari:/version[|\/]([\w.]+)(\s\w.+)?\s?safari/,opera:/opera[|\/]([\w.]+)/};for(var i in
 browserRegExp){var match=browserRegExp[i].exec(ua);if(match){b.name=i;b.version=match[1]||"0";break
}}return b},os=function(){var o=/(win|android|linux|nokia|ipad|iphone|ipod|mac|sunos|solaris)/.exec(navigator
.platform.toLowerCase());
return o==null?"other":o[0]},jwo=function(){var jwov="",cookienames=["jwotest_product","jwotest_list"
,"jwotest_cart","jwotest_orderinfo","jwotest_homepage","jwotest_other1","jwotest_other2","jwotest_other3"
];for(var i=0,len=cookienames.length;i<len;i++){var cooks=JDA.util.Vv(cookienames[i]);if(cooks[l]==0
){continue}var matchs=bb(cooks[0]).match(/=(.*?)&/gi),wovs=[];if(matchs==null){continue}$.each(matchs
,function(j,m){wovs.push(j==0?"T"+m.substring(1,m.length-1):m.substring(1,m.length-1))});jwov+=wovs[y
]("-")+";"}return jwov},gc=function(a){a.set(tn,D.location.hostname);a.set(tl,D.title);a.set(mp,D.location
.pathname);a.set(mr,D.referrer);a.set(mh,D.location.href);var jda=__jrrda,da=jda[l]>0?jda[0][s](".")
:null;a.set(O,da?da[1]:ud());a.set(wb,da?da[2]:a.get(Fa));a.set(xb,da?da[3]:a.get(Fa));a.set(yb,da?da
[4]:a.get(Fa));a.set(zb,da?da[5]:1);var jdz=__jrrdv,dz=jdz[l]>0?jdz[0][s]("|"):null;a.set(usc,dz?dz[1
]:"direct");a.set(ucp,dz?dz[2]:"-");a.set(umd,dz?dz[3]:"none");a.set(uct,dz?dz[4]:"-");var jdb=__jrrdb
,db=jdb[l]>0?jdb[0][s]("."):null;a.set(cb,db?db[1]:0);a.set(tad,jwo()||"-");return !0},ge=function()
{var jdb=__jrrdb,db=jdb[l]>0?jdb[0][s]("."):null;return(db&&db.length==4)?db[1]*1:0},gd=function(a){var
 hrf=D.location.href,rfr=D.referrer,d=a.get(Dm),utsr=JDA.util.getParameter(hrf,"utm_source"),umz=[],z1
=a.get(usc),z2=a.get(ucp),z3=a.get(umd),z4=a.get(uct),mb=(__jrrdb.length==0);if(utsr){var camp=JDA.util
.getParameter(hrf,"utm_campaign"),medi=JDA.util.getParameter(hrf,"utm_medium"),term=JDA.util.getParameter
(hrf,"utm_term");umz[p](utsr);umz[p](camp||"-");umz[p](medi||"-");umz[p](term||"not set")}else{var rdomain
=rfr&&rfr[s]("/")[2],b=false;if(rdomain&&rdomain[ind](d)<0){for(var ss=a.get(se),i=0;i<ss.length;i++
){var e=ss[i][s](":");if(rdomain[ind](e[0][t]())>-1&&rfr[ind]((e[1]+"=")[t]())>-1){var reg=/jrad_([0-9
]{1,})/;var jrad=reg.exec(a.get(usc));if(jrad!=null){b=true;break}var f=bb(e[1][t]()),x=JDA.util.getParameter
(rfr,f);umz[p](e[0]);umz[p]("-");umz[p]("organic");umz[p](x||"not set");b=true;break}}if(!b){if(rdomain
[ind]("zol.com.cn")>-1){umz[p]("zol.com.cn");umz[p]("-");umz[p]("cpc");umz[p]("not set")}else{umz[p]
(rdomain);umz[p]("-");umz[p]("referral");umz[p]("-")}}}}if(umz[l]>0&&((umz[0]!=z1||umz[1]!=z2||umz[2
]!=z3)||(mb&&umz[2]==="referral"))){a.set(usc,umz[0]||"direct");a.set(ucp,umz[1]||"-");a.set(umd,umz
[2]||"none");a.set(uct,umz[3]||"-");ta(a)}else{if(mb){ta(a)}else{Rc(a)}}},Xc=function(a,b){var u=b.split
(".");a.set(wb,u[2]);a.set(xb,u[4]);a.set(yb,fa());a.m(zb);a.set(cb,1)},Wc=function(a){var b=a.get(Fa
);a.set(O,ud());a.set(wb,b);a.set(xb,b);a.set(yb,b);a.set(zb,1);a.set(cb,1)},Rc=function(a){a.m(cb)}
,pc=function(a){return[a.get(L),a.get(O)||"-",a.get(wb)||"-",a.get(xb)||"-",a.get(yb)||"-",a.get(zb)
||1][y](".")},qc=function(a){return[a.get(L),a.get(cb)||1,a.get(O)+"|"+a.get(zb)||1,a.get(yb)||a.get
(Fa)][y](".")},vc=function(a){return[a.get(L),a.get(usc)||D.domain,a.get(ucp)||"(direct)",a.get(umd)
||"direct",a.get(uct)||"-"][y]("|")},ta=function(a){var ma=__jrrda;ma.length==0?Wc(a):Xc(a,ma[0])};var
 ja=new lr(),zd=function(){this.a={};this.add=function(b,c){this.a[b]=c};this.get=function(b){return
 this.a[b]};this.toString=function(){return this.a[y]("&")}},Cd=function(a,b){function c(a,b){b&&d[p
](a+"="+b+";")}var d=[];c("__jrrda",pc(a));c("__jrrdv",vc(a));b.add("jdcc",d[y]("+"))},Ed=function(a
,b){b.add("jdac",a.get(Ca)),b.add("jduid",a.get(O)),b.add("jdsid",a.get(O)+"|"+a.get(zb)),b.add("jdje"
,a.get(je)),b.add("jdsc",a.get(cd)),b.add("jdsr",a.get(cs)),b.add("jdul",a.get(ml)),b.add("jdcs",a.get
(cr)),b.add("jddt",a.get(tl)||"-"),b.add("jdmr",aa(a.get(mr))),b.add("jdhn",a.get(tn)||"-"),b.add("jdfl"
,a.get(fl)),b.add("jdos",a.get(co)),b.add("jdbr",a.get(br)),b.add("jdbv",a.get(bv)),b.add("jdwb",a.get
(wb)),b.add("jdxb",a.get(xb)),b.add("jdyb",a.get(yb)),b.add("jdzb",a.get(zb)),b.add("jdcb",a.get(cb)
),b.add("jdusc",a.get(usc)||"direct"),b.add("jducp",a.get(ucp)||"-"),b.add("jdumd",a.get(umd)||"-"),b
.add("jduct",a.get(uct)||"-"),b.add("jdlt",typeof jdpts!="object"?0:jdpts._st==undefined?0:a.get(et)-jdpts
._st),b.add("jdtad",a.get(tad)),b.add("nav",a.get(nav)||"-")},Ad=function(a,b,tad,step){b.add("jdac"
,a.get(Ca)),b.add("jduid",a.get(O)),b.add("jdsid",a.get(O)+"|"+a.get(zb)),b.add("jdje","-"),b.add("jdsc"
,"-"),b.add("jdsr","-"),b.add("jdul","-"),b.add("jdcs","-"),b.add("jddt","-"),b.add("jdmr",aa(a.get(mr
))),b.add("jdhn","-"),b.add("jdfl","-"),b.add("jdos","-"),b.add("jdbr","-"),b.add("jdbv","-"),b.add("jdwb"
,"-"),b.add("jdxb","-"),b.add("jdyb","-"),b.add("jdzb",a.get(zb)),b.add("jdcb",step?(ge()+step):a.get
(cb)),b.add("jdusc","-"),b.add("jducp","-"),b.add("jdumd","-"),b.add("jduct","-"),b.add("jdlt",0),b.add
("jdtad",tad)},St=function(){gc(ja)&&gd(ja);jrgd(ja);var c=new zd(),d=ja.get(Dm);Ed(ja,c);__jrrda=pc
(ja);__jrrdb=qc(ja);__jrrdc=ja.get(L);__jrrdv=vc(ja);return c.a},Nt=function(){var c=new zd();Ed(ja,c
);return c.a},At=function(ad_data,step){var c=new zd();Ad(ja,c,ad_data,step);return c.a},join=function
(args){if(args instanceof Array){var argstring="";
for(var i=0,len=args.length;i<len;i++){argstring+=args[i]+((i==len-1)?"":"|||")}return argstring}return
 args};JDA.tracker={bloading:function(t1,t2,data){var cs=St()}};JDA.tracker.bloading("J","A",new Date
().getTime());$(document).bind("click",function(e){e=e||event;var da=document;var tag=e.srcElement||e
.target;var d=$(tag).attr("clstag");var jrmsc=$(tag).attr("jrmsc");if(jrmsc=="on"){var ctime=2*24*60
*60*1000;utils.setCookie("jrmclicknode",d,ctime)}var cls="";while(!d){tag=tag.parentNode;if(!tag||(tag
.nodeName=="BODY")){break}d=$(tag).attr("clstag")}if(d){var j=d.split("|"),k=j[1],t=j[2],s=j[3];if(tag
.nodeName=="IMG"){tag=tag.parentNode}var targetHref=$(tag).attr("href");if(targetHref==undefined||targetHref
.indexOf("javascript")!=-1){targetHref=""}else{if(targetHref.indexOf("http")==-1){targetHref=window.location
.host+targetHref}}var vs={page:t,location:s,tag:"Q",href:targetHref};service.req("www.130000",vs);cls
=t+"|"+s}});(function(){var me=Nt();var mejson={je:me.jdje,sc:me.jdsc,sr:me.jdsr,ul:me.jdul,cs:me.jdcs
,dt:me.jddt,hn:me.jdhn,fl:me.jdfl,os:me.jdos,br:me.jdbr,bv:me.jdbv,wb:me.jdwb,xb:me.jdxb,yb:me.jdyb,zb
:me.jdzb,cb:me.jdcb,usc:me.jdusc,ucp:me.jducp,umd:me.jdumd,uct:me.jduct,lt:me.jdlt,ct:new Date().getTime
(),tad:me.jdtad,nav:me.nav};service.visit();service.req("www.110000",mejson)})()})();
