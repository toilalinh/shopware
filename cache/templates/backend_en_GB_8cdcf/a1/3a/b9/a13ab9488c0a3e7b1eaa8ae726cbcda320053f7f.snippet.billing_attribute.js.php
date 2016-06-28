<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/model/billing_attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:14089928985770f0d6d3d1d4-79751980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a13ab9488c0a3e7b1eaa8ae726cbcda320053f7f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/model/billing_attribute.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14089928985770f0d6d3d1d4-79751980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d6d85ce5_60936381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d6d85ce5_60936381')) {function content_5770f0d6d85ce5_60936381($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 */
//
Ext.define('Shopware.apps.Order.model.BillingAttribute', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'orderBillingId', type: 'int', useNull: true },
        { name: 'text1', type: 'string', useNull: true },
        { name: 'text2', type: 'string', useNull: true },
        { name: 'text3', type: 'string', useNull: true },
        { name: 'text4', type: 'string', useNull: true },
        { name: 'text5', type: 'string', useNull: true },
        { name: 'text6', type: 'string', useNull: true }
    ]
});
//

<?php }} ?>