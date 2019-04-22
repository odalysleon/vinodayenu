<?php /* Smarty version Smarty-3.1.19, created on 2019-04-11 09:01:34
         compiled from "/srv/www/vinodayenu.com/www/admin898yvnpu5/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9506976965caee64ee7f3a8-76044184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf8836cf4537a8d49ec7a01b1e4237aaa191e65b' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/admin898yvnpu5/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1554200608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9506976965caee64ee7f3a8-76044184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5caee64ee89f16_09894190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caee64ee89f16_09894190')) {function content_5caee64ee89f16_09894190($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
