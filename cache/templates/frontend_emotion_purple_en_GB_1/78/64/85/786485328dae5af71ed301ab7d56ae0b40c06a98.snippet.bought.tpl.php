<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 12:06:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/recommendation/bought.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21044797925770fab0a73d69-27605353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786485328dae5af71ed301ab7d56ae0b40c06a98' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/recommendation/bought.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21044797925770fab0a73d69-27605353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boughtArticles' => 0,
    'perPage' => 0,
    'articles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770fab0aca480_07478980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770fab0aca480_07478980')) {function content_5770fab0aca480_07478980($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['boughtArticles']->value){?>
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.bought-slider').ajaxSlider('locale', {
                    'height': 130,
                    'width': 896,
                    'scrollWidth': 896,
                    'title': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailBoughtArticlesSlider",'namespace'=>'widgets/recommendation/bought','default'=>'Kunden kauften auch:')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailBoughtArticlesSlider",'namespace'=>'widgets/recommendation/bought','default'=>'Kunden kauften auch:'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customers also bought:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailBoughtArticlesSlider",'namespace'=>'widgets/recommendation/bought','default'=>'Kunden kauften auch:'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
    <div class="bought-slider">
        <?php  $_smarty_tpl->tpl_vars['articles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articles']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['boughtArticles']->value,$_smarty_tpl->tpl_vars['perPage']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->key => $_smarty_tpl->tpl_vars['articles']->value){
$_smarty_tpl->tpl_vars['articles']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("widgets/recommendation/slide_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('articles'=>$_smarty_tpl->tpl_vars['articles']->value), 0);?>

        <?php } ?>
    </div>
<?php }?><?php }} ?>