<?php /* Smarty version Smarty-3.1.19, created on 2019-04-11 08:47:46
         compiled from "/srv/www/vinodayenu.com/www/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6439403355cae47628026e8-47175591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c4170eb625aa5fbdeaa67051d54d2d30dd1fae' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl',
      1 => 1554200510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6439403355cae47628026e8-47175591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4762889a19_29802389',
  'variables' => 
  array (
    'gaCrossdomainEnabled' => 0,
    'gaAccountId' => 0,
    'shops' => 0,
    'shop' => 0,
    'currentShopId' => 0,
    'useSecureMode' => 0,
    'userId' => 0,
    'backOffice' => 0,
    'gaAnonymizeEnabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4762889a19_29802389')) {function content_5cae4762889a19_29802389($_smarty_tpl) {?>


<script type="text/javascript">
	(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    <?php if ($_smarty_tpl->tpl_vars['gaCrossdomainEnabled']->value) {?>
        ga('create', '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8');?>
', 'auto', {'allowLinker': true});
        ga('require', 'linker');
        ga('linker:autoLink', [
        <?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['shop']->value['id_shop']!=$_smarty_tpl->tpl_vars['currentShopId']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['useSecureMode']->value) {?>'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop']->value['domain_ssl'],'htmlall','UTF-8');?>
'<?php } else { ?>'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop']->value['domain'],'htmlall','UTF-8');?>
'<?php }?>,
            <?php }?>
        <?php } ?>
        ]);
    <?php } else { ?>
        ga('create', '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8');?>
', 'auto');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['userId']->value&&!$_smarty_tpl->tpl_vars['backOffice']->value) {?>
        ga('set', 'userId', '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['userId']->value,'htmlall','UTF-8');?>
');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gaAnonymizeEnabled']->value) {?>
        ga('set', 'anonymizeIp', true);
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['backOffice']->value) {?>
        ga('set', 'nonInteraction', true);
    <?php }?>

    ga('require', 'ec');
</script>

<?php }} ?>
