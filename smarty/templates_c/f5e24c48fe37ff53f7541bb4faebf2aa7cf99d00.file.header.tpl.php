<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 17:42:00
         compiled from "templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85589110654806a3f31f980-35262912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e24c48fe37ff53f7541bb4faebf2aa7cf99d00' => 
    array (
      0 => 'templates/default/header.tpl',
      1 => 1417711315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85589110654806a3f31f980-35262912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54806a3f3312d4_50705187',
  'variables' => 
  array (
    'return' => 0,
    'basepath' => 0,
    'privileges' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54806a3f3312d4_50705187')) {function content_54806a3f3312d4_50705187($_smarty_tpl) {?><html>
<head>
<title><?php if (isset($_smarty_tpl->tpl_vars['return']->value['sitetitle'])) {
echo $_smarty_tpl->tpl_vars['return']->value['sitetitle'];
}?></title>
<link href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/css/all.css" type="text/css" rel="stylesheet"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/css/admin-ajax.css" type="text/css" rel="stylesheet"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/js/all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/js/admin-ajax.js"><?php echo '</script'; ?>
>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<?php echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['privileges']->value=="admin") {?>
editor="yes";
<?php } else { ?>
editor="no";
<?php }?>
<?php echo '</script'; ?>
>
</head>
<body>
<div class="contentrow">

<?php echo $_smarty_tpl->getSubTemplate ("default/topper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("default/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
