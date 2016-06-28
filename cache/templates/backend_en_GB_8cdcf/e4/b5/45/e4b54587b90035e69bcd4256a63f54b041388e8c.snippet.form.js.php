<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/batch/form.js" */ ?>
<?php /*%%SmartyHeaderCode:2348062905770f0d9222684-52941136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b54587b90035e69bcd4256a63f54b041388e8c' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/batch/form.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2348062905770f0d9222684-52941136',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d939e1c7_10051739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d939e1c7_10051739')) {function content_5770f0d939e1c7_10051739($_smarty_tpl) {?>/**
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
 * Shopware UI - Order batch window
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.batch.Form', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.form.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.batch-settings-panel',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'batch-settings-panel',

    autoScroll: true,

    layout: {
        align: 'stretch',
        type: 'vbox'
    },

    bodyPadding: 10,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        info: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'info','default'=>'Caution: If you have selected orders with an already existing receipt, these will be regenerated. Click on print receipts only if all selected orders have already been transformed into receipts.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'info','default'=>'Caution: If you have selected orders with an already existing receipt, these will be regenerated. Click on print receipts only if all selected orders have already been transformed into receipts.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Note: If you select orders with an existing receipt, these will be regenerated. Click on print receipts ONLY if all selected orders have already been transformed into receipts.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'info','default'=>'Caution: If you have selected orders with an already existing receipt, these will be regenerated. Click on print receipts only if all selected orders have already been transformed into receipts.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        mode: {
            label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'mode','default'=>'Mode','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'mode','default'=>'Mode','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'mode','default'=>'Mode','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            override: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'override','default'=>'Recreate all documents','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'override','default'=>'Recreate all documents','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recreate all documents<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'override','default'=>'Recreate all documents','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            notExist: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'not_exist','default'=>'Create only not existing documents','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'not_exist','default'=>'Create only not existing documents','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create only non-existing documents<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'not_exist','default'=>'Create only not existing documents','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        documentType: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'document_type','default'=>'Document type','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'document_type','default'=>'Document type','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Document type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'document_type','default'=>'Document type','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        paymentStatus: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'payment_status','default'=>'Payment status','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'payment_status','default'=>'Payment status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Payment status<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'payment_status','default'=>'Payment status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        orderStatus: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'order_status','default'=>'Order status','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'order_status','default'=>'Order status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Order status<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'order_status','default'=>'Order status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        mail: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'auto_send','default'=>'Send emails automatically','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'auto_send','default'=>'Send emails automatically','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send emails automatically<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'auto_send','default'=>'Send emails automatically','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        generate: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'process','default'=>'Process changes','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'process','default'=>'Process changes','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Process changes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'process','default'=>'Process changes','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        gridTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'grid_title','default'=>'Selected orders','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'grid_title','default'=>'Selected orders','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Selected orders<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'grid_title','default'=>'Selected orders','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        settingsFieldSetLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'field_set_label','default'=>'Settings to generate','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'field_set_label','default'=>'Settings to generate','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings to be generated<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'field_set_label','default'=>'Settings to generate','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        oneDocument: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'one_document','default'=>'Create single document','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'one_document','default'=>'Create single document','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create single document<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'one_document','default'=>'Create single document','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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

        me.registerEvents();

        me.modeData = [
            [0, me.snippets.mode.override],
            [1, me.snippets.mode.notExist]
        ];
        me.items = [
            me.createInfoContainer(),
            me.createSettingsContainer(),
            me.createOrderGrid()
        ];
        me.addCls('layout-expert');
        me.callParent(arguments);
    },

    /**
     *
     */
    registerEvents: function() {
        this.addEvents(

            /**
             * Event will be fired when the user clicks the "generate documents" button which is
             * displayed within the form field set.
             *
             * @event
             * @param [Ext.form.Panel] - This component
             */
            'processChanges'
        );
    },

    /**
     * Creates the info container which is displayed on top of the form.
     * @return Ext.container.Container
     */
    createInfoContainer: function() {
        var me = this;

        return Ext.create('Ext.container.Container', {
            html: me.snippets.info,
            style: 'color: #999; font-style: italic; margin: 0 0 15px 0;'
        });
    },

    /**
     *
     */
    createSettingsContainer: function() {
        var me = this, flex = 0;

        if (me.mode === 'single') {
            flex = 1;
        }

        return Ext.create('Ext.form.FieldSet', {
            title: me.snippets.settingsFieldSetLabel,
            layout: 'anchor',
            flex: flex,
            defaults: {
                labelWidth: 150,
                xtype: 'combobox',
                anchor: '100%'
            },
            items: [
                {
                    name: 'documentType',
                    triggerAction: 'all',
                    fieldLabel: me.snippets.documentType,
                    store: Ext.create('Shopware.apps.Order.store.DocType'),
                    displayField: 'name',
                    valueField: 'id'
                },
                {
                    name: 'mode',
                    triggerAction: 'all',
                    fieldLabel: me.snippets.mode.label,
                    store:new Ext.data.SimpleStore({
                        fields:['value', 'description'], data: me.modeData
                    }),
                    displayField: 'description',
                    valueField: 'value'
                },
                {
                    name: 'orderStatus',
                    triggerAction: 'all',
                    queryMode: 'local',
                    fieldLabel: me.snippets.orderStatus,
                    store: me.orderStatusStore,
                    displayField: 'description',
                    valueField: 'id'
                },
                {
                    xtype: 'pagingcombo',
                    pageSize: 5,
                    name: 'paymentStatus',
                    triggerAction: 'all',
                    fieldLabel: me.snippets.paymentStatus,
                    store: Ext.create('Shopware.store.PaymentStatus', { pageSize: 5 }),
                    displayField: 'description',
                    valueField: 'id'
                },
                {
                    xtype: 'checkbox',
                    fieldLabel: me.snippets.mail,
                    checked: true,
                    inputValue: true,
                    uncheckedValue: false,
                    name: 'autoSendMail'
                },
                {
                    xtype: 'checkbox',
                    fieldLabel: me.snippets.oneDocument,
                    checked: false,
                    inputValue: true,
                    uncheckedValue: false,
                    name: 'createSingleDocument'
                },
                {
                    xtype: 'button',
                    margin: '15 0',
                    cls: 'primary',
                    text: me.snippets.generate,
                    handler: function() {
                        me.fireEvent('processChanges', me)
                    }
                }
            ]
        });
    },

    /**
     * Creates the grid which contains all selected orders and display if the mail is already sent and the current order
     * and payment status.
     */
    createOrderGrid: function() {
        var me = this;

        var store = Ext.create('Ext.data.Store', {
            model: 'Shopware.apps.Order.model.Order',
            data: me.records
        });

        return Ext.create('Shopware.apps.Order.view.batch.List', {
            flex: 1,
            title: me.snippets.gridTitle,
            store: store
        });
    }

});
//
<?php }} ?>