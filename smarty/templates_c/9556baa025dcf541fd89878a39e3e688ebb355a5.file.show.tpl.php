<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-04 17:18:36
         compiled from "templates/post/index/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1515985911548083a66e5018-58639524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9556baa025dcf541fd89878a39e3e688ebb355a5' => 
    array (
      0 => 'templates/post/index/show.tpl',
      1 => 1417709909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1515985911548083a66e5018-58639524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548083a66f6239_42275094',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548083a66f6239_42275094')) {function content_548083a66f6239_42275094($_smarty_tpl) {?><div class="itemdiv" item="post" itemid="<?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['id'];?>
">
<div class="descriptorkey floatleft">Titel:</div><div class="descriptorvalue floatleft" contenteditable="true" rel="posts.<?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['id'];?>
.title"><?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['title'];?>
</div>
<div class="clear"></div>
<div class="descriptorkey floatleft">Subtitel:</div><div class="descriptorvalue floatleft" contenteditable="true" rel="posts.<?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['id'];?>
.subtitle"><?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['subtitle'];?>
</div>
<div class="clear"></div>
<div class="descriptorkey floatleft">Excerpt:</div><div class="descriptorvalue floatleft" contenteditable="true" rel="posts.<?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['id'];?>
.excerpt"><?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['excerpt'];?>
</div>
<div class="clear"></div>
<div class="descriptorkey floatleft">Content:</div><div class="descriptorvalue floatleft" contenteditable="true" rel="posts.<?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['id'];?>
.content"><?php echo $_smarty_tpl->tpl_vars['return']->value['posts']['content'];?>
</div>
<div class="clear"></div>
</div>

<?php }} ?>
