<?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:01
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18210323775770f1d1c6a450-71494467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a46216ebff1acb3a1d8586a4df575e20ed01c85' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/index.tpl',
      1 => 1467096304,
      2 => 'file',
    ),
    '04a4fe523f84c110c181e2f5c77dad34a32af89f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_emotion/frontend/listing/box_article.tpl',
      1 => 1425975330,
      2 => 'parent',
    ),
    'f543a1cd882a69ff988e21a42d1ca8c1490272ae' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/frontend/listing/box_article.tpl',
      1 => 1425975330,
      2 => 'parent',
    ),
    '9d475cec0c6af5d344b0cd6969162d61dd039254' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_article.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
    '78b5c9b7882eb8fcb32cc7d1bb41536578800692' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/slide_articles.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
    'ce9d01f237dff75778b9b43fc3193c206f28c1e7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_article_slider.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
    'dcd695ff6bb990e331181d3b90ba5341cd7e6236' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_banner.tpl',
      1 => 1467096349,
      2 => 'snippet',
    ),
    '95e392d7a54a2eaf74556aee137ac8b593006efd' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_banner_slider.tpl',
      1 => 1467096343,
      2 => 'snippet',
    ),
    '88882a3b627c76d42f7d66e28e907de9245a81dc' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_blog.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
    '88152a0abf9c4937aa7f9fdd695fa419e29713c0' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_category_teaser.tpl',
      1 => 1467088123,
      2 => 'snippet',
    ),
    '1d75a997cc28173b12e3d0108206e86423ff5149' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_html.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
    '05cee3bb69dc6fb09cbff8ed7011981520540da7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_iframe.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
    '97d7d9049ac04206589c944b59a9320c3411990f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_manufacturer_slider.tpl',
      1 => 1467096354,
      2 => 'snippet',
    ),
    'fda1668d2749ba7f9982005e71ae48f4e2fdb4f7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_youtube.tpl',
      1 => 1425975330,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '18210323775770f1d1c6a450-71494467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f1d33dd471_61304923',
  'variables' => 
  array (
    'sEmotions' => 1,
    'emotion' => 1,
    'element' => 1,
    'cellWidth' => 1,
    'cellHeight' => 1,
    'listingTpl' => 1,
    'colWidth' => 1,
    'colHeight' => 1,
    'elementHeight' => 1,
    'elementWidth' => 1,
    'categoryId' => 1,
    'Controller' => 1,
    'style' => 1,
    'left' => 1,
    'top' => 1,
    'template' => 1,
    'finalEndRow' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f1d33dd471_61304923')) {function content_5770f1d33dd471_61304923($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['sEmotions']->value)>0){?>
<?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable('', true, 0);?>
<?php  $_smarty_tpl->tpl_vars['emotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emotion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sEmotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['emotion']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['emotion']->key => $_smarty_tpl->tpl_vars['emotion']->value){
$_smarty_tpl->tpl_vars['emotion']->_loop = true;
 $_smarty_tpl->tpl_vars['emotion']->index++;
?>

    
    <?php $_smarty_tpl->tpl_vars['cellWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['emotion']->value['containerWidth']/$_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'], true, 0);?>
    <?php $_smarty_tpl->tpl_vars['cellHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['emotion']->value['grid']['cellHeight'], true, 0);?>
    <?php $_smarty_tpl->tpl_vars['finalEndRow'] = new Smarty_variable(1, true, 0);?>

    <div class="emotion-listing emotion-col<?php echo $_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'];?>
 emotion-<?php echo $_smarty_tpl->tpl_vars['emotion']->index;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['emotion']->value['containerWidth'];?>
px">
        <?php if ($_smarty_tpl->tpl_vars['emotion']->value['elements'][0]){?>
            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emotion']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['element']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
 $_smarty_tpl->tpl_vars['element']->index++;
?>

                
                <?php $_smarty_tpl->tpl_vars['colWidth'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['endCol']-$_smarty_tpl->tpl_vars['element']->value['startCol'])+1, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['colHeight'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['endRow']-$_smarty_tpl->tpl_vars['element']->value['startRow'])+1, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['elementWidth'] = new Smarty_variable((($_smarty_tpl->tpl_vars['element']->value['endCol']-$_smarty_tpl->tpl_vars['element']->value['startCol'])+1)*$_smarty_tpl->tpl_vars['cellWidth']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['elementHeight'] = new Smarty_variable((($_smarty_tpl->tpl_vars['element']->value['endRow']-$_smarty_tpl->tpl_vars['element']->value['startRow'])+1)*$_smarty_tpl->tpl_vars['cellHeight']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['left'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['startCol']-1)*$_smarty_tpl->tpl_vars['cellWidth']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['top'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['startRow']-1)*$_smarty_tpl->tpl_vars['cellHeight']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['listingTpl'] = new Smarty_variable("listing-".((string)$_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'])."col", true, 0);?>
                <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['component']['template'], true, 0);?>

                
                <?php $_smarty_tpl->tpl_vars['Data'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['data'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sArticle'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['data'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sTemplate'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingTpl']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sColWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['colWidth']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sColHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['colHeight']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sElementHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['elementHeight']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sElementWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['elementWidth']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sCategoryId'] = new Smarty_variable($_smarty_tpl->tpl_vars['categoryId']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sController'] = new Smarty_variable($_smarty_tpl->tpl_vars['Controller']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sEmotionCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'], true, 0);?>

                <?php ob_start();?>{<?php $_tmp1=ob_get_clean();?><?php ob_start();?>}<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['style']->value).".emotion-element-".((string)$_smarty_tpl->tpl_vars['emotion']->index)."-".((string)$_smarty_tpl->tpl_vars['element']->index).$_tmp1."width:".((string)$_smarty_tpl->tpl_vars['elementWidth']->value)."px;height:".((string)$_smarty_tpl->tpl_vars['elementHeight']->value)."px;left:".((string)$_smarty_tpl->tpl_vars['left']->value)."px;top:".((string)$_smarty_tpl->tpl_vars['top']->value)."px".$_tmp2, true, 0);?>
                <?php ob_start();?>{<?php $_tmp3=ob_get_clean();?><?php ob_start();?>}<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['style']->value).".emotion-inner-element-".((string)$_smarty_tpl->tpl_vars['emotion']->index)."-".((string)$_smarty_tpl->tpl_vars['element']->index).$_tmp3."width:".((string)($_smarty_tpl->tpl_vars['elementWidth']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter']))."px;height:".((string)($_smarty_tpl->tpl_vars['elementHeight']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter']))."px".$_tmp4, true, 0);?>

                <div class="emotion-element emotion-element-<?php echo $_smarty_tpl->tpl_vars['emotion']->index;?>
-<?php echo $_smarty_tpl->tpl_vars['element']->index;?>
 box<?php echo $_smarty_tpl->tpl_vars['colWidth']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['colHeight']->value;?>
 col<?php echo $_smarty_tpl->tpl_vars['colWidth']->value;?>
 row<?php echo $_smarty_tpl->tpl_vars['colHeight']->value;?>
">
                    <div class="emotion-inner-element emotion-inner-element-<?php echo $_smarty_tpl->tpl_vars['emotion']->index;?>
-<?php echo $_smarty_tpl->tpl_vars['element']->index;?>
 <?php echo $_smarty_tpl->tpl_vars['element']->value['component']['cls'];?>
">
                    
                        <?php if ($_smarty_tpl->tpl_vars['template']->value=='component_article'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_article.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2a04a5f2_33771567($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_article.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_article_slider'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_article_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_article_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2a8f5da8_92847846($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_article_slider.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_banner'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_banner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2ac31a90_06432615($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_banner.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_banner_slider'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_banner_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_banner_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2ad34298_50618298($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_banner_slider.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_blog'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_blog.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2ae96f24_26081037($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_blog.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_category_teaser'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_category_teaser.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_category_teaser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2b07a322_29737327($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_category_teaser.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_html'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_html.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2b0edd93_70824647($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_html.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_iframe'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_iframe.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_iframe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2b123449_76163327($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_iframe.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_manufacturer_slider'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_manufacturer_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_manufacturer_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2b15e068_83513113($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_manufacturer_slider.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_youtube'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_youtube.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_youtube.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2b2f7d04_34920296($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_youtube.tpl" */?>
                        <?php }elseif($_smarty_tpl->smarty->templateExists("widgets/emotion/components/".((string)$_smarty_tpl->tpl_vars['template']->value).".tpl")){?>
                            <?php echo $_smarty_tpl->getSubTemplate ("widgets/emotion/components/".((string)$_smarty_tpl->tpl_vars['element']->value['component']['template']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php }else{ ?>
                            &nbsp;
                        <?php }?>
                    
                    </div>
                </div>

                
                <?php if ($_smarty_tpl->tpl_vars['finalEndRow']->value<$_smarty_tpl->tpl_vars['element']->value['endRow']){?>
                    <?php $_smarty_tpl->tpl_vars['finalEndRow'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['endRow'], true, 0);?>
                <?php }?>
            <?php } ?>
        <?php }?>
        <div class="emotion-spacer" style="height:<?php echo $_smarty_tpl->tpl_vars['finalEndRow']->value*$_smarty_tpl->tpl_vars['cellHeight']->value;?>
px"></div>
        <?php $_smarty_tpl->tpl_vars['finalEndRow'] = new Smarty_variable(1, true, 0);?>
    </div>
<?php } ?>
<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['style']->value;?>
</style>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:02
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_article.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2a04a5f2_33771567')) {function content_57721d2a04a5f2_33771567($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?><div class="artbox<?php if ($_smarty_tpl->tpl_vars['lastitem']->value){?> last<?php }?><?php if ($_smarty_tpl->tpl_vars['firstitem']->value){?> first<?php }?>">
	<div class="inner">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
			<div class="ico_tipp"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxTip','namespace'=>'frontend/listing/box_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxTip','namespace'=>'frontend/listing/box_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hint!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxTip','namespace'=>'frontend/listing/box_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<?php }?>
		
		
		
		
	<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
	<div class="ico_new" <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>style="top:50px;"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxNew','namespace'=>'frontend/listing/box_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNew','namespace'=>'frontend/listing/box_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEW<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNew','namespace'=>'frontend/listing/box_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<?php }?>

		
		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
			<div class="ico_esd"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxInstantDownload','namespace'=>'frontend/listing/box_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxInstantDownload','namespace'=>'frontend/listing/box_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxInstantDownload','namespace'=>'frontend/listing/box_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<?php }?>
		
		
		
        
        	<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverange']['averange']){?>
	        <div class="star star<?php echo round(($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverange']['averange']*2),0);?>
"></div>
	        <?php }?>
	    
        
		
		

				
	
	<?php if ($_smarty_tpl->tpl_vars['sTemplate']->value=='listing-3col'){?>
		
		<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][3], true, 0);?>
		<?php }?>
		
	
	<?php }else{ ?>
		
		<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==4){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][3], true, 0);?>
		<?php }?>
	<?php }?>
	
	<a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'], $_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['articleName'];?>
" class="artbox_thumb" <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'])){?> 
		style="background: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
) no-repeat center center"<?php }?>>
	<?php if (!isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'])){?><img src="/templates/_default/frontend/_resources/images/no_picture.jpg" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxNoPicture','namespace'=>'widgets/emotion/components/component_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNoPicture','namespace'=>'widgets/emotion/components/component_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNoPicture','namespace'=>'widgets/emotion/components/component_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /><?php }?></a>

				
		
		
		<a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'], $_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
" class="title" title="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['articleName'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],47);?>
</a>
		
		
		
		

	
	<?php if ($_smarty_tpl->tpl_vars['Controller']->value=='index'){?>
		
		<?php if ($_smarty_tpl->tpl_vars['sTemplate']->value=='listing-3col'){?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(1250, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(700, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(200, true, 0);?>
			<?php }?>
	
		
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==4){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(1350, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(800, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(0, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(165, true, 0);?>
			<?php }?>
		<?php }?>
		
		
		<?php }else{ ?>
					
		
		<?php if ($_smarty_tpl->tpl_vars['sTemplate']->value=='listing-3col'){?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(850, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(350, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(180, true, 0);?>
			<?php }?>
	
		
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==4){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(850, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(500, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(0, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(120, true, 0);?>
			<?php }?>
		<?php }?>
	<?php }?>
	
	<p class="desc">
	    <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['Data']->value['description_long']),$_smarty_tpl->tpl_vars['size']->value);?>

	</p>
	

		
		
		
<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']){?>
    <div class="<?php if (!$_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>article_price_unit<?php }else{ ?>article_price_unit_pseudo<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>
            <p>
            	<span class="purchaseunit">
                	<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/components/component_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/components/component_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/components/component_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

                </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>
                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>
                	<span class="referenceunit">
                     (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/emotion/components/component_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/components/component_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/components/component_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
                    </span>
                <?php }?>
            </p>
        <?php }?>
    </div>
<?php }?>
    	
		
		
		
<p class="<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>pseudoprice<?php }else{ ?>price<?php }?><?php if (!$_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?> both<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>
    	<span class="pseudo"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Instead of:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
    <?php }?>
    <span class="price"><?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
From<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
</p>

       	
       	
       	
    <div class="actions">

        

        
            
            <a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'], $_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['articleName'];?>
" class="more"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkDetails','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkDetails','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
See details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkDetails','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        
    </div>

	<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>
		<div class="pseudo_percent">%</div>
	<?php }?>

	</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:02
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_article_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2a8f5da8_92847846')) {function content_57721d2a8f5da8_92847846($_smarty_tpl) {?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementHeight']->value, true, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_title']){?>
            <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHeight']->value-36, true, 0);?>;
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value, true, 0);?>
        var config  = {
            'url': '<?php echo $_smarty_tpl->tpl_vars['Data']->value['ajaxFeed'];?>
',
            'title': "<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_title'];?>
",
            'headline': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_title']){?>true<?php }else{ ?>false<?php }?>,
            'scrollSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_scrollspeed'];?>
'),
            'rotateSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_rotatespeed'];?>
'),
            'rotate': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_rotation']){?>true<?php }else{ ?>false<?php }?>,
            'layout': 'horizontal',
            'showNumbers': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_numbers']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_type']=='selected_article'){?>true<?php }else{ ?>false<?php }?>,
            'showArrows': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'scrollWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
            'scrollHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
'),
            'skipInitalRendering': true,
            'maxPages': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['pages'];?>
'),
            'extraParams': {
                'category': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['categoryId'];?>
'),
                'start': 0,
                'limit': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['perPage']->value;?>
'),
                'elementWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
                'elementHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value-5;?>
'),
                'max': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_max_number'];?>
')
            }
        };

        var slider = $('.slider_article_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
').ajaxSlider(<?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_type']=='selected_article'){?>'locale'<?php }else{ ?>'ajax'<?php }?>, config);
        slider.find('.sliding_outer, .sliding_container').css('height', <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
);
        slider.find('.ajaxSlider').css('height', <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value-2;?>
);
    });

})(jQuery);
</script>
<div class="slider_article_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
 article-slider-emotion" style="height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">
<?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_type']=='selected_article'){?>
    <?php  $_smarty_tpl->tpl_vars['articles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articles']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['Data']->value['values'],$_smarty_tpl->tpl_vars['perPage']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->key => $_smarty_tpl->tpl_vars['articles']->value){
$_smarty_tpl->tpl_vars['articles']->_loop = true;
?>
        <?php /*  Call merged included template "widgets/emotion/slide_articles.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/slide_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('articles'=>$_smarty_tpl->tpl_vars['articles']->value,'sElementWidth'=>$_smarty_tpl->tpl_vars['sElementWidth']->value,'sPerPage'=>$_smarty_tpl->tpl_vars['perPage']->value,'sElementHeight'=>$_smarty_tpl->tpl_vars['sliderHeight']->value-5), 0, '18210323775770f1d1c6a450-71494467');
content_57721d2aa4a383_33960399($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/slide_articles.tpl" */?>
    <?php } ?>
<?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:02
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/slide_articles.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2aa4a383_33960399')) {function content_57721d2aa4a383_33960399($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?><?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementWidth']->value-61, true, 0);?>
<div class="slide" style="width:<?php echo round($_smarty_tpl->tpl_vars['width']->value,0);?>
px;height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">
	<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value['image']['src'][4], null, 0);?>
        <div class="outer-article-box" style="width:<?php echo '100'/$_smarty_tpl->tpl_vars['sPerPage']->value;?>
%">
            <div class="article_box">
            <!-- article 1 -->
            <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
            <a class="article-thumb-wrapper" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" />
            </a>
            <?php }else{ ?>
            <a class="article-thumb-wrapper" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
">
                <img src="/templates/_default/frontend/_resources/images/no_picture.jpg" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" />
            </a>
            <?php }?>
            <a title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" class="title" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['articleName'],35);?>
</a>

            <?php if ($_smarty_tpl->tpl_vars['article']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['article']->value['purchaseunit']!=0){?>
                <p class="article-purchase-unit">
                    <span class="purchaseunit">
                        <strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/slide_articles','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/slide_articles','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/slide_articles','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['sUnit']['description'];?>

                    </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['article']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['article']->value['referenceunit']){?>
                    <?php if ($_smarty_tpl->tpl_vars['article']->value['referenceunit']){?>
                        <span class="referenceunit">
                         (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['referenceprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/emotion/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['article']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['sUnit']['description'];?>
)
                        </span>
                    <?php }?>
                </p>
            <?php }?>

            <p class="price">
                <?php if ($_smarty_tpl->tpl_vars['article']->value['pseudoprice']){?>
                    <span class="pseudo">
                    <em>
                    	<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'widgets/emotion/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'widgets/emotion/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Instead of:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'widgets/emotion/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['pseudoprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'default'=>'*','namespace'=>'widgets/emotion/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'widgets/emotion/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'widgets/emotion/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </em>
                    </span>
                <?php }?>
                <span class="price<?php if ($_smarty_tpl->tpl_vars['article']->value['pseudoprice']){?> pseudo<?php }?>"><?php if ($_smarty_tpl->tpl_vars['article']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['article']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/emotion/slide_articles','name'=>'ListingBoxArticleStartsAt')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/emotion/slide_articles','name'=>'ListingBoxArticleStartsAt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/emotion/slide_articles','name'=>'ListingBoxArticleStartsAt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['price']);?>
 *</span>
            </p>
            </div>
        </div>
	<?php } ?>
</div>
<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:02
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_banner.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2ac31a90_06432615')) {function content_57721d2ac31a90_06432615($_smarty_tpl) {?><div class="mapping">
    <?php if ($_smarty_tpl->tpl_vars['Data']->value['link']){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['Data']->value['link'];?>
">
            <img src="<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['Data']->value['file'], "fullPath" => false), $_smarty_tpl); ?>" />
        </a>
    <?php }else{ ?>
        <img src="<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['Data']->value['file'], "fullPath" => false), $_smarty_tpl); ?>" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Data']->value['bannerMapping']){?>
        <div class="banner-mapping" style="height: <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px;width: <?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
px">
			<?php  $_smarty_tpl->tpl_vars['mapping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mapping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Data']->value['bannerMapping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mapping']->key => $_smarty_tpl->tpl_vars['mapping']->value){
$_smarty_tpl->tpl_vars['mapping']->_loop = true;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mapping']->value['link'];?>
"<?php if ($_smarty_tpl->tpl_vars['mapping']->value['linkLocation']=="external"){?> target="_blank"<?php }?> class="emotion-banner-mapping" style="width:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['width'];?>
px;height:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['height'];?>
px;left:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['x'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['y'];?>
px"<?php if ($_smarty_tpl->tpl_vars['mapping']->value['title']){?> title="<?php echo $_smarty_tpl->tpl_vars['mapping']->value['title'];?>
"<?php }?>></a>
				<?php if ($_smarty_tpl->tpl_vars['mapping']->value['as_tooltip']===1&&$_smarty_tpl->tpl_vars['mapping']->value['title']){?>
					<div class="banner-mapping-tooltip" style="width:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['width'];?>
px;left:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['x'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['y']+$_smarty_tpl->tpl_vars['mapping']->value['height']-($_smarty_tpl->tpl_vars['mapping']->value['height']/2);?>
px">
						<span><?php echo $_smarty_tpl->tpl_vars['mapping']->value['title'];?>
</span>
					</div>
				<?php }?>
			<?php } ?>
        </div>
    <?php }?>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:02
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_banner_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2ad34298_50618298')) {function content_57721d2ad34298_50618298($_smarty_tpl) {?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementHeight']->value, true, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_title']){?>
            <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHeight']->value-36, true, 0);?>;
        <?php }?>
        var config  = {
            'title': '<?php echo $_smarty_tpl->tpl_vars['Data']->value['banner_slider_title'];?>
',
            'headline': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_title']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_navigation']){?>true<?php }else{ ?>false<?php }?>,
            'scrollSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['banner_slider_scrollspeed'];?>
'),
            'rotateSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['banner_slider_rotatespeed'];?>
'),
            'rotate': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_rotation']){?>true<?php }else{ ?>false<?php }?>,
            'layout': 'horizontal',
            'showNumbers': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_numbers']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'showArrows': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'scrollWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
            'scrollHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
')
        };

        var slider = $('.slider_banner_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
').ajaxSlider('locale', config);
        slider.find('.sliding_outer, .sliding_container').css('height', <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
);
        slider.find('.ajaxSlider').css('height', <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
);
    });

})(jQuery);
</script>
<div class="slider_banner_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
 banner-slider-emotion" style="height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">
    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Data']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
        <div class="slide" style="width:<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
px; height: <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
px">
            <?php if ($_smarty_tpl->tpl_vars['banner']->value['link']){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['altText'];?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['title']){?>title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
" <?php }?>/>
                </a>
            <?php }else{ ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['altText'];?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['title']){?>title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
" <?php }?>/>
            <?php }?>

        </div>
    <?php } ?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:02
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_blog.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2ae96f24_26081037')) {function content_57721d2ae96f24_26081037($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['Data']->value){?>
    <div class="blog-outer-container">
        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Data']->value['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->iteration++;
 $_smarty_tpl->tpl_vars['entry']->last = $_smarty_tpl->tpl_vars['entry']->iteration === $_smarty_tpl->tpl_vars['entry']->total;
?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['entry']->value['media']['thumbnails'][$_smarty_tpl->tpl_vars['Data']->value['thumbnail_size']], true, 0);?>
            <div class="blog-entry" style="width:<?php echo "100"/count($_smarty_tpl->tpl_vars['Data']->value['entries']);?>
%">
            	<div class="blog-entry-inner<?php if ($_smarty_tpl->tpl_vars['entry']->last){?> last<?php }?>">
                    <div class="blog_img">
                       <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
                            <a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'detail', 'sCategory' => $_smarty_tpl->tpl_vars['entry']->value['categoryId'], 'blogArticle' => $_smarty_tpl->tpl_vars['entry']->value['id'], )); ?>" style="background:url(<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['image']->value, "fullPath" => false), $_smarty_tpl); ?>) no-repeat center center;" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
">&nbsp;</a>
                       <?php }else{ ?>
                            <a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'detail', 'sCategory' => $_smarty_tpl->tpl_vars['entry']->value['categoryId'], 'blogArticle' => $_smarty_tpl->tpl_vars['entry']->value['id'], )); ?>" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"EmotionBlogPreviewNopic",'default'=>'Kein Bild vorhanden','namespace'=>'widgets/emotion/components/component_blog','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"EmotionBlogPreviewNopic",'default'=>'Kein Bild vorhanden','namespace'=>'widgets/emotion/components/component_blog','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No image available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"EmotionBlogPreviewNopic",'default'=>'Kein Bild vorhanden','namespace'=>'widgets/emotion/components/component_blog','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </a>
                       <?php }?>
                    </div>
	                
	                <h2>
	                	<a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'detail', 'sCategory' => $_smarty_tpl->tpl_vars['entry']->value['categoryId'], 'blogArticle' => $_smarty_tpl->tpl_vars['entry']->value['id'], )); ?>" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value['title'],40);?>
</a>
	                </h2>
	                <?php if ($_smarty_tpl->tpl_vars['entry']->value['shortDescription']){?>
	                    <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value['shortDescription'],105);?>
</p>
	                <?php }else{ ?>
	                    <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value['description']),105);?>
</p>
	                <?php }?>
            	</div>
            </div>
        <?php } ?>
    </div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:03
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_category_teaser.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2b07a322_29737327')) {function content_57721d2b07a322_29737327($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Data']->value){?>
	<div class="teaser_box">
		<a href="<?php if ($_smarty_tpl->tpl_vars['Data']->value['blog_category']){?><?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'index', 'sCategory' => $_smarty_tpl->tpl_vars['Data']->value['category_selection'], )); ?><?php }else{ ?><?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'cat', 'action' => 'index', 'sCategory' => $_smarty_tpl->tpl_vars['Data']->value['category_selection'], )); ?><?php }?>" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['Data']->value['categoryName']);?>
">
			
			<div class="teaser_img"<?php if ($_smarty_tpl->tpl_vars['Data']->value['image']){?> style="background:url(<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['Data']->value['image'], "fullPath" => false), $_smarty_tpl); ?>) no-repeat center center"<?php }?>>&nbsp;</div>

			
			<div class="teaser_headline">
				<h3><?php echo $_smarty_tpl->tpl_vars['Data']->value['categoryName'];?>
</h3>
			</div>
		</a>
	</div>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:03
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_html.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2b0edd93_70824647')) {function content_57721d2b0edd93_70824647($_smarty_tpl) {?><div class="html-text-inner-element">
<div class="inner">
    <?php if ($_smarty_tpl->tpl_vars['Data']->value['cms_title']){?>
        <h2 class="headline"><?php echo $_smarty_tpl->tpl_vars['Data']->value['cms_title'];?>
</h2>
    <?php }?>

    <div class="text">
        <?php echo $_smarty_tpl->tpl_vars['Data']->value['text'];?>

    </div>
</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:03
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_iframe.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2b123449_76163327')) {function content_57721d2b123449_76163327($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Data']->value&&$_smarty_tpl->tpl_vars['Data']->value['iframe_url']){?>
<iframe width="100%" height="100%" src="<?php echo $_smarty_tpl->tpl_vars['Data']->value['iframe_url'];?>
" frameborder="0"></iframe>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:03
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_manufacturer_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2b15e068_83513113')) {function content_57721d2b15e068_83513113($_smarty_tpl) {?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementHeight']->value, true, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_title']){?>
            <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHeight']->value-36, true, 0);?>;
        <?php }?>
        var config  = {
            'title': '<?php echo $_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_title'];?>
',
            'headline': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_title']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_navigation']){?>true<?php }else{ ?>false<?php }?>,
            'scrollSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_scrollspeed'];?>
'),
            'rotateSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_rotatespeed'];?>
'),
            'rotate': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_rotation']){?>true<?php }else{ ?>false<?php }?>,
            'layout': 'horizontal',
            'showNumbers': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_numbers']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': false,
            'showArrows': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'scrollWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
            'scrollHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
')
        };

        var slider = $('.slider_manufacturer_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
').ajaxSlider('locale', config);
        slider.find('.sliding_outer, .sliding_container').css('height', <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
);
        slider.find('.ajaxSlider').css('height', <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value-2;?>
);
        slider.find('.slide').css({
            'width': <?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
,
            'height': <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>

        });
    });
})(jQuery);
</script>
<div class="slider_manufacturer_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
 slider-manufacturer" style="height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">

	<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
		<?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value+1, true, 0);?>
	<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
		<?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value+1, true, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value, true, 0);?>
	<?php }?>
	
    <?php  $_smarty_tpl->tpl_vars['suppliers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['suppliers']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['Data']->value['values'],$_smarty_tpl->tpl_vars['perPage']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['suppliers']->key => $_smarty_tpl->tpl_vars['suppliers']->value){
$_smarty_tpl->tpl_vars['suppliers']->_loop = true;
?>
        <div class="slide" style="width:<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
px">
            <div class="inner-slide">
            <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value){
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
                <div class="supplier">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
" class="image-wrapper<?php if (!$_smarty_tpl->tpl_vars['supplier']->value['image']){?> text<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['supplier']->value['image']){?>
                            <span class="vertical-center"></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
" />
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>

                    <?php }?>
                    </a>
                </div>
            <?php } ?>
            <div class="clear"></div>
            </div>
        </div>
    <?php } ?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:46:03
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/emotion/components/component_youtube.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57721d2b2f7d04_34920296')) {function content_57721d2b2f7d04_34920296($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Data']->value&&$_smarty_tpl->tpl_vars['Data']->value['video_id']){?>
<iframe width="100%" height="100%" src="//www.youtube-nocookie.com/embed/<?php echo $_smarty_tpl->tpl_vars['Data']->value['video_id'];?>
<?php if ($_smarty_tpl->tpl_vars['Data']->value['video_hd']){?>?hd=1&vq=hd720<?php }?>" frameborder="0" allowfullscreen></iframe>
<?php }?><?php }} ?>