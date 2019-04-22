<?php /* Smarty version Smarty-3.1.19, created on 2019-04-13 07:53:09
         compiled from "/srv/www/vinodayenu.com/www/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2741183575cb17945d394c2-46617214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d34a3191a03d228105e21808cb2cd31f3021342' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1554200635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2741183575cb17945d394c2-46617214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cb17945d418a5_42990439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb17945d418a5_42990439')) {function content_5cb17945d418a5_42990439($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
