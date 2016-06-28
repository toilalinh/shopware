<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/model/billing_address.js" */ ?>
<?php /*%%SmartyHeaderCode:12095053825770ed915b0543-26911905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de69a5bde02f3882eb47188c982d06c1f9c3fba8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/model/billing_address.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12095053825770ed915b0543-26911905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed915d2b19_26792356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed915d2b19_26792356')) {function content_5770ed915d2b19_26792356($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The billing address model is an extension of the base address model which contains the standard fields for
 * an shopware address.
 */
//
Ext.define('Shopware.apps.Base.model.BillingAddress', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.BillingAddress',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.Address',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        /**
         * the number field is an alias for the customer number
         */
        { name:'number', type:'string' },
        { name:'phone', type:'string' },
        { name:'fax', type:'string' },
        { name:'vatId', type:'string' }
    ]

});
//


<?php }} ?>