<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 16:00:58
         compiled from "templates/default/topper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51815315654806a3f3333c0-78873431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf1716c379942ddcb54a673052a0c88dddc0ac43' => 
    array (
      0 => 'templates/default/topper.tpl',
      1 => 1417791657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51815315654806a3f3333c0-78873431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54806a3f333948_66006993',
  'variables' => 
  array (
    'return' => 0,
    'username' => 0,
    'privileges' => 0,
    'hostname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54806a3f333948_66006993')) {function content_54806a3f333948_66006993($_smarty_tpl) {?><div class=userstatus>
<?php if (isset($_smarty_tpl->tpl_vars['return']->value['status'])&&$_smarty_tpl->tpl_vars['return']->value['status']!='') {
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
</div>
<?php }} ?>
