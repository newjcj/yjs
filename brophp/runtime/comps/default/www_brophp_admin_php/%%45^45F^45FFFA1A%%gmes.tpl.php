<?php /* Smarty version 2.6.18, created on 2016-04-29 13:36:36
         compiled from goods/gmes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'goods/gmes.tpl', 12, false),)), $this); ?>
<table width="900px" align="center" border='1px'>
    <tr><th>&nbsp;</th><th>id</th><th>name</th><th>图片</th><th>price</th><th>num</th><th>ptime</th><th>添加&nbsp;/&nbsp;删除</th>
    </tr>
    <?php $_from = $this->_tpl_vars['good']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['goods']):
?>
        <tr align='center'>
            <td><input type='checkbox'  name='id[]' value="<?php echo $this->_tpl_vars['goods']['id']; ?>
" /></td>
            <td><?php echo $this->_tpl_vars['goods']['id']; ?>
</td>
            <td><?php echo $this->_tpl_vars['goods']['name']; ?>
</td>
            <td><img width=100 src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/sm_<?php echo $this->_tpl_vars['goods']['pic']; ?>
"></td>
            <td style="color:red">￥<?php echo $this->_tpl_vars['goods']['price']; ?>
元</td>
            <td><?php echo $this->_tpl_vars['goods']['num']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['goods']['ptime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d日 %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d日 %H:%M:%S")); ?>
</td>
            <td><a href="<?php echo $this->_tpl_vars['url']; ?>
/mod/id/<?php echo $this->_tpl_vars['goods']['id']; ?>
" >修改</a>&nbsp;<a onclick="return confirm('你确定删除吗')" href="<?php echo $this->_tpl_vars['url']; ?>
/del/id/<?php echo $this->_tpl_vars['goods']['id']; ?>
/page/<?php echo $this->_tpl_vars['pag']; ?>
">删除</a></td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
        
        <tr align='right'>
            <td cols='7'>
            <td>
                <input onclick="return confirm('你确定删除吗？')" type="submit" name='del' value='删除'>&nbsp;
                <a href="<?php echo $this->_tpl_vars['url']; ?>
/add">添加</a>
            </td>
            <td colspan=6 ><?php echo $this->_tpl_vars['page']; ?>
</td>
        </tr>
        
</table>