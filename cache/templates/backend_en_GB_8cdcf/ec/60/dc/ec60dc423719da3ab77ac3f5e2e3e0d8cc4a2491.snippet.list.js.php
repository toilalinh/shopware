<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/view/list/list.js" */ ?>
<?php /*%%SmartyHeaderCode:20499502565770f0d7a9c641-53907089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec60dc423719da3ab77ac3f5e2e3e0d8cc4a2491' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/view/list/list.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20499502565770f0d7a9c641-53907089',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d7e05454_38179888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d7e05454_38179888')) {function content_5770f0d7e05454_38179888($_smarty_tpl) {?>/**
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
 * @subpackage List
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Customer list backend module
 * The customer list view displays the data of the list store.
 * One row displays the head data of a customer.
 */
//
Ext.define('Shopware.apps.Customer.view.list.List', {

    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend:'Ext.grid.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
    */
    alias:'widget.customer-list',

    /**
     * Set css class
     * @string
     */
    cls:Ext.baseCSSPrefix + 'customer-grid',

    /**
     * The view needs to be scrollable
     * @string
     */
    autoScroll:true,

    /**
     * Defaults for the grid panel.
     * @object
     */
    defaults: { flex: 1 },

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        columns:{
            number:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'number','default'=>'Customer number','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'number','default'=>'Customer number','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'number','default'=>'Customer number','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            firstName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
First name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'first_name','default'=>'First name','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            lastName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'last_name','default'=>'Last name','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            date:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'date','default'=>'Date','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'date','default'=>'Date','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'date','default'=>'Date','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customerGroup:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            company:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'company','default'=>'Company','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'company','default'=>'Company','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'company','default'=>'Company','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            zipCode:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'zip_code','default'=>'Zip code','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'zip_code','default'=>'Zip code','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zip code<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'zip_code','default'=>'Zip code','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            city:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'city','default'=>'City','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'city','default'=>'City','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'city','default'=>'City','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            orderCount:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'orderCount','default'=>'Number of orders','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'orderCount','default'=>'Number of orders','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Orders<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'orderCount','default'=>'Number of orders','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            sales:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'sales','default'=>'Turnover','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'sales','default'=>'Turnover','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turnover<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'sales','default'=>'Turnover','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            remove:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'delete','default'=>'Delete customer','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'delete','default'=>'Delete customer','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'delete','default'=>'Delete customer','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            edit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'detail','default'=>'Show customer details','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'detail','default'=>'Show customer details','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show customer details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'detail','default'=>'Show customer details','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        toolbar:{
            add:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'button_add','default'=>'Add','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'button_add','default'=>'Add','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'button_add','default'=>'Add','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            remove:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'button_delete','default'=>'Delete all selected','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'button_delete','default'=>'Delete all selected','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected customers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'button_delete','default'=>'Delete all selected','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customerGroup:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            groupEmpty:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'customer_group_empty','default'=>'Select...','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'customer_group_empty','default'=>'Select...','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'customer_group_empty','default'=>'Select...','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            search:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'search_empty_text','default'=>'Search...','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'search_empty_text','default'=>'Search...','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'search_empty_text','default'=>'Search...','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Initialize the Shopware.apps.Customer.view.main.List and defines the necessary
     * default configuration
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.registerEvents();
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            me.selModel = me.getGridSelModel();
        /*<?php }?>*/
        me.columns = me.getColumns();

        me.dockedItems = [ me.getToolbar(), me.getPagingBar() ];
        me.callParent(arguments);
    },

    /**
     * Defines additional events which will be
     * fired from the component
     *
     * @return void
     */
    registerEvents:function () {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the delete icon in the
             * action column
             *
             * @event deleteColumn
             * @param [object] View - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             * @param [object] item - Associated HTML DOM node
             */
            'deleteColumn',

            /**
             * Event will be fired when the user clicks the delete icon in the
             * action column
             *
             * @event deleteColumn
             * @param [object] View - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             * @param [object] item - Associated HTML DOM node
             */
            'editColumn'
        );
    },

    /**
     * Creates the grid columns
     *
     * @return [array] grid columns
     */
    getColumns:function () {
        var me = this;

        var columns = [{
            header:me.snippets.columns.number,
            dataIndex:'number',
            flex:1.5
        }, {
            header:me.snippets.columns.firstName,
            dataIndex:'firstName',
            flex: 1
        }, {
            header:me.snippets.columns.lastName,
            dataIndex:'lastName',
            flex: 1
        }, {
            header:me.snippets.columns.date,
            dataIndex:'firstLogin',
            flex:0.5,
            renderer:me.dateColumn
        }, {
            header:me.snippets.columns.customerGroup,
            dataIndex:'customerGroup',
            flex: 1
        }, {
            header:me.snippets.columns.company,
            dataIndex:'company',
            flex: 1
        }, {
            header:me.snippets.columns.zipCode,
            dataIndex:'zipCode',
            flex:0.5
        }, {
            header:me.snippets.columns.city,
            dataIndex:'city',
            flex: 1
        }, {
            header:me.snippets.columns.orderCount,
            dataIndex:'orderCount',
            flex: 1
        }, {
            header:me.snippets.columns.sales,
            dataIndex:'amount',
            flex: 1,
            renderer:me.salesColumn
        }, {
            /**
             * Special column type which provides
             * clickable icons in each row
             */
            xtype:'actioncolumn',
            width:70,
            items:[
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                {
                    iconCls:'sprite-minus-circle-frame',
                    action:'deleteCustomer',
                    tooltip:me.snippets.columns.remove,
                    handler:function (view, rowIndex, colIndex, item) {
                        me.fireEvent('deleteColumn', view, rowIndex, colIndex, item);
                    }
                } ,
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'detail'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
                {
                    iconCls:'sprite-pencil',
                    action:'editCustomer',
                    tooltip:me.snippets.columns.edit,
                    handler:function (view, rowIndex, colIndex, item) {
                        me.fireEvent('editColumn', view, rowIndex, colIndex, item);
                    }
                }
                /*<?php }?>*/
            ]
        }];

        return columns;
    },

    /**
     * Creates the grid selection model for checkboxes
     *
     * @return [Ext.selection.CheckboxModel] grid selection model
     */
    getGridSelModel:function () {
        var me = this;

        return Ext.create('Ext.selection.CheckboxModel', {
            listeners:{
                // Unlocks the save button if the user has checked at least one checkbox
                selectionchange:function (sm, selections) {
                    me.deleteCustomerButton.setDisabled(selections.length == 0);
                }
            }
        });
    },


    /**
     * Creates the grid toolbar with the add and delete button
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar:function () {
        var me = this;

        me.deleteCustomerButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-minus-circle-frame',
            text:me.snippets.toolbar.remove,
            disabled:true,
            action:'deleteCustomer'
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock:'top',
            ui: 'shopware-ui',
            items:[
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>*/
                {
                    iconCls:'sprite-plus-circle-frame',
                    text:me.snippets.toolbar.add,
                    action:'addCustomer'
                } ,
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>*/
                    me.deleteCustomerButton,
                /*<?php }?>*/
                {
                    xtype:'combobox',
                    triggerAction:'all',
                    name:'customerGroupSearch',
                    fieldLabel:me.snippets.toolbar.customerGroup,
                    store:Ext.create('Shopware.store.CustomerGroup').load(),
                    emptyText: me.snippets.toolbar.groupEmpty,
                    valueField:'id',
                    displayField:'name',
                    enableKeyEvents:true,
                    checkChangeBuffer:500,
                    marginRight:10
                },
                '->',
                {
                    xtype:'textfield',
                    name:'searchfield',
                    cls:'searchfield',
                    width:170,
                    emptyText:me.snippets.toolbar.search,
                    enableKeyEvents:true,
                    checkChangeBuffer:500
                },
                { xtype:'tbspacer', width:6 }
            ]
        });
    },

    /**
     * Creates the paging toolbar for the customer grid to allow
     * and store paging. The paging toolbar uses the same store as the Grid
     *
     * @return Ext.toolbar.Paging The paging toolbar for the customer grid
     */
    getPagingBar:function () {
        var me = this;

        return Ext.create('Ext.toolbar.Paging', {
            store:me.store,
            dock:'bottom',
            displayInfo:true
        });
    },

    /**
     * Formats the date column
     *
     * @param [string] - The order time value
     * @return [string] - The passed value, formatted with Ext.util.Format.date()
     */
    dateColumn:function (value) {
        return !value ? value : Ext.util.Format.date(value);
    },

    /**
     * Formats the sales column
     * @param [string] - The sales value
     * @return [string] - The passed value, formatted with Ext.util.Format.currency()
     */
    salesColumn:function (value) {
        return !value ? value : Ext.util.Format.currency(value);
    }

});
//

<?php }} ?>