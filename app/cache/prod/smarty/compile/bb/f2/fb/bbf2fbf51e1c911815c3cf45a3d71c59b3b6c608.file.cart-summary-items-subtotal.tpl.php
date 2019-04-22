<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 07:34:11
         compiled from "/srv/www/vinodayenu.com/www/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15056054595cb174d3076129-62908845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf2fbf51e1c911815c3cf45a3d71c59b3b6c608' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1554200523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15056054595cb174d3076129-62908845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb174d307f498_15119937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb174d307f498_15119937')) {function content_5cb174d307f498_15119937($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
