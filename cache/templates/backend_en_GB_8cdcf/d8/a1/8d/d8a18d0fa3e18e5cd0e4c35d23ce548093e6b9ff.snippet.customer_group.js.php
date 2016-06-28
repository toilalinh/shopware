<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:44
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/customer_group.js" */ ?>
<?php /*%%SmartyHeaderCode:18081639285770f11827be51-89101430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a18d0fa3e18e5cd0e4c35d23ce548093e6b9ff' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/customer_group.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18081639285770f11827be51-89101430',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f1182b4c88_51743002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f1182b4c88_51743002')) {function content_5770f1182b4c88_51743002($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.form.CustomerGroup', {
    extend: 'Shopware.apps.Base.model.CustomerGroup',

    fields: [
		//
        { name: 'minimumOrder', type: 'float', useNull:true },
        { name: 'minimumOrderSurcharge', type: 'float', useNull:true },
        { name: 'deletable', type: 'boolean', convert: function(v, r) { return r.data.key != 'EK'; } }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Config.model.form.CustomerDiscount',
        name: 'getDiscounts',
        associationKey: 'discounts'
    }]
});
//
//
Ext.define('Shopware.apps.Config.model.form.CustomerDiscount', {
    extend: 'Ext.data.Model',

    fields: [
        'discount', 'value'
    ]
});
//<?php }} ?>