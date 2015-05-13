<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 16:50:25
         compiled from "templates/user/index/showall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:622699245548082c18dbad5-84203001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35026993afa16eaf75be9ddb5f8fa39711be19b4' => 
    array (
      0 => 'templates/user/index/showall.tpl',
      1 => 1417685966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622699245548082c18dbad5-84203001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548082c18f7819_30939348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548082c18f7819_30939348')) {function content_548082c18f7819_30939348($_smarty_tpl) {?><div class="descriptorkey">Usernames:</div><br />
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
<div class="descriptorvalue" item="user" itemid="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><a href="/user/index/show/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></div>
<?php } ?>
<?php }} ?>
