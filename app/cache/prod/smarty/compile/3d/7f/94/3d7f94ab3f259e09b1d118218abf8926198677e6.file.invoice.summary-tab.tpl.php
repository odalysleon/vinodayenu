<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 08:36:26
         compiled from "/srv/www/vinodayenu.com/www/pdf/invoice.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20810635845cb1836ae8e970-61590645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d7f94ab3f259e09b1d118218abf8926198677e6' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/pdf/invoice.summary-tab.tpl',
      1 => 1554199779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20810635845cb1836ae8e970-61590645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addresses' => 0,
    'title' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb1836aec6414_11285980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb1836aec6414_11285980')) {function content_5cb1836aec6414_11285980($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Invoice Number','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Invoice Date','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order date','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'VAT Number','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['title']->value,'html','UTF-8');?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->invoice_date,'full'=>0),$_smarty_tpl);?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<td class="center small white">
				<?php echo $_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number;?>

			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
