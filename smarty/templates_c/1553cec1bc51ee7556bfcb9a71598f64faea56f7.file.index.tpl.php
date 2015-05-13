<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 18:31:16
         compiled from "templates/admin/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115959232354809a649fc588-59648256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1553cec1bc51ee7556bfcb9a71598f64faea56f7' => 
    array (
      0 => 'templates/admin/index/index.tpl',
      1 => 1417685798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115959232354809a649fc588-59648256',
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
  'unifunc' => 'content_54809a64a7b079_99652377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54809a64a7b079_99652377')) {function content_54809a64a7b079_99652377($_smarty_tpl) {?><b>ARGS:</b><br />
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
