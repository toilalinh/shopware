<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 12:06:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/recommendation/slide_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3690644775770fab0cbf345-77471999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37ba02f6ac3f991dd875f8b483f0ddc19f4fe39' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/recommendation/slide_articles.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3690644775770fab0cbf345-77471999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'image' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770fab0e58dd0_59847005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770fab0e58dd0_59847005')) {function content_5770fab0e58dd0_59847005($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?><div class="slide">
	<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value['image']['src'][2], null, 0);?>
		<div class="article_box">
		<!-- article 1 -->
		<?php if ($_smarty_tpl->tpl_vars['image']->value){?>
		<a style="background: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
) no-repeat scroll center center transparent;" class="artbox_thumb" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
">
		</a>
		<?php }else{ ?>
		<a class="artbox_thumb no_picture" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
">
		</a>
		<?php }?>
		<a title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" class="title" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['articleName'],35);?>
</a>
		
        <?php if ($_smarty_tpl->tpl_vars['article']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['article']->value['referenceunit']){?>
            <div class="article_price_unit">
                <p>
                    <strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"SlideArticleInfoContent",'namespace'=>'widgets/recommendation/slide_articles','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"SlideArticleInfoContent",'namespace'=>'widgets/recommendation/slide_articles','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"SlideArticleInfoContent",'namespace'=>'widgets/recommendation/slide_articles','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['sUnit']['description'];?>

                    <?php if ($_smarty_tpl->tpl_vars['article']->value['referenceunit']){?>
                        (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['referenceprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/recommendation/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/recommendation/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/recommendation/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['article']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['sUnit']['description'];?>
)
                    <?php }?>
                </p>
            </div>
        <?php }?>
		
		<p class="price<?php if ($_smarty_tpl->tpl_vars['article']->value['purchaseunit']){?><?php }else{ ?> up<?php }?>">
		<span class="price<?php if ($_smarty_tpl->tpl_vars['article']->value['pseudoprice']){?> pseudo<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['article']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['article']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'widgets/recommendation/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'widgets/recommendation/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'widgets/recommendation/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['price']);?>
 *</span>
		<?php if ($_smarty_tpl->tpl_vars['article']->value['pseudoprice']){?>
        	<em><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"reducedPrice",'namespace'=>'widgets/recommendation/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'namespace'=>'widgets/recommendation/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Instead of:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'namespace'=>'widgets/recommendation/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['pseudoprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/recommendation/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/recommendation/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/recommendation/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em>
		<?php }?>         
		</p>
		</div>
	<?php } ?>
</div>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div><?php }} ?>