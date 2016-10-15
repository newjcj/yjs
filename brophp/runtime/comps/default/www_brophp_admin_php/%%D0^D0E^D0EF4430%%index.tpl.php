<?php /* Smarty version 2.6.18, created on 2016-05-01 23:25:16
         compiled from mess/index.tpl */ ?>
<head>
    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/ajax3.0.js"></script>
</head>
<body onload="loadfun()">

    <!--<textarea rows=14 cols=110 id="mess">加载中。。。。</textarea><br> -->
   <div style="background:rgb(200,200,250);width:700px;height:300px;border:1px solid red;overflow:hidden" id="mess1"><div>加载中。。。。</div></div>
   <!-- <iframe style="width:500px;height:200px;" src="./mess/wone.tpl" id="mess" name="wone" ></iframe>-->
    <script>
        
        //window.open("./mess/wone.tpl","blank");
        //alert(typeof());
        //window.imess.document.bgColor="red";
        //body体加载后的动作
        function loadfun(){
            document.frm.content.focus();
            send();
        }
        var message=document.getElementById('mess1');
        function getmess(){
            Ajax().get("<?php echo $this->_tpl_vars['url']; ?>
/view/rand/"+Math.random(),function(data){
                message.childNodes[0].innerHTML=data;    
            });
        }
        function send(one){
            //alert(message.childNodes[0].innerHTMML);
            var user=document.frm.username.value;
            var con=document.frm.content.value;
            if(message.childNodes[0].offsetHeight>250){
                cmess();
            }
            //发送
            //alert(one);
            Ajax().post("<?php echo $this->_tpl_vars['url']; ?>
/save/rand/"+Math.random(),{username:user,content:con});
            setTimeout(getmess(),10);
            //getmess();
            document.frm.content.focus();
            document.frm.content.value='';
        }
        function cmess(){
            Ajax().post("<?php echo $this->_tpl_vars['url']; ?>
/del",{sub:'ok'});
           setTimeout(getmess(),500);
            document.frm.content.focus();
            document.frm.content.value='';
        }
    </script>
    <form name='frm'>
        用户名:<input style="margin-bottom:10px" type="text" name="username" value="<?php echo $_SESSION['name']; ?>
"/><br>
        发送内容:<textarea rows=4 cols=50 name="content"></textarea><br>
        <input onclick="send()" type="button" value="发送" />
    
    </form>
<form action="<?php echo $this->_tpl_vars['url']; ?>
/del" method="post">
<input onclick="cmess()" type="button" name="sub" value="清空"/>
<script>
    function tip(){
        setInterver(function(){
           // window.location="<?php echo $this->_tpl_vars['url']; ?>
/index";    
           alert(22);
         },1000);
        }
</script>
</form>
</body>
    
