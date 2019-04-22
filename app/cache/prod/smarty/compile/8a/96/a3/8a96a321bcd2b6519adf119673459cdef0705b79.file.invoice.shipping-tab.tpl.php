<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 08:36:27
         compiled from "/srv/www/vinodayenu.com/www/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2191890865cb1836b0fb072-13951025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a96a321bcd2b6519adf119673459cdef0705b79' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/pdf/invoice.shipping-tab.tpl',
      1 => 1554199779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2191890865cb1836b0fb072-13951025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb1836b101a37_71420310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb1836b101a37_71420310')) {function content_5cb1836b101a37_71420310($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
