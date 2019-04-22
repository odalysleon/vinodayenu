<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 08:35:53
         compiled from "modules/connectif/views/templates/hooks/cn_purchase.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197851375cb183492ee7b4-82176397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02ac05f67ee4a3dc88606fe7a11a94841ce9b47e' => 
    array (
      0 => 'modules/connectif/views/templates/hooks/cn_purchase.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197851375cb183492ee7b4-82176397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'purchase_done' => 0,
    'purchase_id' => 0,
    'purchase_date' => 0,
    'payment_method' => 0,
    'purchase_cart_id' => 0,
    'purchase_total_quantity' => 0,
    'purchase_total_price' => 0,
    'purchase_products' => 0,
    'product' => 0,
    'category' => 0,
    'productId' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb1834938c2c6_10811292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb1834938c2c6_10811292')) {function content_5cb1834938c2c6_10811292($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['purchase_done']->value) {?>
<div class="cn_purchase " style="display:none">
    <span class="purchase_id"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['purchase_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="purchase_date"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['purchase_date']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="payment_method"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['payment_method']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="cart_id"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['purchase_cart_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="total_quantity"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['purchase_total_quantity']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="total_price"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['purchase_total_price']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>

    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchase_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="product_basket_item">
            <span class="quantity"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['quantity'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="price"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
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
            <?php } ?>
        </div>
    <?php } ?>
</div>
<?php }?>
<?php }} ?>
