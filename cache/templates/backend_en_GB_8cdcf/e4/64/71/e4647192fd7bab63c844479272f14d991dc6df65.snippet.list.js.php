<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/controller/list.js" */ ?>
<?php /*%%SmartyHeaderCode:9574707975770f0d8355154-86421201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4647192fd7bab63c844479272f14d991dc6df65' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/controller/list.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9574707975770f0d8355154-86421201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d84b3645_19037238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d84b3645_19037238')) {function content_5770f0d84b3645_19037238($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Controller - Customer list backend module
 *
 * The shopware customer list controller handles all actions around the customer list.
 * Listeners:
 *  - Remove selected => Fires when the user clicks on the toolbar button to remove the selected customers
 *  - Remove action column => Fires when the user clicks on the delete action column to remove a single customer
 *  - Search field => Fires when the user insert a search string into the search field to filter the grid store
 *  - Search combo box => Fires when the user select a customer group in the combo box to filter the grid store.
 */
//
Ext.define('Shopware.apps.Customer.controller.List', {

    /**
     * Defines that this component is a extJs controller extension
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * Set component references for easy access
     * @array
     */
    refs:[
        { ref:'grid', selector:'customer-list' }
    ],

    /**
     * Contains all snippets for the controller
     * @object
     */
    snippets:{
        singleDeleteTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_single_title','default'=>'Delete selected customer','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_title','default'=>'Delete selected customer','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_title','default'=>'Delete selected customer','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        singleDeleteMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_single_content','default'=>'Are you sure, you want to delete the selected customer: ','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_content','default'=>'Are you sure, you want to delete the selected customer: ','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected customer:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_content','default'=>'Are you sure, you want to delete the selected customer: ','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        multipleDeleteTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_multiple_title','default'=>'Delete selected customers','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_multiple_title','default'=>'Delete selected customers','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected customers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_multiple_title','default'=>'Delete selected customers','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        multipleDeleteMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_multiple_content','default'=>'There were marked [0] customers. Are you sure you want to delete all selected customers?','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_multiple_content','default'=>'There were marked [0] customers. Are you sure you want to delete all selected customers?','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There have been marked [0] customers. Are you sure you want to delete all selected customers?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_multiple_content','default'=>'There were marked [0] customers. Are you sure you want to delete all selected customers?','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteSuccessTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_success_message','default'=>'Successfully','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_message','default'=>'Successfully','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_message','default'=>'Successfully','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteSuccessMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_success_title','default'=>'Customer(s) has been removed','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_title','default'=>'Customer(s) has been removed','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer(s) has been removed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_title','default'=>'Customer(s) has been removed','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteErrorTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_error_title','default'=>'Failure','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_title','default'=>'Failure','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_title','default'=>'Failure','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteErrorMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_error_message','default'=>'During deleting an error has occurred:','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_message','default'=>'During deleting an error has occurred:','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to delete:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_message','default'=>'During deleting an error has occurred:','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
		growlMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'growlMessage','default'=>'Customer','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'growlMessage','default'=>'Customer','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
List<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'growlMessage','default'=>'Customer','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Init function of the controller which fires when the user want
     * to access the customer list module.
     * Registers the event listener for the grid action columns
     * and creates and show the customer list window.
     * @return void
     */
    init:function () {
        var me = this;

        //controls the event for the customer list (delete single/multiple customers)
        me.control({
            'customer-list button[action=deleteCustomer]':{
                click:me.onDeleteMultipleCustomers
            },
            'customer-list':{
                deleteColumn:me.onDeleteSingleCustomer
            },
            'customer-list textfield[name=searchfield]':{
                change:me.onSearchField
            },
            'customer-list combobox[name=customerGroupSearch]':{
                change:me.onSearchComboBox
            }
        });

        me.callParent(arguments);
    },

    /**
     * Event listener method which fires when the user use the
     * delete icon at the end of an grid row to delete a single customer.
     *
     * @param [object] view - The view
     * @param [integer] rowIndex - On which row position has been clicked
     * @return void
     */
    onDeleteSingleCustomer:function (view, rowIndex) {
        var me = this,
            store = me.subApplication.getStore('List'),
            record = store.getAt(rowIndex),
            customers = [record],
            message = me.snippets.singleDeleteMessage + ' ' + record.get('number'),
            title = me.snippets.singleDeleteTitle;

        me.deleteCustomers(customers, title, message);
    },

    /**
     * Event listener method which deletes multiple customers, fires when
     * the user make a selection over the grid column checkbox and clicks on
     * the toolbar button "delete selected customers"
     * @return void
     */
    onDeleteMultipleCustomers:function () {
        var me = this,
            grid = this.getGrid(),
            sm = grid.getSelectionModel(),
            customers = sm.getSelection(),
            noOfElements = customers.length,
            message = Ext.String.format(me.snippets.multipleDeleteMessage, noOfElements),
            title = me.snippets.multipleDeleteTitle;

        this.deleteCustomers(customers, title, message);
    },

    /**
     * Removes the passed customer array from the store, sends an ajax request to
     * the customer backend controller on the deleteCustomerAction function.
     *
     * @param customers Array of records
     * @param title     Title for the confirm message box
     * @param message   Message for the confirm message box
     * @return void
     */
    deleteCustomers:function (customers, title, message) {
        var me = this,
            counter = 0,
            store = me.subApplication.getStore('List');

        // we do not just delete - we are polite and ask the user if he is sure.
        Ext.MessageBox.confirm(title, message, function (response) {
            if ( response !== 'yes' ) {
                return;
            }
            Ext.each(customers, function (customer) {
                customer.destroy({
                    callback:function (data, operation) {
                        var records = operation.getRecords(),
                            record = records[0],
                            rawData = record.getProxy().getReader().rawData;

                        if ( operation.success === true ) {
                            Shopware.Notification.createGrowlMessage(me.snippets.deleteSuccessTitle, me.snippets.deleteSuccessMessage, me.snippets.growlMessage);
                        } else {
                            Shopware.Notification.createGrowlMessage(me.snippets.deleteErrorTitle, me.snippets.deleteErrorMessage + ' ' + rawData.message, me.snippets.growlMessage);
                        }
                        counter++;
                        if (counter >= customers.length) {
                            store.load();
                        }
                    }
                });
            });
        });
    },

    /**
     * Event listener method which is fired when the user
     * insert a search string into the text field which is placed
     * on top of the customer grid.
     * @param [object] field - Ext.field.Text which is displayed on the top of the customer grid
     * @return boolean
     */
    onSearchField:function (field) {
        var me = this,
            searchString = Ext.String.trim(field.value),
            store = me.subApplication.getStore('List');

        //scroll the store to first page
        store.currentPage = 1;

        //If the search-value is empty, reset the filter
        if ( searchString.length === 0 ) {
            store.clearFilter();
        } else {
            //This won't reload the store
            store.filters.clear();
            //Loads the store with a special filter
            store.filter('filter', searchString);
        }

        return true;
    },

    /**
     * Event listener method which is fired when the user
     * select a customer group over the combo box which is placed
     * on top of the customer grid.
     * @param [object] field - Ext.field.ComboBox which is displayed on the top of the customer grid
     * @return boolean
     */
    onSearchComboBox:function (field) {
        var me = this,
                searchString = field.value,
                store = me.subApplication.getStore('List');

        //scroll the store to the first page
        store.currentPage = 1;

        //refresh the customer group parameter and set the old filter parameter
        store.getProxy().extraParams = {
            customerGroup:searchString
        };

        //load store with the passed parameters
        store.load();

        return true;
    }

});
//
<?php }} ?>