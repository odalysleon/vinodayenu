<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:31
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912710565cae4763019766-08947487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c208b260143b7d82dc01a9db0fb82917ee97f5ed' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_search_results.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912710565cae4763019766-08947487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_done' => 0,
    'search_term' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae47630282a1_95619703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae47630282a1_95619703')) {function content_5cae47630282a1_95619703($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['search_done']->value) {?>
<div class="cn_search" style="display:none">
    <span class="search_text"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['search_term']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }?><?php }} ?>
