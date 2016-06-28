<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 12:06:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/recommendation/viewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8269065515770fab0c5e532-84028240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5842281bf841e422ff20ba0f5f50f489eefc0a60' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/recommendation/viewed.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8269065515770fab0c5e532-84028240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewedArticles' => 0,
    'perPage' => 0,
    'articles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770fab0cb8385_17343498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770fab0cb8385_17343498')) {function content_5770fab0cb8385_17343498($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['viewedArticles']->value){?>
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.viewed-slider').ajaxSlider('locale', {
                    'height': 130,
                    'width': 896,
                    'scrollWidth': 896,
                    'title': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailViewedArticlesSlider",'namespace'=>'widgets/recommendation/viewed','default'=>'Kunden haben sich ebenfalls angesehen:')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailViewedArticlesSlider",'namespace'=>'widgets/recommendation/viewed','default'=>'Kunden haben sich ebenfalls angesehen:'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customers also viewed:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailViewedArticlesSlider",'namespace'=>'widgets/recommendation/viewed','default'=>'Kunden haben sich ebenfalls angesehen:'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    'titleClass': 'headingbox_nobg',
                    'headline': true,
                    'navigation': false,
                    'showNumbers': false,
                    'containerCSS': {
                        'marginBottom': '20px'
                    }
                });
            });
        })(jQuery);
    </script>
    <div class="viewed-slider">
        <?php  $_smarty_tpl->tpl_vars['articles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articles']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['viewedArticles']->value,$_smarty_tpl->tpl_vars['perPage']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->key => $_smarty_tpl->tpl_vars['articles']->value){
$_smarty_tpl->tpl_vars['articles']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("widgets/recommendation/slide_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('articles'=>$_smarty_tpl->tpl_vars['articles']->value), 0);?>

        <?php } ?>
    </div>
<?php }?><?php }} ?>