<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 18:48:29
         compiled from "templates/admin/ajax/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149034740354809e6d5d6a73-67778343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fb04e82b47fd2818e2750758f2f62468f084dd' => 
    array (
      0 => 'templates/admin/ajax/post.tpl',
      1 => 1417685963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149034740354809e6d5d6a73-67778343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54809e6d5e36d9_18245291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54809e6d5e36d9_18245291')) {function content_54809e6d5e36d9_18245291($_smarty_tpl) {?><input type=text size=51 name=title value="<?php echo $_smarty_tpl->tpl_vars['return']->value['title'];?>
"><br />
<input type=text size=51 name=subtitle value="<?php echo $_smarty_tpl->tpl_vars['return']->value['subtitle'];?>
"><br />
<textarea rows=5 cols=70 type=text name=excerpt><?php echo $_smarty_tpl->tpl_vars['return']->value['subtitle'];?>
</textarea><br />
<textarea rows=15 cols=70 type=text name=content><?php echo $_smarty_tpl->tpl_vars['return']->value['content'];?>
</textarea>

<?php }} ?>
