<?php /* Smarty version 2.6.18, created on 2016-04-29 13:36:36
         compiled from goods/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1>搜索商品</h1>
<script>
    
    function sersend(){
        //alert(11);
    
        var names=document.frm1.name.value;
        var cids=document.frm1.cid.value;
        var minprices=document.frm1.minprice.value;
        var maxprices=document.frm1.maxprice.value;
        Ajax().post('<?php echo $this->_tpl_vars['url']; ?>
/gmes',{name:names,minprice:minprices,cid:cids,maxprice:maxprices},function(data){
            msgobj.innerHTML=data;
        });
    }
</script>
<form action="" method="post" name="frm1">
商品分类:<?php echo $this->_tpl_vars['select']; ?>
<br>
商品名称：<input type="text" size=15 name="name" /><br>
商品价格：<input type="text" size=5 name="minprice" />
            -
          <input type="text" size=5 name="maxprice" /><br>
<input onclick="sersend()"  type="button" value="搜&nbsp;|&nbsp;索" />
<div id="getmsg">加载中。。</div>
<script> var msgobj=document.getElementById('getmsg');</script>

</form>

<form action='<?php echo $this->_tpl_vars['url']; ?>
/del' method="post" enctype="multipart/form-data">


<script>
    
   // var msgobj=document.getElementById('getmsg');
    function send(url){
        Ajax().get(url,function(data){
            msgobj.innerHTML=data;
        });
    }

   send("<?php echo $this->_tpl_vars['url']; ?>
/gmes");
</script>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>