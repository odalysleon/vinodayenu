<?php /* Smarty version Smarty-3.1.19, created on 2019-04-11 11:02:55
         compiled from "/srv/www/vinodayenu.com/www/admin898yvnpu5/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765899875caf02bff3ead7-07637503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63dc9d08384ddaf3703af4584ce59ecfe50cd4cf' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/admin898yvnpu5/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1554200609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '765899875caf02bff3ead7-07637503',
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
  'unifunc' => 'content_5caf02c0009d28_92057914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caf02c0009d28_92057914')) {function content_5caf02c0009d28_92057914($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
