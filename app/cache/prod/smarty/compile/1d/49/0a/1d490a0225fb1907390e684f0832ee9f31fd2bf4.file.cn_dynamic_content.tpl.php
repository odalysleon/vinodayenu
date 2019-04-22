<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_dynamic_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16222286805cae47628d6cc4-20397767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d490a0225fb1907390e684f0832ee9f31fd2bf4' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/connectif/views/templates/hooks/cn_dynamic_content.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16222286805cae47628d6cc4-20397767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cn_banners' => 0,
    'cn_banner' => 0,
    'content_div_styles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae47628e7df3_87307253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae47628e7df3_87307253')) {function content_5cae47628e7df3_87307253($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['cn_banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cn_banner']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cn_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cn_banner']->key => $_smarty_tpl->tpl_vars['cn_banner']->value) {
$_smarty_tpl->tpl_vars['cn_banner']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cn_banner']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['cn_banner']->value->banner_is_active=="1") {?>
        <div class="cn_banner_placeholder" id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cn_banner']->value->banner_id,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" style="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['content_div_styles']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></div>
    <?php }?>
<?php } ?><?php }} ?>
