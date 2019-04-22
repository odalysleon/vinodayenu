<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:54:50
         compiled from "/srv/www/vinodayenu.com/www/themes/classic/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16008851765cae4a0a104b08-72673172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4ad7b505fcaf924ceb2d256bb0d12b1ea56ecd7' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1554200635,
      2 => 'file',
    ),
    'f63a62088906a0869cdba411ac483cfadea1ddd5' => 
    array (
      0 => '/srv/www/vinodayenu.com/www/themes/classic/templates/catalog/_partials/variant-links.tpl',
      1 => 1554200523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16008851765cae4a0a104b08-72673172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'feature' => 0,
    'price_unit' => 0,
    'price_unit_percentage_referencia' => 0,
    'price_unit_final' => 0,
    'kg' => 0,
    'kg_percentage_referencia' => 0,
    'kg_final' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cae4a0a2311a7_44189329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cae4a0a2311a7_44189329')) {function content_5cae4a0a2311a7_44189329($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/srv/www/vinodayenu.com/www/vendor/prestashop/smarty/plugins/modifier.replace.php';
?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <img
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </a>
      

      <div class="product-description">
        
          <h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h1>
        

        
         <?php if ($_smarty_tpl->tpl_vars['product']->value['price_amount']>0&&$_smarty_tpl->tpl_vars['product']->value['id_category_default']!=14) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


                <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                  <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
              <?php }?>

              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


              <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
              <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                  <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>            
                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['id_feature']==10) {?>  
                            <?php $_smarty_tpl->tpl_vars['price_unit'] = new Smarty_variable(((smarty_modifier_replace((smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['price'],'€','')),',','.'))/$_smarty_tpl->tpl_vars['feature']->value['value']), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                                    <?php $_smarty_tpl->tpl_vars['price_unit_final'] = new Smarty_variable(sprintf("%.2f",($_smarty_tpl->tpl_vars['price_unit']->value-(($_smarty_tpl->tpl_vars['price_unit']->value*$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])/100))), null, 0);?>
                                <?php } else { ?>   
                                    <?php $_smarty_tpl->tpl_vars['price_unit_percentage_referencia'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['discount_to_display']*100/$_smarty_tpl->tpl_vars['product']->value['price'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['price_unit_final'] = new Smarty_variable(sprintf("%.2f",($_smarty_tpl->tpl_vars['price_unit']->value-(($_smarty_tpl->tpl_vars['price_unit']->value*$_smarty_tpl->tpl_vars['price_unit_percentage_referencia']->value)/100))), null, 0);?>
                                <?php }?>       
                                <span class="unit_price_discount" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['price_unit']->value),'.',','), ENT_QUOTES, 'UTF-8');?>
</span>
                                <span class="unit_price" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['price_unit_final']->value),'.',','), ENT_QUOTES, 'UTF-8');?>
 €/<?php echo smartyTranslate(array('s'=>'Unit','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
                            <?php } else { ?> 
                                <span class="unit_price" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['price_unit']->value),'.',','), ENT_QUOTES, 'UTF-8');?>
 €/<?php echo smartyTranslate(array('s'=>'Unit','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
                            <?php }?> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['id_feature']==28) {?>
                            <?php $_smarty_tpl->tpl_vars['kg'] = new Smarty_variable(explode("€",$_smarty_tpl->tpl_vars['feature']->value['value']), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                                    <?php $_smarty_tpl->tpl_vars['kg_final'] = new Smarty_variable(sprintf("%.2f",($_smarty_tpl->tpl_vars['kg']->value[0]-(($_smarty_tpl->tpl_vars['kg']->value[0]*$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])/100))), null, 0);?>
                                <?php } else { ?> 
                                    <?php $_smarty_tpl->tpl_vars['kg_percentage_referencia'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['discount_to_display']*100/$_smarty_tpl->tpl_vars['product']->value['price'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['kg_final'] = new Smarty_variable(sprintf("%.2f",($_smarty_tpl->tpl_vars['kg']->value[0]-(($_smarty_tpl->tpl_vars['kg']->value[0]*$_smarty_tpl->tpl_vars['kg_percentage_referencia']->value))/100)), null, 0);?>
                                <?php }?> 
                                     
                                <span class="unit_price_discount" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kg']->value[0], ENT_QUOTES, 'UTF-8');?>
</span>
                                <span class="unit_price" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kg_final']->value, ENT_QUOTES, 'UTF-8');?>
 €/Kg</span>
                            <?php } else { ?> 
                                <span class="unit_price" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kg']->value[0], ENT_QUOTES, 'UTF-8');?>
 €/Kg</span>
                            <?php }?> 
                        <?php }?> 
                    <?php } ?>              
              <?php }?>
            </span>

              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

            </div>
          <?php }?>
         <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['product']->value['price_amount']==0||$_smarty_tpl->tpl_vars['product']->value['id_category_default']==14) {?>
             <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                  <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
	      <div class="product-price-and-shipping">
              	<span itemprop="price" class="price" style="color:#2fb5d2 !important"><?php echo smartyTranslate(array('s'=>'REQUEST A BUDGET','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
            </div>
	 <?php }?>  
        

        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

        
      </div>

      
        <ul class="product-flags">
          <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      

      <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
        
          <a class="quick-view" href="#" data-link-action="quickview">
            <i class="material-icons search">&#xE8B6;</i> <?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </a>
        

        
          <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
            <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '16008851765cae4a0a104b08-72673172');
content_5cae4a0a20dde1_58187957($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
          <?php }?>
        
      </div>

    </div>
  </article>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-04-10 21:54:50
         compiled from "/srv/www/vinodayenu.com/www/themes/classic/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cae4a0a20dde1_58187957')) {function content_5cae4a0a20dde1_58187957($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
