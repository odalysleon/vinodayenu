<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:49:51
         compiled from "/srv/www/vinodayenu.com/www/themes/classic/templates/errors/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13208220755cae48dfef7c72-92511557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ee664f28e80c68cc9fc042df304b3fe902b414' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/errors/maintenance.tpl',
      1 => 1554200287,
      2 => 'file',
    ),
    'd8f83c140583a85d420983081bc53c5adfb2dc97' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1554200287,
      2 => 'file',
    ),
    '4ea79371738c0e4e1e6fab0fa3d02b50eac0626b' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/_partials/stylesheets.tpl',
      1 => 1554200287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13208220755cae48dfef7c72-92511557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae48e0074e11_39942576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae48e0074e11_39942576')) {function content_5cae48e0074e11_39942576($_smarty_tpl) {?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
      <title></title>
      <meta name="description" content="">
      <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
      <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '13208220755cae48dfef7c72-92511557');
content_5cae48e0025a89_68505919($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>
    

  </head>

  <body>

    <div id="layout-error">
      

  <section id="main">

    
      <header class="page-header">
        
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        

        
          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        

        
          <h1><?php echo smartyTranslate(array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h1>
        
      </header>
    

    
      <section id="content" class="page-content page-maintenance">
        
          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        
      </section>
    

    

    

  </section>


    </div>

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:49:52
         compiled from "/srv/www/vinodayenu.com/www/themes/classic/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cae48e0025a89_68505919')) {function content_5cae48e0025a89_68505919($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
