<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 16:52:34
         compiled from "templates/post/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199442413454808342c9da21-04342586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16484b5449a73260e9ca7b50cb153352127ee30' => 
    array (
      0 => 'templates/post/index/index.tpl',
      1 => 1417685969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199442413454808342c9da21-04342586',
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
  'unifunc' => 'content_54808342cb1bc7_61838743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54808342cb1bc7_61838743')) {function content_54808342cb1bc7_61838743($_smarty_tpl) {?><b>ARGS:</b><br />
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
