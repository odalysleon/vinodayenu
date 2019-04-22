<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7405602585cae4762caf135-75907410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd32390b840b856140d2e51b5dee63e794e4caf8' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_cart.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7405602585cae4762caf135-75907410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart_exist' => 0,
    'cart_id' => 0,
    'total_quantity' => 0,
    'total_price' => 0,
    'products' => 0,
    'product' => 0,
    'module_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4762cc93c2_50430699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4762cc93c2_50430699')) {function content_5cae4762cc93c2_50430699($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart_exist']->value) {?>
    <div class="cn_cart" style="display:none">
        <span class="cart_id"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cart_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="total_quantity"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['total_quantity']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="total_price"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['total_price']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>

        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <div class="product_basket_item">
                <span class="quantity"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['quantity'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="price"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php } ?>

    </div>
<?php }?><?php }} ?>
