<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 07:34:17
         compiled from "module:paypal/views/templates/front/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14559839235cb174d9185898-01951342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffea87e3807e697178ee8347672b825b80d76d45' => 
    array (
      0 => 'module:paypal/views/templates/front/payment_infos.tpl',
      1 => 1554200506,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '14559839235cb174d9185898-01951342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb174d9193012_70364351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb174d9193012_70364351')) {function content_5cb174d9193012_70364351($_smarty_tpl) {?>

<p><?php echo smartyTranslate(array('s'=>'Benefit from many PayPal advantages such as :','mod'=>'paypal'),$_smarty_tpl);?>
</p>
<p><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/protected.png" style="height: 43px; padding-right: 10px;"><?php echo smartyTranslate(array('s'=>'Your orders are protected','mod'=>'paypal'),$_smarty_tpl);?>
*</p>
<p><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/refund.png" style=" height: 43px; padding-right: 10px;"><?php echo smartyTranslate(array('s'=>'Return shipping refunded','mod'=>'paypal'),$_smarty_tpl);?>
*</p>
<p><i><?php echo smartyTranslate(array('s'=>'* See conditions on PayPal website','mod'=>'paypal'),$_smarty_tpl);?>
</i></p><?php }} ?>
