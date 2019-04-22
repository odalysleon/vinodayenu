<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "modules/connectif/views/templates/hooks/cn_top_hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19874219625cae4762c45290-78144924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c59977e4e77a9fb06cd2c5731de2e2af292049c4' => 
    array (
      0 => 'modules/connectif/views/templates/hooks/cn_top_hook.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19874219625cae4762c45290-78144924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4762c546e0_61447098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4762c546e0_61447098')) {function content_5cae4762c546e0_61447098($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_client_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_page_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_account_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_account_auth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
