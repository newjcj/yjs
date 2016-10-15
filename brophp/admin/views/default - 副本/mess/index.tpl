<html>
<head>
    <title>留言板</title>
    <script src="<{$public}>/js/ajax3.0.js"></script>
</head>
<body>
    <div id="mess">加载中。。。。</div><br>
    <script>
        var message=document.getElementById('mess');
        function getmess(){
            
            Ajax().get('<{$url}>/view/'+Math.random(),function(data){
                message.innerHTML=data;    
            });
        }
        function send(){
            var user=document.frm.username.value;
            var con=document.frm.content.value;
            //发送
            Ajax().post("<{$url}>/save",{username:user,content:con});
            getmess();
        }
    </script>
    <form name='frm'>
        username:<input style="margin-bottom:10px" type="text" name="username" /><br>
        content:<textarea rows=4 cols=50 name="content"></textarea><br>
        <input onclick="send()" type="button" value="发送" />
    
    </form>
</body>
</html>
