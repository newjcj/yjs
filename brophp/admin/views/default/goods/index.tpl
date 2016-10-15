<{include file="./public/header.tpl"}>

<h1>搜索商品</h1>
<script>
    
    function sersend(){
        //alert(11);
    
        var names=document.frm1.name.value;
        var cids=document.frm1.cid.value;
        var minprices=document.frm1.minprice.value;
        var maxprices=document.frm1.maxprice.value;
        Ajax().post('<{$url}>/gmes',{name:names,minprice:minprices,cid:cids,maxprice:maxprices},function(data){
            msgobj.innerHTML=data;
        });
    }
</script>
<form action="" method="post" name="frm1">
商品分类:<{$select}><br>
商品名称：<input type="text" size=15 name="name" /><br>
商品价格：<input type="text" size=5 name="minprice" />
            -
          <input type="text" size=5 name="maxprice" /><br>
<input onclick="sersend()"  type="button" value="搜&nbsp;|&nbsp;索" />
<div id="getmsg">加载中。。</div>
<script> var msgobj=document.getElementById('getmsg');</script>

</form>

<form action='<{$url}>/del' method="post" enctype="multipart/form-data">


<script>
    
   // var msgobj=document.getElementById('getmsg');
    function send(url){
        Ajax().get(url,function(data){
            msgobj.innerHTML=data;
        });
    }

   send("<{$url}>/gmes");
</script>
</form>

<{include file="./public/footer.tpl"}>
