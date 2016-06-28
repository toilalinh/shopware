<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/view/detail/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:8879801525770f0d72d9807-16160406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad54eca317407d3ad639a2b997c0548c55141955' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/view/detail/shipping.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8879801525770f0d72d9807-16160406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d7703d13_41432997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d7703d13_41432997')) {function content_5770f0d7703d13_41432997($_smarty_tpl) {?>/**
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
 * Shopware UI - Customer detail page
 *
 * The shipping field set contains the shipping address data of the customer
 * which is stored in the shipping model and filled over the s_user_shippingaddress table
 */
//
Ext.define('Shopware.apps.Customer.view.detail.Shipping', {
    /**
     * Define that the shipping field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.customer-shipping-field-set',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'shipping-field-set',
    /**
     * Enable field set collapse
     * @boolean
     */
    collapsible:true,
    /**
     * Marks that the field set is collapsed at the start.
     * @boolean
     */
    collapsed:true,
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
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alternate shipping address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        firstName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
First name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        lastName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        street:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Street<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
        country:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        state:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
State<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        company:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        department:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Department<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        text1: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_1_label','default'=>'Text 1','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_label','default'=>'Text 1','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_label','default'=>'Text 1','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_1_support','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_support','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_support','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_1_help_title','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_help_title','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_help_title','default'=>'Free text field 1','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_1_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_1_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_1_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_1_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_1_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_1_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text2: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_2_label','default'=>'Text 2','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_label','default'=>'Text 2','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_label','default'=>'Text 2','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_2_support','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_support','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_support','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_2_help_title','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_help_title','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_help_title','default'=>'Free text field 2','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_2_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_2_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_2_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_2_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_2_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_2_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text3: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_3_label','default'=>'Text 3','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_label','default'=>'Text 3','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_label','default'=>'Text 3','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_3_support','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_support','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_support','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_3_help_title','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_help_title','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_help_title','default'=>'Free text field 3','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_3_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_3_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_3_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_3_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_3_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_3_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text4: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_4_label','default'=>'Text 4','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_label','default'=>'Text 4','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_label','default'=>'Text 4','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_4_support','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_support','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_support','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_4_help_title','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_help_title','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_help_title','default'=>'Free text field 4','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_4_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_4_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_4_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_4_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_4_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_4_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text5: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_5_label','default'=>'Text 5','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_label','default'=>'Text 5','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_label','default'=>'Text 5','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_5_support','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_support','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_support','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_5_help_title','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_help_title','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 5<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_help_title','default'=>'Free text field 5','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_5_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_5_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_5_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_5_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_5_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_5_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        text6: {
            label:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_6_label','default'=>'Text 6','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_label','default'=>'Text 6','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 6<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_label','default'=>'Text 6','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_6_support','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_support','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 6<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_support','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_6_help_title','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_help_title','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text field 6<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_help_title','default'=>'Free text field 6','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'text_6_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_6_*','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_6_*','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_6_*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'text_6_help_text','default'=>'You can use the text module administration for the labelling of the text fields. Snippet: backend/customer/view/detail/shipping/text_6_*','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        copyBilling: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
For usability purposes, click here to use the billing address as the shipping address.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        copyButton: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copy data<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Component event method which is fired when the component
     * is initials. The component is initials when the user
     * want to create a new customer or edit an existing customer
     * @return void
     */
    initComponent:function () {
        var me = this;
        me.registerEvents();
        me.title = me.snippets.title;
        me.salutationData = [
            ['mr', me.snippets.salutation.mr],
            ['ms', me.snippets.salutation.ms]
        ];

        me.items = me.createShippingForm();

        me.callParent(arguments);
    },

    /**
     * Registers the component event "copyAddress" which is fired
     * by the "copy data" button.
     * @return void
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the "copy data" button
             * which is placed in the shipping field set on top.
             *
             * @event
             * @param [Ext.form.Panel] form - The form panel
             */
            'copyAddress',
            /**
             * Fired when the user changes his country. Used to fill the state box
             * @param field
             * @param newValue
             */
            'countryChanged'
        );
    },

    /**
     * Creates the three containers for the field set
     * to display the form fields in two columns.
     *
     * @return [Array] Contains the left and right container
     */
    createShippingForm:function () {
        var leftContainer, rightContainer, topContainer,  me = this;

        topContainer = Ext.create('Ext.container.Container', {
            columnWidth: 1,
            border: false,
            cls: Ext.baseCSSPrefix + 'field-set-container ' + Ext.baseCSSPrefix + 'copy-billing-container',
            items: me.createShippingFormTop()
        });

        leftContainer = Ext.create('Ext.container.Container', {
            columnWidth:.5,
            border:false,
            layout:'anchor',
            cls: Ext.baseCSSPrefix + 'field-set-container',
            defaults:{
                anchor:'100%',
                labelWidth:150,
                minWidth:250,
                xtype:'textfield'
            },
            items: me.createShippingFormLeft()
        });

        rightContainer = Ext.create('Ext.container.Container', {
            columnWidth:.5,
            border:false,
            layout:'anchor',
            cls: Ext.baseCSSPrefix + 'field-set-container',
            defaults:{
                anchor:'100%',
                labelWidth:100,
                xtype:'textfield'
            },
            items: me.createShippingFormRight()
        });

        return [ topContainer, leftContainer, rightContainer ];
    },

    /**
     * Creates the top container fo the shipping field set which contains the
     * "Transfer data" button to copy the billing address into the shipping address
     * @return [Array] - Contains the button description and the button to copy the billing address into the shipping address
     */
    createShippingFormTop: function() {
        var me = this;

        return [
            {
                xtype: 'container',
                anchor: '100%',
                border: false,
                cls: Ext.baseCSSPrefix + 'copy-billing-label',
                html: me.snippets.copyBilling
            },
            {
                xtype: 'button',
                iconCls: 'sprite-blue-document-copy',
                cls: Ext.baseCSSPrefix + 'copy-billing-button',
                text:me.snippets.copyButton,
                action: 'copy-data',
                handler:function () {
                    var form = me.up('form');
                    me.fireEvent('copyAddress', form);
                }
            }
        ];
    },

    /**
     * Creates the left container of the shipping field set.
     *
     * @return [Array] Contains the different form fields of the left container
     */
    createShippingFormLeft:function () {
        var me = this;
        me.countryCombo = Ext.create('Ext.form.field.ComboBox', {
            triggerAction:'all',
            editable:false,
            name:'shipping[countryId]',
            fieldLabel:me.snippets.country,
            forceSelection: true,
            valueField:'id',
            anchor:'100%',
            labelWidth:150,
            queryMode: 'local',
            minWidth:250,
            displayField:'name',
            listeners: {
                change: function(field, newValue, oldValue) {
                    me.fireEvent('countryChanged', field, newValue, me.countryStateCombo);
                }
            }
        });

        me.countryStateCombo = Ext.create('Ext.form.field.ComboBox', {
            name:'shipping[stateId]',
            action: 'shippingStateId',
            forceSelection: true,
            fieldLabel:me.snippets.state,
            valueField: 'id',
            displayField: 'name',
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
            name:'shipping[salutation]',
            fieldLabel:me.snippets.salutation.label,
            valueField:'text',
            displayField:'snippet',
            mode:'local',
            editable:false,
            store:new Ext.data.SimpleStore({
                fields:['text', 'snippet'], data:me.salutationData
            })
        }, {
            name:'shipping[firstName]',
            fieldLabel:me.snippets.firstName
        }, {
            name:'shipping[lastName]',
            fieldLabel:me.snippets.lastName
        }, {
            name:'shipping[street]',
            fieldLabel:me.snippets.street
        }, {
            name:'shipping[streetNumber]',
            fieldLabel:me.snippets.streetNumber
        }, {
            name:'shipping[zipCode]',
            fieldLabel:me.snippets.zipCode
        }, {
            name:'shipping[city]',
            fieldLabel:me.snippets.city
        },
            me.countryCombo,
            me.countryStateCombo,
        {
            name:'shipping[company]',
            fieldLabel:me.snippets.company
        }, {
            name:'shipping[department]',
            fieldLabel:me.snippets.department
        }];
    },

    /**
     * Creates the right container of the shipping field set.
     *
     * @return [Array] Contains the different form fields for the right container
     */
    createShippingFormRight:function () {
        var me = this;
        return [{
            name:'shippingAttribute[text1]',
            fieldLabel:me.snippets.text1.label,
            supportText: me.snippets.text1.support,
            helpTitle: me.snippets.text1.helpTitle,
            helpText: me.snippets.text1.helpText
        }, {
            name:'shippingAttribute[text2]',
            fieldLabel:me.snippets.text2.label,
            supportText: me.snippets.text2.support,
            helpTitle: me.snippets.text2.helpTitle,
            helpText: me.snippets.text2.helpText
        }, {
            name:'shippingAttribute[text3]',
            fieldLabel:me.snippets.text3.label,
            supportText: me.snippets.text3.support,
            helpTitle: me.snippets.text3.helpTitle,
            helpText: me.snippets.text3.helpText
        }, {
            name:'shippingAttribute[text4]',
            fieldLabel:me.snippets.text4.label,
            supportText: me.snippets.text4.support,
            helpTitle: me.snippets.text4.helpTitle,
            helpText: me.snippets.text4.helpText
        }, {
            name:'shippingAttribute[text5]',
            fieldLabel:me.snippets.text5.label,
            supportText: me.snippets.text5.support,
            helpTitle: me.snippets.text5.helpTitle,
            helpText: me.snippets.text5.helpText
        }, {
            name:'shippingAttribute[text6]',
            fieldLabel:me.snippets.text6.label,
            supportText: me.snippets.text6.support,
            helpTitle: me.snippets.text6.helpTitle,
            helpText: me.snippets.text6.helpText
        }];
    }
});
//
<?php }} ?>