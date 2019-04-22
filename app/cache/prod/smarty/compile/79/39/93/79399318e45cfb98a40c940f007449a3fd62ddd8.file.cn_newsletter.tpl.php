<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:31
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20268057015cae476300aa64-33390341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79399318e45cfb98a40c940f007449a3fd62ddd8' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_newsletter.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20268057015cae476300aa64-33390341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_newsletter_subscribe' => 0,
    'newsletter_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4763012bd0_04901921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4763012bd0_04901921')) {function content_5cae4763012bd0_04901921($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_newsletter_subscribe']->value) {?>
<div class="cn_newsletter_subscribe" style="display:none">
    <span class="email"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['newsletter_email']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }?>
<?php }} ?>
