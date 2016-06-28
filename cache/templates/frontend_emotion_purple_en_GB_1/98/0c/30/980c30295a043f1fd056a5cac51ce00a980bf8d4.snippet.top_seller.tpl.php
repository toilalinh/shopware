<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:31
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/listing/top_seller.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4805479585770ed87b5b5d8-72522499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '980c30295a043f1fd056a5cac51ce00a980bf8d4' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/listing/top_seller.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4805479585770ed87b5b5d8-72522499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sCharts' => 0,
    'perPage' => 0,
    'article' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed87c9d0a1_96127559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed87c9d0a1_96127559')) {function content_5770ed87c9d0a1_96127559($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/modifier.truncate.php';
?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        $('.topseller-slider').ajaxSlider('locale', {
            'height': 210,
            'layout': 'horizontal',
            'scrollWidth': 796,
            'title': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"TopsellerHeading",'namespace'=>'widgets/listing/top_seller')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"TopsellerHeading",'namespace'=>'widgets/listing/top_seller'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Top seller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"TopsellerHeading",'namespace'=>'widgets/listing/top_seller'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            'titleClass': 'headingbox_nobg',
            'headline': true,
            'navigation': true,
            'showNumbers': false,
            'containerCSS': {
                'marginTop': '20px',
                'marginBottom': '20px'
            }
        });
    });
})(jQuery);
</script>	

<?php if (count($_smarty_tpl->tpl_vars['sCharts']->value)){?>
<div class="topseller-slider">
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sCharts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['article']->iteration=0;
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->iteration++;
 $_smarty_tpl->tpl_vars['article']->index++;
 $_smarty_tpl->tpl_vars['article']->last = $_smarty_tpl->tpl_vars['article']->iteration === $_smarty_tpl->tpl_vars['article']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['article']->index%$_smarty_tpl->tpl_vars['perPage']->value==0){?>
            <div class="slide">
        <?php }?>
                
        <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value['image']['src'][2], null, 0);?>
        <div class="article_box<?php echo smarty_function_cycle(array('values'=>",,, noborder"),$_smarty_tpl);?>
">
	        <span class="numbers"><?php echo $_smarty_tpl->tpl_vars['article']->index+1;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
			<a style="background: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
) no-repeat scroll center center transparent;" class="artbox_thumb" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
"></a>
        <?php }else{ ?>
			<a class="artbox_thumb no_picture" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
"></a>
        <?php }?>
			<a title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" class="title" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['articleName'],28);?>
</a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['article']->index%$_smarty_tpl->tpl_vars['perPage']->value==($_smarty_tpl->tpl_vars['perPage']->value-1)||$_smarty_tpl->tpl_vars['article']->last){?>
        </div>
        <?php }?>
    <?php } ?>
</div>
<div class="space">&nbsp;</div>
<?php }?><?php }} ?>