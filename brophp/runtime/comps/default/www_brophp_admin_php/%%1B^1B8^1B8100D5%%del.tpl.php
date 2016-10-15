<?php /* Smarty version 2.6.18, created on 2016-04-28 11:44:52
         compiled from mess/del.tpl */ ?>
<form action="<?php echo $this->_tpl_vars['url']; ?>
/del" method="post">
清空留言：<input onclick="tip()" type="submit" name="sub" value="清空">
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