<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 15:23:12
         compiled from "templates/default/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145866358054806a3f336606-04058883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e805e8f9cfd1a3061a702972e640009fcdbd34a7' => 
    array (
      0 => 'templates/default/index/index.tpl',
      1 => 1417702908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145866358054806a3f336606-04058883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54806a3f3a42a6_76536086',
  'variables' => 
  array (
    'facebookapp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54806a3f3a42a6_76536086')) {function content_54806a3f3a42a6_76536086($_smarty_tpl) {?><div class="wrapper centered">
<a class="datenschutz" href="#">Datenschutzhinweise</a>
<br /><br />
</div>
<div class="popup centered"></div>
<div id="hintergrund"></div>
<?php if ($_smarty_tpl->tpl_vars['facebookapp']->value==1) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="//connect.facebook.net/en_US/all.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript">
    
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '123123123123123',
    });
    FB.Canvas.setAutoGrow();
    }
    
 <?php echo '</script'; ?>
> 
 <?php }?>
<?php }} ?>
