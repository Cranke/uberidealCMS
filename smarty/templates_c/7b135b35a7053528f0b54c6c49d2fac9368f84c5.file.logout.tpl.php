<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 15:44:45
         compiled from "templates/admin/auth/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15715276305481c2b28830c0-79844841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b135b35a7053528f0b54c6c49d2fac9368f84c5' => 
    array (
      0 => 'templates/admin/auth/logout.tpl',
      1 => 1417790677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15715276305481c2b28830c0-79844841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5481c2b28a0943_09767406',
  'variables' => 
  array (
    'return' => 0,
    'username' => 0,
    'privileges' => 0,
    'hostname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481c2b28a0943_09767406')) {function content_5481c2b28a0943_09767406($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['return']->value['status'])&&$_smarty_tpl->tpl_vars['return']->value['status']!='') {
echo $_smarty_tpl->tpl_vars['return']->value['status'];?>
<br /><?php }?> Username:<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<br />Privileges:<?php echo $_smarty_tpl->tpl_vars['privileges']->value;?>

<?php if (!isset($_smarty_tpl->tpl_vars['username']->value)||$_smarty_tpl->tpl_vars['username']->value=='') {?>
	<form id="loginform" action="https://<?php echo $_smarty_tpl->tpl_vars['hostname']->value;?>
/admin/auth/index" method=POST>
	<input type=text name=uname><br />
	<input type=password name=pword><br />
	<input type=submit Value="Login">
	</form>
<?php }?>
<?php }} ?>
