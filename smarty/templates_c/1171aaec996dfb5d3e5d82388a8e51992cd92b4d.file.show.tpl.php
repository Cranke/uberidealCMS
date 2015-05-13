<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 16:50:32
         compiled from "templates/user/index/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1675559807548082c87a5bf9-84368406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1171aaec996dfb5d3e5d82388a8e51992cd92b4d' => 
    array (
      0 => 'templates/user/index/show.tpl',
      1 => 1417685966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675559807548082c87a5bf9-84368406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548082c87b6d66_21854432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548082c87b6d66_21854432')) {function content_548082c87b6d66_21854432($_smarty_tpl) {?><div class="itemdiv" item="user" itemid="<?php echo $_smarty_tpl->tpl_vars['return']->value['user']['id'];?>
">
<div class="descriptorkey floatleft">Username:</div><div class="descriptorvalue floatleft"><?php echo $_smarty_tpl->tpl_vars['return']->value['user']['username'];?>
</div>
<div class="clear"></div>
<div class="descriptorkey floatleft">Full Name:</div><div class="descriptorvalue floatleft"><?php echo $_smarty_tpl->tpl_vars['return']->value['user']['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['return']->value['user']['lastname'];?>
</div>
</div>

<?php }} ?>
