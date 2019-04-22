<?php /* Smarty version Smarty-3.1.19, created on 2019-04-11 08:48:18
         compiled from "modules/connectif/views/templates/hooks/cn_footer_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5962653315caee3322459f6-84034487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0508b10839ff0fcc7610aaf9af3119a977e454' => 
    array (
      0 => 'modules/connectif/views/templates/hooks/cn_footer_product.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5962653315caee3322459f6-84034487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5caee3322523e3_08952174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caee3322523e3_08952174')) {function content_5caee3322523e3_08952174($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_dynamic_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cn_product_visited" style="display:none">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
