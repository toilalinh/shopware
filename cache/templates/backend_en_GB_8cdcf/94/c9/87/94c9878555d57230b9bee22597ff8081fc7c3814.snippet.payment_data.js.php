<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/model/payment_data.js" */ ?>
<?php /*%%SmartyHeaderCode:1800384695770f0d64b6917-71601544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c9878555d57230b9bee22597ff8081fc7c3814' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/customer/model/payment_data.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800384695770f0d64b6917-71601544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d65023c4_92476864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d65023c4_92476864')) {function content_5770f0d65023c4_92476864($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Customer list backend module.
 *
 * The payment data model represents a single data row of the s_user_debit or
 * the Shopware\Models\Customer\PaymentData doctrine model which contains all data about the
 * customer payment data.
 */
//
Ext.define('Shopware.apps.Customer.model.PaymentData', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * Unique identifier field
     * @string
     */
    idProperty:'id',
    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'accountNumber', type:'string' },
        { name:'bankCode', type:'string' },
        { name:'bankName', type:'string' },
        { name:'accountHolder', type:'string' },
        { name:'bic', type:'string' },
        { name:'iban', type:'string' },
        { name:'useBillingData', type:'boolean' }
    ]
});
//
<?php }} ?>