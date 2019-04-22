<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "modules/connectif/views/templates/hooks/cn_footer_hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18373516235cae4762f347e2-03744328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0eee3bcd41bbba18047adda8ec08136203101cd' => 
    array (
      0 => 'modules/connectif/views/templates/hooks/cn_footer_hook.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18373516235cae4762f347e2-03744328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae47630035c9_51803228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae47630035c9_51803228')) {function content_5cae47630035c9_51803228($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_dynamic_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_newsletter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_search_results.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
