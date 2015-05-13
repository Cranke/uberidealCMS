<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 16:50:11
         compiled from "templates/user/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2136475621548082b3d15152-71481382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ecb539bd97bfb41508012c8f6aa1fa3c92ac2c' => 
    array (
      0 => 'templates/user/index/index.tpl',
      1 => 1417685967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2136475621548082b3d15152-71481382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'args' => 0,
    'schluessel' => 0,
    'wert' => 0,
    'computed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548082b3e8bcf3_71588825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548082b3e8bcf3_71588825')) {function content_548082b3e8bcf3_71588825($_smarty_tpl) {?><b>ARGS:</b><br />
<?php  $_smarty_tpl->tpl_vars['wert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wert']->_loop = false;
 $_smarty_tpl->tpl_vars['schluessel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['args']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wert']->key => $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->_loop = true;
 $_smarty_tpl->tpl_vars['schluessel']->value = $_smarty_tpl->tpl_vars['wert']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['schluessel']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['wert']->value;?>
<br />
<?php } ?>
<br />
<b>COMPUTED:</b><br />
<?php  $_smarty_tpl->tpl_vars['wert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wert']->_loop = false;
 $_smarty_tpl->tpl_vars['schluessel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['computed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wert']->key => $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->_loop = true;
 $_smarty_tpl->tpl_vars['schluessel']->value = $_smarty_tpl->tpl_vars['wert']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['schluessel']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['wert']->value;?>
<br />
<?php } ?>
<br />

<?php }} ?>
