<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_page_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10586563645cae4762c88750-76914749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c82d88578663d88832a80eaeb3b62d5bd35de3b' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_page_category.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10586563645cae4762c88750-76914749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4762c91192_66219489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4762c91192_66219489')) {function content_5cae4762c91192_66219489($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <span style="display:none" class="cn_page_category"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<?php } ?>
<?php }} ?>
