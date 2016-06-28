<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_emotion/frontend/index/checkout_actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638807505770ed7b22f955-06888385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '034f5b30b68e999b6aea3a184d42abe5ed2db06b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_emotion/frontend/index/checkout_actions.tpl',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638807505770ed7b22f955-06888385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sNotesQuantity' => 0,
    'sBasketQuantity' => 0,
    'sUserLoggedIn' => 0,
    'sBasketAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed7b3efb63_12913834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed7b3efb63_12913834')) {function content_5770ed7b3efb63_12913834($_smarty_tpl) {?><?php if (!is_callable('smarty_function_action')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Enlight/Template/Plugins/function.action.php';
if (!is_callable('smarty_modifier_currency')) include '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>
<div class="my_options">

        
        <a href="<?php echo 'http://fo.shopware.vn/account';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="account">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
        

        
		<a href="<?php echo 'http://fo.shopware.vn/note';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkNotepad')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkNotepad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wish list<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkNotepad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['sNotesQuantity']->value>0){?>style="padding-right: 25px;"<?php }?> class="note">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkNotepad')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkNotepad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wish list<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkNotepad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['sNotesQuantity']->value>0){?><span class="notes_quantity"><?php echo $_smarty_tpl->tpl_vars['sNotesQuantity']->value;?>
</span><?php }?>
		</a>
        

        
		<span class="service">
			<span><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'IndexLinkService','default'=>'Service/Hilfe','namespace'=>'frontend/index/checkout_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkService','default'=>'Service/Hilfe','namespace'=>'frontend/index/checkout_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Service/Help<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkService','default'=>'Service/Hilfe','namespace'=>'frontend/index/checkout_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
            <?php echo smarty_function_action(array('module'=>'widgets','controller'=>'index','action'=>'menu','group'=>'gLeft'),$_smarty_tpl);?>

		</span>
        

		
        
            <?php echo smarty_function_action(array('module'=>'widgets','controller'=>'index','action'=>'shopMenu'),$_smarty_tpl);?>

        
    <div class="clear">&nbsp;</div>
</div>


<div id="shopnavi">
    
	
    <div class="grid_6 newbasket<?php if ($_smarty_tpl->tpl_vars['sBasketQuantity']->value){?> active<?php }?>">
    
		<div class="grid_2 last icon">
			<a href="<?php echo 'http://fo.shopware.vn/checkout/cart';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
				<?php if ($_smarty_tpl->tpl_vars['sUserLoggedIn']->value){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'IndexLinkCheckout','namespace'=>'frontend/index/checkout_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'frontend/index/checkout_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to checkout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'frontend/index/checkout_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			</a>
		</div>

		<div class="grid_5 first display">
			<div class="basket_left">
				<span>
					<a href="<?php echo 'http://fo.shopware.vn/checkout/cart';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/index/checkout_actions','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				</span>
			</div>
			<div class="basket_right">
				<span class="amount"><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasketAmount']->value);?>
*</span>
			</div>
		</div>
		
		<div class="ajax_basket_container hide_script">
			<div class="ajax_basket">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'IndexActionShowPositions','namespace'=>'frontend/index/checkout_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexActionShowPositions','namespace'=>'frontend/index/checkout_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display positions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexActionShowPositions','namespace'=>'frontend/index/checkout_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				
				<div class="ajax_loader">&nbsp;</div>
			</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['sBasketQuantity']->value>0){?>
			<a href="<?php echo 'http://fo.shopware.vn/checkout/cart';?>" class="quantity"><?php echo $_smarty_tpl->tpl_vars['sBasketQuantity']->value;?>
</a>
		<?php }?>
		
        <div class="clear">&nbsp;</div>
    </div>
	
	
    
    
</div><?php }} ?>