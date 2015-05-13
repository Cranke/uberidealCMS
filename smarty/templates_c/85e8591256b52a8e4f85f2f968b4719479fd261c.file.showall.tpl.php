<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 16:03:11
         compiled from "templates/post/index/showall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143062226954808342bc4475-55445024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e8591256b52a8e4f85f2f968b4719479fd261c' => 
    array (
      0 => 'templates/post/index/showall.tpl',
      1 => 1417791789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143062226954808342bc4475-55445024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54808342bd6fd8_59800696',
  'variables' => 
  array (
    'return' => 0,
    'singlepost' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54808342bd6fd8_59800696')) {function content_54808342bd6fd8_59800696($_smarty_tpl) {?><div class="descriptorkey">Posts:</div><br />
<?php  $_smarty_tpl->tpl_vars['singlepost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['singlepost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['singlepost']->key => $_smarty_tpl->tpl_vars['singlepost']->value) {
$_smarty_tpl->tpl_vars['singlepost']->_loop = true;
?>
<div class="descriptorvalue floatleft"><a href="/post/index/show/<?php echo $_smarty_tpl->tpl_vars['singlepost']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['singlepost']->value['title'];?>
</a></div>
<div class="descriptorvalue floatleft" item="post" itemid="<?php echo $_smarty_tpl->tpl_vars['singlepost']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['singlepost']->value['excerpt'];?>
</div>
<div class="clear"></div>
<?php } ?>

<?php }} ?>
