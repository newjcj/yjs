<?php /* Smarty version 2.6.18, created on 2016-04-29 13:37:43
         compiled from goods/add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "/public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $this->_tpl_vars['url']; ?>
/insert"  method="post" enctype="multipart/form-data" >
    分类：<?php echo $this->_tpl_vars['select']; ?>
<br>
    name:<input type="text" name="name" /><br>
    price:<input type="text" name='price' /><br>
    num:<input type="text" name="num"></br>
    img:<input type="file" name='uppic'></br>
    desn:<textarea name='desn' cols=40 rows=8 ></textarea><br>
    <input type="submit" name="sub" value="添加">
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "/public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>