<?php /* Smarty version Smarty-3.1.12, created on 2016-06-28 08:55:56
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/frontend/plugins/index/tagcloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7444322275770ed87d7a6a1-10816145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c428949e5023cf2c6efa8d57b3c999777b84cb6f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/frontend/plugins/index/tagcloud.tpl',
      1 => 1467096855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7444322275770ed87d7a6a1-10816145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed87dff934_18703386',
  'variables' => 
  array (
    'sCloud' => 0,
    'sCloudItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed87dff934_18703386')) {function content_5770ed87dff934_18703386($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Smarty/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['sCloud']->value){?>
<h2 class="headingbox_nobg"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"TagcloudHead",'namespace'=>'frontend/plugins/index/tagcloud')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"TagcloudHead",'namespace'=>'frontend/plugins/index/tagcloud'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag cloud<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"TagcloudHead",'namespace'=>'frontend/plugins/index/tagcloud'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<div class="tagcloud">
    <?php  $_smarty_tpl->tpl_vars['sCloudItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sCloudItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sCloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sCloudItem']->key => $_smarty_tpl->tpl_vars['sCloudItem']->value){
$_smarty_tpl->tpl_vars['sCloudItem']->_loop = true;
?>
    	<a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sCloudItem']->value['link'], $_smarty_tpl->tpl_vars['sCloudItem']->value['name']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['sCloudItem']->value['name'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['sCloudItem']->value['class'];?>
">
    		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sCloudItem']->value['name'],15,'',false);?>

    	</a> 
    <?php } ?>
</div>
<?php }?><?php }} ?>