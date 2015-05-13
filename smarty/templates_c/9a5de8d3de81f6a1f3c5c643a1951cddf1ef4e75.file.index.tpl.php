<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 15:44:18
         compiled from "templates/admin/auth/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130752450554809a69463e30-41450150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a5de8d3de81f6a1f3c5c643a1951cddf1ef4e75' => 
    array (
      0 => 'templates/admin/auth/index.tpl',
      1 => 1417790650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130752450554809a69463e30-41450150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54809a694e42c0_94117194',
  'variables' => 
  array (
    'return' => 0,
    'username' => 0,
    'privileges' => 0,
    'hostname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54809a694e42c0_94117194')) {function content_54809a694e42c0_94117194($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['return']->value['status'])&&$_smarty_tpl->tpl_vars['return']->value['status']!='') {
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
<?php } else { ?>
<br /><a class="logout" href="https://<?php echo $_smarty_tpl->tpl_vars['hostname']->value;?>
/admin/auth/logout">Logout</a>
<?php }?>
<?php }} ?>
