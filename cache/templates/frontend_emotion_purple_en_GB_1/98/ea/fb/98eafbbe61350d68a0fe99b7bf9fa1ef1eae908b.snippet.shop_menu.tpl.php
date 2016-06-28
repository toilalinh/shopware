<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/index/shop_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7119739465770ed7b514019-72910972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98eafbbe61350d68a0fe99b7bf9fa1ef1eae908b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/widgets/index/shop_menu.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7119739465770ed7b514019-72910972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'currency' => 0,
    'shop' => 0,
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed7b630b17_57038213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed7b630b17_57038213')) {function content_5770ed7b630b17_57038213($_smarty_tpl) {?><div id="topbar">



    <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
        <div class="topbar_currency">
            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                <form action="" method="post" class="currency">
                    <input type="hidden" name="__currency" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->getId();?>
" />
                    <input type="submit" <?php if ($_smarty_tpl->tpl_vars['currency']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getCurrency()->getId()){?>class="active"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->getCurrency();?>
" />
                </form>
            <?php } ?>
        </div>
    <?php }?>




<?php if ($_smarty_tpl->tpl_vars['shop']->value&&count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
<div class="topbar_lang">
    <?php if ($_smarty_tpl->tpl_vars['shop']->value&&count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
        <div class="flag <?php echo $_smarty_tpl->tpl_vars['shop']->value->getLocale()->toString();?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value->getName();?>
</div>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
        <form method="post" action="">
            <select name="__shop" class="lang_select auto_submit">
                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getId()){?>selected="selected"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                    </option>
                <?php } ?>
            </select>
        </form>
    <?php }?>
</div>
<?php }?>


</div><?php }} ?>