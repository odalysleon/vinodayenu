<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_client_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10890691335cae4762c5b1a9-65288787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a629e8537e1098097d7d7154b64f9ee7019e835' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_client_info.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10890691335cae4762c5b1a9-65288787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_email' => 0,
    'client_name' => 0,
    'client_surname' => 0,
    'client_birthday' => 0,
    'client_email_status' => 0,
    'client_extended_properties' => 0,
    'extended_prop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4762c7f3c6_69845182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4762c7f3c6_69845182')) {function content_5cae4762c7f3c6_69845182($_smarty_tpl) {?>
<div class="cn_client_info" style="display:none">
    <span class="primary_key"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_email']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="_name"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_name']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="_surname"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_surname']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="_birthdate"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_birthday']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="_newsletter_subscription_status"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_email_status']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <?php  $_smarty_tpl->tpl_vars['extended_prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extended_prop']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['client_extended_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extended_prop']->key => $_smarty_tpl->tpl_vars['extended_prop']->value) {
$_smarty_tpl->tpl_vars['extended_prop']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['extended_prop']->key;
?>
            <span class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['extended_prop']->value["id"],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['extended_prop']->value["value"],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <?php } ?>
</div><?php }} ?>
