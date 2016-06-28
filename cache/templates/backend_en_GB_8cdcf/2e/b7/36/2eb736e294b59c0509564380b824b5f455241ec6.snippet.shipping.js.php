<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/detail/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:7687072405770f0d7c91fe6-93891852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb736e294b59c0509564380b824b5f455241ec6' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/detail/shipping.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7687072405770f0d7c91fe6-93891852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d7f29476_94113973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d7f29476_94113973')) {function content_5770f0d7f29476_94113973($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order detail page
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.detail.Shipping', {
    /**
     * Define that the shipping field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-shipping-field-set',
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
    collapsed:false,

    /**
     * Layout of the component.
     * @string
     */
    layout: 'column',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alternative shipping address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        firstName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
First name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        lastName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        street:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Street<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        streetNumber:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'street_number','default'=>'Street number','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street_number','default'=>'Street number','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Street number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street_number','default'=>'Street number','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        zipCode:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zip code<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        city:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        salutation:{
            label:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Salutation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            mr:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation_mr','default'=>'Mr','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_mr','default'=>'Mr','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mr<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_mr','default'=>'Mr','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            ms:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation_ms','default'=>'Mrs','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_ms','default'=>'Mrs','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation_ms','default'=>'Mrs','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        country:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        company:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        department:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Department<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        copyBilling: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
For usability purposes, click here to use the billing address as the shipping address.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        copyButton: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copy data<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
	 */
    initComponent:function () {
        var me = this;
        me.title = me.snippets.title;
        me.salutationData = [
            ['mr', me.snippets.salutation.mr],
            ['ms', me.snippets.salutation.ms]
        ];

        me.items = me.createElements();
        me.callParent(arguments);
    },

    /**
     * Creates the three containers for the field set
     * to display the form fields in two columns.
     *
     * @return [Array] Contains the left and right container
     */
    createElements:function () {
        var leftContainer, rightContainer, me = this;

        leftContainer = Ext.create('Ext.container.Container', {
            columnWidth:.5,
            border:false,
            layout:'anchor',
            defaults:{
                anchor:'95%',
                labelWidth: 120,
                minWidth:250,
                labelStyle: 'font-weight: 700;',
                style: {
                    margin: '0 0 10px'
                },
                xtype:'textfield'
            },
            items:me.createLeftElements()
        });

        rightContainer = Ext.create('Ext.container.Container', {
            columnWidth:.5,
            border:false,
            layout:'anchor',
            defaults:{
                anchor:'95%',
                labelWidth: 120,
                minWidth:250,
                labelStyle: 'font-weight: 700;',
                style: {
                    margin: '0 0 10px'
                },
                xtype:'textfield'
            },
            items:me.createRightElements()
        });

        return [ leftContainer, rightContainer ];
    },


    /**
     * Creates the left container of the shipping field set.
     *
     * @return [Array] Contains the different form fields of the left container
     */
    createLeftElements:function () {
        var me = this;
        return [{
            xtype:'combobox',
            queryMode: 'local',
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
        }];
    },

    /**
     * Creates the right container of the shipping field set.
     *
     * @return [Array] Contains the different form fields for the right container
     */
    createRightElements:function () {
        var me = this;
        return [{
            name:'shipping[zipCode]',
            fieldLabel:me.snippets.zipCode
        }, {
            name:'shipping[city]',
            fieldLabel:me.snippets.city
        }, {
            xtype:'combobox',
            queryMode: 'local',
            triggerAction:'all',
            editable:false,
            name:'shipping[countryId]',
            fieldLabel:me.snippets.country,
            store: me.countriesStore,
            valueField:'id',
            displayField:'name'
        }, {
            name:'shipping[company]',
            fieldLabel:me.snippets.company
        }, {
            name:'shipping[department]',
            fieldLabel:me.snippets.department
        }];
    }
});
//
<?php }} ?>