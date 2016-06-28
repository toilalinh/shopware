<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/view/detail/billing.js" */ ?>
<?php /*%%SmartyHeaderCode:1308602075770f0d6db3750-72041995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625cf3e86157530e61bf5d0f75852edd617ec452' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/view/detail/billing.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1308602075770f0d6db3750-72041995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d72bf389_42909983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d72bf389_42909983')) {function content_5770f0d72bf389_42909983($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Detail
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Customer detail page billing field set
 *
 * The billing field set contains the billing data of the customer
 * which is stored in the billing model and filled over the s_user_billingaddress table
 */
//
Ext.define('Shopware.apps.Customer.view.detail.Billing', {
    /**
     * Define that the billing field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.customer-billing-field-set',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'billing-field-set',

    /**
     * Layout for the component.
     * @string
     */
    layout: 'column',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'title','default'=>'Billing data','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'title','default'=>'Billing data','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Billing information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'title','default'=>'Billing data','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        salutation:{
            label:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            mr:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation_mr','default'=>'Mr','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_mr','default'=>'Mr','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mr<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_mr','default'=>'Mr','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            ms:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation_ms','default'=>'Mrs','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_ms','default'=>'Mrs','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_ms','default'=>'Mrs','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        firstName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
First name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        lastName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        street:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'street','default'=>'Street','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'Street','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Street<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'Street','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        streetNumber:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'street_number','default'=>'Street number','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street_number','default'=>'Street number','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Street number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street_number','default'=>'Street number','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        zipCode:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zip code<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        city:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        birthday:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'birthday_label','default'=>'Day of birth','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'birthday_label','default'=>'Day of birth','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date of birth<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'birthday_label','default'=>'Day of birth','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        country:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        state:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
State<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        phone:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'phone','default'=>'Phone','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'phone','default'=>'Phone','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Phone<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'phone','default'=>'Phone','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        company:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        department:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Department<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        vatId:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'vat_id','default'=>'VAT ID','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'vat_id','default'=>'VAT ID','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
VAT ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'vat_id','default'=>'VAT ID','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        fax:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'fax','default'=>'Fax','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'fax','default'=>'Fax','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fax<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'fax','default'=>'Fax','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        text1: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_1_label','default'=>'Text 1','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_label','default'=>'Text 1','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_label','default'=>'Text 1','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_1_support','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_support','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_support','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_1_help_title','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_help_title','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_help_title','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_1_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_1_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_1_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_1_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_1_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_1_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text2: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_2_label','default'=>'Text 2','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_label','default'=>'Text 2','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_label','default'=>'Text 2','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_2_support','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_support','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_support','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_2_help_title','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_help_title','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_help_title','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_2_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_2_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_2_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_2_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_2_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_2_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text3: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_3_label','default'=>'Text 3','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_label','default'=>'Text 3','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_label','default'=>'Text 3','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_3_support','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_support','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_support','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_3_help_title','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_help_title','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_help_title','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_3_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_3_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_3_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_3_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_3_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_3_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text4: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_4_label','default'=>'Text 4','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_label','default'=>'Text 4','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_label','default'=>'Text 4','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_4_support','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_support','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_support','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_4_help_title','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_help_title','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_help_title','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_4_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_4_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_4_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_4_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_4_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_4_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text5: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_5_label','default'=>'Text 5','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_label','default'=>'Text 5','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_label','default'=>'Text 5','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_5_support','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_support','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_support','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_5_help_title','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_help_title','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_help_title','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_5_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_5_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_5_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_5_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_5_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_5_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text6: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_6_label','default'=>'Text 6','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_label','default'=>'Text 6','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 6<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_label','default'=>'Text 6','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_6_support','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_support','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 6<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_support','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_6_help_title','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_help_title','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 6<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_help_title','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'billing'/'text_6_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_6_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_6_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_6_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'billing'/'text_6_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/billing/text_6_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Component event method which is fired when the component
     * is initials. The component is initials when the user
     * want to create a new customer or edit an existing customer
     * @return void
     */
    initComponent:function () {
        var me = this;
        me.title = me.snippets.title;
        me.salutationData = [
            ['mr', me.snippets.salutation.mr],
            ['ms', me.snippets.salutation.ms]
        ];

        me.items = me.createBillingForm();

        me.addEvents(

            /**
             * Fired when the user changes his country. Used to fill the state box
             * @param field
             * @param newValue
             */
            'countryChanged'

        );

        me.callParent(arguments);
    },

    /**
     * Creates the both containers for the field set
     * to display the form fields in two columns.
     *
     * @return [Array] Contains the left and right container
     */
    createBillingForm:function () {
        var leftContainer, rightContainer, me = this;

        leftContainer = Ext.create('Ext.container.Container', {
            columnWidth:.5,
            border:false,
            cls: Ext.baseCSSPrefix + 'field-set-container',
            layout:'anchor',
            defaults:{
                anchor:'100%',
                labelWidth:150,
                minWidth:250,
                xtype:'textfield'
            },
            items:me.createBillingFormLeft()
        });

        rightContainer = Ext.create('Ext.container.Container', {
            columnWidth:.5,
            border:false,
            cls: Ext.baseCSSPrefix + 'field-set-container',
            layout:'anchor',
            defaults:{
                anchor:'100%',
                labelWidth:100,
                xtype:'textfield'
            },
            items:me.createBillingFormRight()
        });

        return [ leftContainer, rightContainer ];
    },

    /**
     * Creates the left container of the billing field set.
     * Contains the following components and data:
     * - [combobox]  Salutation
     * - [textfield] First name
     * - [textfield] Last name
     * - [textfield] Street name
     * - [textfield] Street number
     * - [textfield] Zip code
     * - [textfield] City name
     * - [combobox]  Country
     * - [datefield] Birthday
     * - [textfield] Company name
     * - [textfield] Department name
     * - [textfield] Vat id
     *
     * @return Ext.container.Container Contains the three components
     */
    createBillingFormLeft:function () {
        var me = this;

        me.countryCombo = Ext.create('Ext.form.field.ComboBox', {
            triggerAction:'all',
            name:'billing[countryId]',
            fieldLabel:me.snippets.country,
            valueField:'id',
            queryMode: 'local',
            displayField:'name',
            forceSelection: true,
            anchor:'100%',
            labelWidth:150,
            minWidth:250,
            editable:false,
            allowBlank:false,
            listeners: {
                change: function(field, newValue, oldValue) {
                    me.fireEvent('countryChanged', field, newValue, me.countryStateCombo);
                }
            }
        });

        me.countryStateCombo = Ext.create('Ext.form.field.ComboBox', {
            name:'billing[stateId]',
            action: 'billingStateId',
            fieldLabel:me.snippets.state,
            valueField: 'id',
            displayField: 'name',
            forceSelection: true,
            editable: false,
            hidden: true,
            triggerAction:'all',
            queryMode: 'local',
            anchor:'100%',
            labelWidth:150,
            minWidth:250
        });


        return [{
            xtype:'combobox',
            triggerAction:'all',
            name:'billing[salutation]',
            fieldLabel:me.snippets.salutation.label,
            valueField:'text',
            displayField:'snippet',
            mode:'local',
            editable:false,
            allowBlank: false,
            store:new Ext.data.SimpleStore({
                fields:['text', 'snippet'], data:me.salutationData
            })
        }, {
            name:'billing[firstName]',
            fieldLabel:me.snippets.firstName,
            allowBlank:false
        }, {
            name:'billing[lastName]',
            fieldLabel:me.snippets.lastName,
            required:true,
            allowBlank:false
        }, {
            name:'billing[street]',
            fieldLabel:me.snippets.street,
            required:true,
            allowBlank:false
        }, {
            name:'billing[streetNumber]',
            fieldLabel:me.snippets.streetNumber,
            required:true,
            allowBlank:false
        }, {
            name:'billing[zipCode]',
            fieldLabel:me.snippets.zipCode,
            required:true,
            allowBlank:false
        }, {
            name:'billing[city]',
            fieldLabel:me.snippets.city,
            required:true,
            allowBlank:false
        },
            me.countryCombo,
            me.countryStateCombo,
        {
            //define birthday date field with a defined format
            xtype:'datefield',
            name:'billing[birthday]',
            fieldLabel:me.snippets.birthday,
            submitFormat: 'd.m.Y'
        }, {
            name:'billing[company]',
            fieldLabel:me.snippets.company
        }, {
            name:'billing[department]',
            fieldLabel:me.snippets.department
        }, {
            name:'billing[vatId]',
            fieldLabel:me.snippets.vatId
        }];
    },

    /**
     * Creates the left container of the billing field set.
     * Contains the following components and data:
     * - [textfield] Phone number
     * - [textfield] Fax number
     * - [textfield] Free text field 1
     * - [textfield] Free text field 2
     * - [textfield] Free text field 3
     * - [textfield] Free text field 4
     * - [textfield] Free text field 5
     * - [textfield] Free text field 6
     *
     * @return Ext.container.Container Contains the three components
     */
    createBillingFormRight:function () {
        var me = this;

        return [{
            name:'billing[phone]',
            fieldLabel:me.snippets.phone
        }, {
            name:'billing[fax]',
            fieldLabel:me.snippets.fax
        }, {
            name:'billingAttribute[text1]',
            fieldLabel:me.snippets.text1.label,
            supportText: me.snippets.text1.support,
            helpTitle: me.snippets.text1.helpTitle,
            helpText: me.snippets.text1.helpText
        }, {
            name:'billingAttribute[text2]',
            fieldLabel:me.snippets.text2.label,
            supportText: me.snippets.text2.support,
            helpTitle: me.snippets.text2.helpTitle,
            helpText: me.snippets.text2.helpText
        }, {
            name:'billingAttribute[text3]',
            fieldLabel:me.snippets.text3.label,
            supportText: me.snippets.text3.support,
            helpTitle: me.snippets.text3.helpTitle,
            helpText: me.snippets.text3.helpText
        }, {
            name:'billingAttribute[text4]',
            fieldLabel:me.snippets.text4.label,
            supportText: me.snippets.text4.support,
            helpTitle: me.snippets.text4.helpTitle,
            helpText: me.snippets.text4.helpText
        }, {
            name:'billingAttribute[text5]',
            fieldLabel:me.snippets.text5.label,
            supportText: me.snippets.text5.support,
            helpTitle: me.snippets.text5.helpTitle,
            helpText: me.snippets.text5.helpText
        }, {
            name:'billingAttribute[text6]',
            fieldLabel:me.snippets.text6.label,
            supportText: me.snippets.text6.support,
            helpTitle: me.snippets.text6.helpTitle,
            helpText: me.snippets.text6.helpText
        }];
    }
});
//
<?php }} ?>