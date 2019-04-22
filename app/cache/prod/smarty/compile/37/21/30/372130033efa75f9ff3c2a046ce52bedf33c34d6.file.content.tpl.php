<?php /* Smarty version Smarty-3.1.19, created on 2019-04-11 08:47:47
         compiled from "/srv/www/vinodayenu.com/www/admin898yvnpu5/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5406497025caee313821f45-30051099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372130033efa75f9ff3c2a046ce52bedf33c34d6' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/admin898yvnpu5/themes/default/template/content.tpl',
      1 => 1554200078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5406497025caee313821f45-30051099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5caee31382a978_57482707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caee31382a978_57482707')) {function content_5caee31382a978_57482707($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
