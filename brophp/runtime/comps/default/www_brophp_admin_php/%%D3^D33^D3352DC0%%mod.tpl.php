<?php /* Smarty version 2.6.18, created on 2016-04-29 13:38:43
         compiled from goods/mod.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "/public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1>修改商品</h1>
<form action="<?php echo $this->_tpl_vars['url']; ?>
/update/img/<?php echo $this->_tpl_vars['pic']; ?>
"  method="post" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
    商品分类：<?php echo $this->_tpl_vars['select']; ?>
<br>
    name:<input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" /><br>
    price:<input type="text" name='price' value="<?php echo $this->_tpl_vars['price']; ?>
" /><br>
    num:<input type="text" name="num" <?php echo $this->_tpl_vars['num']; ?>
></br>
    img:<input type="file" name='uppic'></br>
    desn:<textarea name='desn' cols=40 rows=8 value="<?php echo $this->_tpl_vars['desn']; ?>
" ></textarea><br>
    <input type="submit" name="sub" value="修改商品">
</form>
<img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/sm_<?php echo $this->_tpl_vars['pic']; ?>
"/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "/public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>