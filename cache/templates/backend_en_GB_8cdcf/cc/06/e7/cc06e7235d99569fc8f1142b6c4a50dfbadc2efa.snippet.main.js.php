<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:11875145635770f0d96b2cd2-48525905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc06e7235d99569fc8f1142b6c4a50dfbadc2efa' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/controller/main.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11875145635770f0d96b2cd2-48525905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d97179e4_67911447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d97179e4_67911447')) {function content_5770f0d97179e4_67911447($_smarty_tpl) {?>/**
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
 *
 * The order module main controller handles the initialisation of the order backend module.
 * It is possible to pass a order id to the module to open the detail window directly. To
 * open the detail window directly pass the order id in the parameter "orderId".
 */
//
Ext.define('Shopware.apps.Order.controller.Main', {

    /**
     * The parent class that this class extends.
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * Class property which holds the main application if it is created
     *
     * @default null
     * @object
     */
    mainWindow: null,

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @params orderId - The main controller can handle a orderId parameter to open the order detail page directly
     * @return void
     */
    init:function () {
        var me = this;

        if (me.subApplication && me.subApplication.params && Ext.isNumeric(me.subApplication.params.orderId)) {
            //open the order detail page with the passed order id
            var store = me.subApplication.getStore('Order');
            store.getProxy().extraParams.orderID = me.subApplication.params.orderId;
            store.load({
                callback:function (records) {
                    store.getProxy().extraParams.orderID = null;
                    var order = records[0];
                    me.showOrder(order);
                }
            });
        } else {
            var listStore = Ext.create('Shopware.apps.Order.store.ListBatch');
            listStore.load({
                callback:function (records) {
                    var record = records[0];
                    var stores = me.getAssociationStores(record);
                    //open the order listing window
                    me.mainWindow = me.getView('main.Window').create({
                        orderStatusStore: stores['orderStatusStore'],
                        paymentStatusStore: stores['paymentStatusStore'],
                        taxStore: me.getStore('Tax'),
                        statusStore: stores['statusStore'],
                        listStore: me.subApplication.getStore('Order').load(),
                        statisticStore: Ext.create('Shopware.apps.Order.store.Statistic').load()
                    });
                }
            });
        }

        me.callParent(arguments);
    },

    getAssociationStores: function(record) {
        var orderStatusStore = Ext.create('Shopware.apps.Base.store.OrderStatus');
        var paymentStatusStore = Ext.create('Shopware.apps.Base.store.PaymentStatus');
        var statusStore = Ext.create('Shopware.apps.Base.store.PositionStatus');

        orderStatusStore.add(record.raw.orderStatus);
        paymentStatusStore.add(record.raw.paymentStatus);
        statusStore.add(record.raw.positionStatus);

        var stores = [];
        stores['orderStatusStore'] = orderStatusStore;
        stores['statusStore'] = statusStore;
        stores['paymentStatusStore'] = paymentStatusStore;
        
        return stores;
    },

    /**
     * Global helper function which opens the passed order record
     * in the detail window.
     * This function is used from the listing controller event listener function
     * "onShowOrder" and from the main controller init() function when an order id passed
     * to the sub application.
     *
     * @param record
     */
    showOrder: function(record) {
        var me = this,
            batchStore = me.getStore('DetailBatch'),
            historyStore = me.getStore('OrderHistory'),
            billing, shipping, billingStore, shippingStore;

        batchStore.getProxy().extraParams = {
            orderId: record.get('id')
        };

        historyStore.getProxy().extraParams = {
            orderID: record.get('id')
        };

        batchStore.load({
            callback: function(records, operation) {
                var storeData = records[0];
                //when store has been loaded use the first record as data array to create the required stores

                if (operation.success === true) {
                    //prepare the associated stores to use them in the detail page
                    me.orderStatusStore =  storeData.getOrderStatus();
                    me.paymentStatusStore =  storeData.getPaymentStatus();
                    me.shopsStore = storeData.getShops();
                    me.countriesStore = storeData.getCountries();
                    me.paymentsStore = storeData.getPayments();
                    me.documentTypesStore = storeData.getDocumentTypes();

                    billingStore = record.getBilling();
                    if(!billingStore == null){
                        if (billingStore.getCount() === 0) {
                            billing = Ext.create('Shopware.apps.Order.model.Billing', {
                                orderId: record.get('id'),
                                countryId: null
                            });
                            billingStore.add(billing);
                        }
                        billing = billingStore.first();
                    }

                    shippingStore = record.getShipping();
                    if(shippingStore != null && billingStore != null) {
                        if (shippingStore.getCount() === 0) {
                            shipping = Ext.create('Shopware.apps.Order.model.Shipping', billing.data);
                            shippingStore.add(shipping);
                        }
                    }

                    me.getView('detail.Window').create({
                        record: record,
                        taxStore: me.getStore('Tax'),
                        statusStore: Ext.create('Shopware.store.PositionStatus').load(),
                        historyStore: historyStore.load(),
                        orderStatusStore: me.orderStatusStore,
                        paymentStatusStore:  me.paymentStatusStore,
                        shopsStore: me.shopsStore,
                        countriesStore: me.countriesStore,
                        paymentsStore: me.paymentsStore,
                        documentTypesStore: me.documentTypesStore

                    });

                }
            }
        });
    }
});
//
<?php }} ?>