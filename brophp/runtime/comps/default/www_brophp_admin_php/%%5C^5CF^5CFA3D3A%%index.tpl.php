<?php /* Smarty version 2.6.18, created on 2016-04-29 13:42:04
         compiled from cat/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1>分类管理</h1>
<ul>
    <?php $_from = $this->_tpl_vars['select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sel']):
?>
        
        <li style="list-style:none"> <?php echo $this->_tpl_vars['space']; ?>
|-<?php echo $this->_tpl_vars['sel']['name']; ?>
</li>&nbsp;&nbsp;
        <a href="<?php echo $this->_tpl_vars['url']; ?>
/mod/id/<?php echo $this->_tpl_vars['sel']['id']; ?>
">修改</a>&nbsp;&nbsp;&nbsp;
        <a onclick="return confirm('确定删除分类吗？')" href="<?php echo $this->_tpl_vars['url']; ?>
/del/id/<?php echo $this->_tpl_vars['sel']['id']; ?>
">删除分类</a>
    <?php endforeach; endif; unset($_from); ?>
</ul>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>