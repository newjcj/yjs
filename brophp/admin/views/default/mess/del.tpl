<form action="<{$url}>/del" method="post">
清空留言：<input onclick="tip()" type="submit" name="sub" value="清空">
<script>
    function tip(){
        setInterver(function(){
           // window.location="<{$url}>/index";    
           alert(22);
         },1000);
        }
</script>
</form>
