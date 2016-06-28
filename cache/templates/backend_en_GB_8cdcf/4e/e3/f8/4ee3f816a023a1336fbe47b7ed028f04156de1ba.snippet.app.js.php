<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:37
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/app.js" */ ?>
<?php /*%%SmartyHeaderCode:19539630935770f0d5599b24-55893448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ee3f816a023a1336fbe47b7ed028f04156de1ba' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/app.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19539630935770f0d5599b24-55893448',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d5674c79_29872310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d5674c79_29872310')) {function content_5770f0d5674c79_29872310($_smarty_tpl) {?>/**
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
 * @subpackage App
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Order module
 *
 * Contains the configuration for the order backend module.
 * This component defines which controllers belong to the application or whether the bulk loading is activated.
 */
//
Ext.define('Shopware.apps.Order', {

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Order',

    /**
     * Extends from our special controller, which handles the sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',

    /**
     * Enable bulk loading
     * @boolean
     */
    bulkLoad:true,

    /**
     * Sets the loading path for the sub-application.
     *
     * @string
     */
    loadPath:'<?php echo '/backend/Order/load';?>',

    /**
     * Array of views to require from AppName.view namespace.
     * @array
     */
    views:[
        'main.Window',
        'detail.Window',
        'detail.Overview',
        'detail.Communication',
        'detail.Position',
        'detail.Document',
        'detail.Detail',
        'detail.Billing',
        'detail.Shipping',
        'detail.Debit',
        'detail.OrderHistory',
        'detail.Configuration',
        'list.Filter',
        'list.List',
        'list.Navigation',
        'list.Statistic',
        'list.Position',
        'list.Document',
        'batch.Window',
        'batch.Mail',
        'batch.Form',
        'batch.List',
        'batch.Progress'
    ],

    /**
     * Array of stores to require from AppName.store namespace.
     * @array
     */
    stores:[ 'OrderHistory', 'Order', 'Voucher', 'DocType', 'Statistic','Configuration', 'Batch', 'Tax',  'DetailBatch', 'ListBatch' ],

    /**
     * Array of models to require from AppName.model namespace.
     * @array
     */
    models:[
        'OrderHistory',
        'Order',
        'Attribute',
        'Billing',
        'Shipping',
        'Tax',
        'Debit',
        'Payment',
        'PaymentInstance',
        'Voucher',
        'Configuration',
        'Receipt',
        'ReceiptAttribute',
        'Position',
        'PositionAttribute',
        'Mail',
        'BillingAttribute',
        'ShippingAttribute',
        'Statistic',
        'DetailBatch',
        'ListBatch'
    ],

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers:[ 'Main', 'List', 'Filter', 'Detail', 'Batch' ],

    /**
     * Returns the main application window for this is expected
     * by the Enlight.app.SubApplication class.
     * The class sets a new event listener on the "destroy" event of
     * the main application window to perform the destroying of the
     * whole sub application when the user closes the main application window.
     *
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     *
     * @private
     * @return [object] mainWindow - the main application window based on Enlight.app.Window
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        me.getStore('Tax').load();
        return mainController.mainWindow;
    }
});
//

<?php }} ?>