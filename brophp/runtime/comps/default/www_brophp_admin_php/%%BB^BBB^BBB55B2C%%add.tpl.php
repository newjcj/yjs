<?php /* Smarty version 2.6.18, created on 2016-04-29 13:42:02
         compiled from cat/add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $this->_tpl_vars['url']; ?>
/insert" method="post">
选择分类：<?php echo $this->_tpl_vars['select']; ?>
<br>
分类名称：<input type="text" name="name"><br>
<input type="submit" value="添加" name="sub">
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>