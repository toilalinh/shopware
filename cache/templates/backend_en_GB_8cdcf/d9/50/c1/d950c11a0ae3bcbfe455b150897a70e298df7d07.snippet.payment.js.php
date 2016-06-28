<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/model/payment.js" */ ?>
<?php /*%%SmartyHeaderCode:12796191805770ed911f3629-04384236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd950c11a0ae3bcbfe455b150897a70e298df7d07' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/model/payment.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12796191805770ed911f3629-04384236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed91271596_55941644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed91271596_55941644')) {function content_5770ed91271596_55941644($_smarty_tpl) {?>/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Base
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The payment model represents a data row of the s_core_paymentmeans or the
 * Shopware\Models\Payment\Payment doctrine model.
 */
//
//
Ext.define('Shopware.apps.Base.model.Payment', {

    snippets: {
        //
        debit: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'debit','default'=>'Debit','namespace'=>'backend/static/payment')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'debit','default'=>'Debit','namespace'=>'backend/static/payment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Debit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'debit','default'=>'Debit','namespace'=>'backend/static/payment'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        cash: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'on_delivery','default'=>'On delivery','namespace'=>'backend/static/payment')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'on_delivery','default'=>'On delivery','namespace'=>'backend/static/payment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
On delivery<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'on_delivery','default'=>'On delivery','namespace'=>'backend/static/payment'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        invoice: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'invoice','default'=>'Invoice','namespace'=>'backend/static/payment')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'invoice','default'=>'Invoice','namespace'=>'backend/static/payment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Invoice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'invoice','default'=>'Invoice','namespace'=>'backend/static/payment'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        prepayment: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'prepayment','default'=>'Prepayment','namespace'=>'backend/static/payment')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'prepayment','default'=>'Prepayment','namespace'=>'backend/static/payment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Prepayment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'prepayment','default'=>'Prepayment','namespace'=>'backend/static/payment'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        paypalexpress: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'pay_pal_express','default'=>'PayPal','namespace'=>'backend/static/payment')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'pay_pal_express','default'=>'PayPal','namespace'=>'backend/static/payment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
PayPal<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'pay_pal_express','default'=>'PayPal','namespace'=>'backend/static/payment'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Payment',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'id', type: 'int' },
        { name:'name', type: 'string' },
        {
            name:'description',
            type: 'string',
            convert: function(value, record) {
                var snippet = value;
                if (record && record.snippets) {
                    snippet = record.snippets[record.get('name')];
                }
                if (Ext.isString(snippet) && snippet.length > 0) {
                    return snippet;
                } else {
                    return value;
                }
            }
        },
        { name:'position', type: 'int' },
        { name:'active', type: 'boolean' }
    ]
});
//

<?php }} ?>