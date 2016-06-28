<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/controller/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:4668656735770f0d9db6773-99526273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe57d22de8da6cc6d408a1e34f4348f986f2c257' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/controller/batch.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4668656735770f0d9db6773-99526273',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9f38fd6_38412031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9f38fd6_38412031')) {function content_5770f0d9f38fd6_38412031($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Controller - Order backend module

 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.controller.Batch', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend:'Ext.app.Controller',

   /**
    * all references to get the elements by the applicable selector
    */
    refs:[
        { ref:'orderListGrid', selector:'order-list-main-window order-list' },
        { ref:'batchWindow', selector:'order-batch-window' },
        { ref:'batchList', selector:'order-batch-window batch-list' },
        { ref:'mailPanel', selector:'order-batch-window batch-mail-panel' },
        { ref:'settingsPanel', selector:'order-batch-window batch-settings-panel' },
        { ref:'progressBar', selector:'order-progress-window progressbar' },
        { ref:'progressWindow', selector:'order-progress-window' },
        { ref:'closeButton', selector:'order-progress-window button[action=closeWindow]' },
        { ref:'cancelButton', selector:'order-progress-window button[action=cancel]' }
    ],

    /**
     * Contains all snippets for the this component
     * @object
     */
    snippets: {
        process: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress_bar','default'=>'Create document [0] of [1] ...','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress_bar','default'=>'Create document [0] of [1] ...','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create document [0] of [1] ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress_bar','default'=>'Create document [0] of [1] ...','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        done: {
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'done_message','default'=>'All documents have been created','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'done_message','default'=>'All documents have been created','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All documents have been created.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'done_message','default'=>'All documents have been created','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'done_title','default'=>'Document creation','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'done_title','default'=>'Document creation','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Document creation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'done_title','default'=>'Document creation','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        cancel: {
            brokenOrderMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'broken_order_message','default'=>'Document creation cancelled. The Order [0] contains inconsistent data','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'broken_order_message','default'=>'Document creation cancelled. The Order [0] contains inconsistent data','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Document creation cancelled. The order [0] contains inconsistent data.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'broken_order_message','default'=>'Document creation cancelled. The Order [0] contains inconsistent data','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_message','default'=>'Document creation cancelled','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_message','default'=>'Document creation cancelled','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Document creation [0] of [1] cancelled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_message','default'=>'Document creation cancelled','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_title','default'=>'Cancelled','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_title','default'=>'Cancelled','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancelled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_title','default'=>'Cancelled','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        mail: {
            successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sent_success_title','default'=>'Email has been sent to customer [0]','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_success_title','default'=>'Email has been sent to customer [0]','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An email has been sent.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_success_title','default'=>'Email has been sent to customer [0]','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sent_success_message','default'=>'Email sent to customer [0]','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_success_message','default'=>'Email sent to customer [0]','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An email has been sent to the customer [0].<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_success_message','default'=>'Email sent to customer [0]','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sent_error_title','default'=>'Email could not be sent.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_error_title','default'=>'Email could not be sent.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email could not be sent.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_error_title','default'=>'Email could not be sent.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            errorMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sent_error_message','default'=>'An error has occurred while sending the status mail:','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_error_message','default'=>'An error has occurred while sending the status mail:','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to send the status mail:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sent_error_message','default'=>'An error has occurred while sending the status mail:','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },

		growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage','default'=>'Order','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'Order','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Order<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'Order','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'

    },

    /**
     * Contains all possible status for the current batch process.
     * @object
     */
    processStatus: {
        waiting: 0,
        cancel: 1,
        working: 2,
        done: 3
    },

    /**
     * Internal helper property which contains the current status of the batch process.
     * Can contains one of the defined "processStatus" values. Switched in the following cases:
     * - User open the batch window => status initialed with "waiting"
     * - User starts the process => status changed to "working"
     * - User clicks the cancel button on the progress window => status changed to "cancel"
     * - The batch process are finished => status changed to "done"
     *
     * The queueProcess function checks if this status is set to "cancel" and abort the current document creation
     *
     * @int
     */
    currentStatus: 0,

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @return void
     */
    init:function () {
        var me = this;

        me.control({
            'order-batch-window': {
                changeLayout: me.onChangeLayout
            },
            'order-batch-window batch-settings-panel': {
                processChanges: me.onProcessChanges
            },
            'order-batch-window batch-mail-panel': {
                sendMail: me.onSendMail
            },
            'order-batch-window batch-list': {
                itemclick: me.onItemSelect
            },
            'order-progress-window': {
                cancelProcess: me.onCancelProcess
            }
        });
        me.callParent(arguments);
    },

    /**
     * Event listener method which is fired when the user select a grid row
     * @param grid
     * @param record
     */
    onItemSelect: function(view, record) {
        var me = this,
            mailPanel = me.getMailPanel(),
            mail = record.getMail().first();

        mailPanel.getForm().reset();
        if (mail instanceof Ext.data.Model) {
            mailPanel.loadRecord(mail);
        }
    },

    /**
     * Event listener method which is fired when the user change the layout over the
     * layout button which is displayed in the window toolbar.
     *
     * @param window
     * @param activeItem
     */
    onChangeLayout: function(window, activeItem) {
        var mailPanel = window.down('batch-mail-panel'),
            formPanel = window.down('batch-settings-panel'),
            grid = window.down('batch-list');

        if (activeItem.layout === 'easy') {
            window.setSize(530, '90%');
            formPanel.removeCls('layout-expert');
            formPanel.addCls('layout-easy');
            grid.hide();
            mailPanel.hide();
        } else {
            window.setSize(970, '90%');
            formPanel.removeCls('layout-easy');
            formPanel.addCls('layout-expert');
            grid.show();
            mailPanel.show();
        }
    },

    /**
     * Cancel the document creation.
     * @return void
     */
    onCancelProcess: function() {
        //if the current batch don't working enable the close button
        if (this.currentStatus !== this.processStatus.working) {
            this.refreshProgressWindow();
        }
        this.currentStatus = this.processStatus.cancel;
    },

    /**
     * Event listener method which is fired when the user clicks the "process changes" button
     * on the batch window to create documents for the selected orders or|and change the order or|and payment status.
     * @param form
     */
    onProcessChanges: function(form) {
        var me = this,
            orders = form.records,
            records = [],
            store, progressBar, resultStore,
            grid = me.getBatchList(),
            values = form.getValues();

        Ext.each(orders, function(order) {
            if (values.orderStatus !== Ext.undefined) {
                order.set('status', values.orderStatus);
            }
            if (values.paymentStatus !== Ext.undefined) {
                order.set('cleared', values.paymentStatus);
            }
            order.setDirty();
        });

        //create the batch store which is used to sent the batch request
        store = Ext.create('Shopware.apps.Order.store.Batch');

        //add the extra parameters for the document creation.
        store.getProxy().extraParams = {
            docType: values.documentType,
            mode: values.mode,
            forceTaxCheck: 1,
            displayDate: new Date(),
            deliveryDate: new Date(),
            autoSend: values.autoSendMail
        };

        //generate documents? display progress bar window
        if (!Ext.isEmpty(values.documentType)) {
            me.currentStatus = me.processStatus.working;
            me.getView('batch.Progress').create({
                count: orders.length
            });
            progressBar = me.getProgressBar();
            resultStore = Ext.create('Shopware.apps.Order.store.Batch');
            me.queueProcess(store, progressBar, orders, 0, resultStore);

        } else {
            grid.setLoading(true);
            store.add(orders);
            store.sync({
                callback: function(batch) {
                    var orderListGrid = me.getOrderListGrid(),
                        gridStore = orderListGrid.getStore(),
                        resultSet = batch.operations[0].resultSet.records;

                    store.removeAll();
                    store.add(resultSet);
                    grid.setLoading(false);
                    grid.reconfigure(store);

                    gridStore.load();
                }
            });
        }
    },

    /**
     * Internal helper function which allows an synchronous batch processing.
     * The function will add the order of the passed orders array based on the passed index
     * to the store and calls the store.sync() function. In the callback function of the store sync,
     * the function calls themselves.
     *
     * @param orders
     * @param index
     * @param progressBar
     * @param store
     * @param resultStore
     */
    queueProcess: function(store, progressBar, orders, index, resultStore) {
        var me = this,
            grid = me.getBatchList(),
            settings, values;

        if (index === orders.length) {
            //display finish update progress bar and display finish message
            progressBar.updateProgress((index+1)/orders.length, me.snippets.done.message, true);

            //reload the main order store to show the new generated documents on the detail page
            me.subApplication.getStore('Order').load();

            //display shopware notification message that the batch process finished
            Shopware.Notification.createGrowlMessage(me.snippets.done.title, me.snippets.done.message, me.snippets.growlMessage);

            //refresh the current batch status and enable the close window button.
            me.currentStatus = me.processStatus.done;
            me.refreshProgressWindow(orders);

            // Update the grid in order to set the new status or the mail
            grid.setLoading(false);
            grid.reconfigure(resultStore);

            // Merge documents if requested
            settings = me.getSettingsPanel();
            values = settings.getValues();
            if(values.createSingleDocument == true) {
                var orderIds = new Array();
                Ext.each(orders, function(order) {
                    orderIds.push(order.get('id'));
                });

                var data = Ext.encode ({
                    docType: values.documentType,
                    orders: orderIds
                });
                window.open('<?php echo '/backend/Order/mergeDocuments';?>' + '' + '?data=' + data);
            }


        } else {
            //updates the progress bar value and text, the last parameter is the animation flag
            progressBar.updateProgress((index+1)/orders.length, Ext.String.format(me.snippets.process, (index+1), orders.length), true);

            store.removeAll();

            //add the record to the store and sync the store to fire the ajax request
            store.add(orders[index]);
            store.sync({
                callback: function(batch) {
                    if(batch.operations[0].resultSet === Ext.undefined || batch.operations[0].resultSet.records === Ext.undefined) {
                        //update progress bar and display finish message
                        var brokenOrderMessage = Ext.String.format(me.snippets.cancel.brokenOrderMessage, orders[index].data.number);
                        progressBar.updateProgress(1, brokenOrderMessage, true);
                        me.refreshProgressWindow(orders);

                        return false;
                    }
                    // add the resulting record to our result store
                    var resultSet = batch.operations[0].resultSet.records;
                    resultStore.add(resultSet);
                    //checks if the user clicks the cancel button on the detail window.
                    if (me.currentStatus === me.processStatus.cancel) {

                        //update progress bar and display finish message
                        progressBar.updateProgress(1, me.snippets.cancel.message, true);

                        me.refreshProgressWindow(orders);

                        //display shopware notification growl message to display that the batch process canceled successfully
                        Shopware.Notification.createGrowlMessage(me.snippets.cancel.title, me.snippets.cancel.message, me.snippets.growlMessage);
                    } else {
                        //increase the array index and call recursive
                        me.queueProcess(store, progressBar, orders, index + 1, resultStore);
                    }
                }
            });
        }
    },



    /**
     * Internal helper function which called when the batch process finished or canceled.
     * Refresh the progress window elements. Enables the close window button, disable the cancel
     * process button and set the window loading to false.
     * @return void
     */
    refreshProgressWindow: function(orders) {
        var me = this,
            grid = me.getBatchList(),
            store = grid.getStore();

        if (orders.length > 0) {
            //refresh the grid panel with the changed orders
            store.removeAll();
            store.add(orders);
            grid.reconfigure(store);
        }

        //enable the close window button, disable loading mask and disable cancel button
        me.getCloseButton().setDisabled(false);
        me.getCancelButton().setDisabled(true);
        me.getProgressWindow().setLoading(false);
    },

    /**
     * Event listener method which is fired when the user clicks the "send email button" to send the displayed
     * email to the customer.
     * @param form
     */
    onSendMail: function(form) {
        var me = this,
            mail = form.getRecord();

        form.getForm().updateRecord(mail);
        mail.setDirty();

        mail.save({
            callback: function(record, operation) {
                var rawData = record.getProxy().getReader().rawData;

                if (operation.success === true) {
                    mail.set('set', true);
                    var message = Ext.String.format(me.snippets.mail.successMessage, mail.get('to'));
                    Shopware.Notification.createGrowlMessage(me.snippets.mail.successTitle, message, me.snippets.growlMessage);

                    //single mode will be set when the user change the order or payment status from the detail page.
                    if (form.mode === 'single') {
                        me.getBatchWindow().destroy();
                    }
                } else {
                    Shopware.Notification.createGrowlMessage(me.snippets.mail.errorTitle, me.snippets.mail.errorMessage + '<br>' + rawData.message, me.snippets.growlMessage);
                }
            }
        });
    }




});
//
<?php }} ?>