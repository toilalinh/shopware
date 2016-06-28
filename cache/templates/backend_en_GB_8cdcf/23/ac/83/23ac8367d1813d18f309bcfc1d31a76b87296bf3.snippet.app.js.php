<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:37
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/app.js" */ ?>
<?php /*%%SmartyHeaderCode:5168443695770f0d5559a71-85854550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ac8367d1813d18f309bcfc1d31a76b87296bf3' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/app.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5168443695770f0d5559a71-85854550',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d5626f47_19556138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d5626f47_19556138')) {function content_5770f0d5626f47_19556138($_smarty_tpl) {?>/**
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
 * @subpackage App
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Customer list backend module
 *
 * Contains the configuration for the customer list backend module.
 * This component defines which controllers belong to the application or whether the bulk loading is activated.
 */
//
Ext.define('Shopware.apps.Customer', {

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Customer',

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
    loadPath:'<?php echo '/backend/customer/load';?>',

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers:[ 'Main', 'List', 'Detail', 'Order' ],

    /**
     * The detail controller knows all form field sets and the detail window component
     * @array
     */
    views:[
        'detail.Window',
        'detail.Base',
        'detail.Billing',
        'detail.Shipping',
        'detail.Debit',
        'detail.Comment',
        'detail.Additional' ,
        'list.List',
        'main.Window',
        'order.List',
        'order.Chart'
    ],

    /**
     * All required stores are defined here. The detail store contains all data around the customer.
     * The other shops are global stores which used for combo boxes.
     * @array
     */
    stores:[ 'Detail', 'List', 'Orders', 'Chart', 'Batch' ],

    /**
     * All store's required models. The detail store handles the base, billing, shipping and debit model.
     * @array
     */
    models:[ 'Customer', 'Billing', 'Shipping', 'Debit', 'PaymentData', 'List', 'Order', 'Chart', 'BillingAttributes', 'ShippingAttributes', 'Attribute', 'Batch'  ],

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

        return mainController.mainWindow;
    }
});
//

<?php }} ?>