<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 08:36:27
         compiled from "/srv/www/vinodayenu.com/www/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1690424195cb1836b094771-77911498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddddbd7ac5d134438465a6000c356794f9466aa' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/pdf/invoice.note-tab.tpl',
      1 => 1554199779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1690424195cb1836b094771-77911498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb1836b0a46e1_23594443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb1836b0a46e1_23594443')) {function content_5cb1836b0a46e1_23594443($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
