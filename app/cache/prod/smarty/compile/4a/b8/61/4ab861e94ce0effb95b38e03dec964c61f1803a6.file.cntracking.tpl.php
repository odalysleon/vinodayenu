<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:43:30
         compiled from "modules/connectif/views/templates/hooks/cntracking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14694170315cae47628ba116-86834827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab861e94ce0effb95b38e03dec964c61f1803a6' => 
    array (
      0 => 'modules/connectif/views/templates/hooks/cntracking.tpl',
      1 => 1554200503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14694170315cae47628ba116-86834827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_templates' => 0,
    'client_id' => 0,
    'cdn_client_script_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae47628cfd09_72381592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae47628cfd09_72381592')) {function content_5cae47628cfd09_72381592($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_templates']->value)."hooks/cn_dynamic_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Connectif tracking code -->
<script type="text/javascript" async>
    var _cnid = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
    (function(w, r, a, cn, s ) {
        
        w['ConnectifObject'] = r;
        w[r] = w[r] || function () {( w[r].q = w[r].q || [] ).push(arguments)};
        cn = document.createElement('script'); cn.type = 'text/javascript'; cn.async = true; cn.src = a; cn.id = '__cn_client_script_' + _cnid;
        s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(cn, s);
        
    })(window, 'cn', '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cdn_client_script_path']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
' + '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['client_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');
</script>
<!-- end Connectif tracking code --><?php }} ?>
