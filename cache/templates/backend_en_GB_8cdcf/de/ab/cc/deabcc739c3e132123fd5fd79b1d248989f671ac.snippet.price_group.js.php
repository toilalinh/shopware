<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:44
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/price_group.js" */ ?>
<?php /*%%SmartyHeaderCode:991963225770f1182ba1a4-31750042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deabcc739c3e132123fd5fd79b1d248989f671ac' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/price_group.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991963225770f1182ba1a4-31750042',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f1182ffcd0_70541352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f1182ffcd0_70541352')) {function content_5770f1182ffcd0_70541352($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.PriceGroup', {
    extend:'Ext.data.Model',

    fields:[
		//
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Config.model.form.PriceDiscount',
        name: 'getDiscounts',
        associationKey: 'discounts'
    }]
});
//
//
Ext.define('Shopware.apps.Config.model.form.PriceDiscount', {
    extend: 'Ext.data.Model',

    fields: [
		//
        { name: 'customerGroupId', convert: function(v, record) {
            return v || record.raw && record.raw.customerGroup && record.raw.customerGroup.id;
        } },
        { name: 'start', type: 'float' },
        { name: 'discount', type: 'float' }
    ]
});
//<?php }} ?>