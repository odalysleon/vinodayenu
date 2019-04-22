<?php /* Smarty version Smarty-3.1.19, created on 2019-04-11 08:47:27
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4094213345caee2ff9f9110-54578421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e644194ec0079ece8edf4723b92cf6bc1592334' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_product.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4094213345caee2ff9f9110-54578421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'category' => 0,
    'productId' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5caee2ffa85191_57625537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caee2ffa85191_57625537')) {function content_5caee2ffa85191_57625537($_smarty_tpl) {?>
<span class="url"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['url'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="product_id"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['product_id'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="name"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="description"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['description'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="image_url"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['image_url'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="unit_price"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['unit_price'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="availability"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['availability'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="brand"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['brand'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="unit_price_original"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['unit_price_original'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="unit_price_without_vat"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['unit_price_without_vat'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="discounted_percentage"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['discounted_percentage'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<span class="discounted_amount"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['discounted_amount'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>





<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <span class="category"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['productId'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productId']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['relatedProductsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productId']->key => $_smarty_tpl->tpl_vars['productId']->value) {
$_smarty_tpl->tpl_vars['productId']->_loop = true;
?>
    <span class="related_external_product_id"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['productId']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['tagsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
    <span class="tag"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
<?php } ?><?php }} ?>
