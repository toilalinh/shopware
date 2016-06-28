<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/index/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12552977855770ed7b418671-27225382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebcc4bdf1065e751b46843e4c9dd4913d5ab045' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/index/menu.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12552977855770ed7b418671-27225382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sGroup' => 0,
    'sMenu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed7b4a18c6_28856072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed7b4a18c6_28856072')) {function content_5770ed7b4a18c6_28856072($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]){?>
<ul id="servicenavi">
<span class="arrow"></span>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
<?php }else{ ?><?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['item']->value['id'], 'title' => $_smarty_tpl->tpl_vars['item']->value['description'], )); ?><?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']){?>target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

            </a>
        </li>
    <?php } ?>
</ul>
<?php }?><?php }} ?>