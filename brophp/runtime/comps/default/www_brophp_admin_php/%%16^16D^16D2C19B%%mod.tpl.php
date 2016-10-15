<?php /* Smarty version 2.6.18, created on 2016-04-29 13:42:22
         compiled from cat/mod.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1>修改分类</h1>
<form action="<?php echo $this->_tpl_vars['url']; ?>
/update/" method="post">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
选择分类：<?php echo $this->_tpl_vars['select']; ?>
<br>
输入分类：<input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
"><br>
<input type="submit" value="修改">
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>