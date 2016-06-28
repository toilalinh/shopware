<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:33
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/model/merchant.js" */ ?>
<?php /*%%SmartyHeaderCode:16702285615770f0d1c7ad59-39466503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27a9f44e1540ec47c06a7067ffcbdb5fb9d3eca' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/model/merchant.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16702285615770f0d1c7ad59-39466503',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d1ca74f3_83203777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d1ca74f3_83203777')) {function content_5770f0d1ca74f3_83203777($_smarty_tpl) {?>/**
 * Shopware 4
 * Copyright © shopware AG
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
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.model.Merchant', {
	extend: 'Ext.data.Model',
	fields: [
		//
        { name: 'id' },
        { name: 'company_name' },
        { name: 'customer' },
        { name: 'email' },
        { name: 'customergroup' },
        { name: 'customergroup_name' },
        { name: 'customergroup_id' },
        { name: 'date', type: 'date', dateFormat:'Y-m-d H:i:s' },
        { name: 'validation' }
    ]
});
//<?php }} ?>