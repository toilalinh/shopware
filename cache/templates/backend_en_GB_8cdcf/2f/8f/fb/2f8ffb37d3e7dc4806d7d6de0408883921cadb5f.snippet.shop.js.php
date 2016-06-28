<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:44
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/shop.js" */ ?>
<?php /*%%SmartyHeaderCode:11863223485770f11810b602-39713569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f8ffb37d3e7dc4806d7d6de0408883921cadb5f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/shop.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11863223485770f11810b602-39713569',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f1181756e8_67026225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f1181756e8_67026225')) {function content_5770f1181756e8_67026225($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.Shop', {
    extend:'Ext.data.Model',

    fields: [
		//
        { name: 'id', type:'int', useNull: true, defaultValue: null },
        { name: 'name', type: 'string' },
        { name: 'title', type: 'string', useNull: true },
        { name: 'position', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'default', type: 'boolean', defaultValue: false },
        { name: 'active', type: 'boolean', defaultValue: true },
        { name: 'host', type: 'string', useNull: true },
        { name: 'basePath', type: 'string', useNull: true },
        { name: 'baseUrl', type: 'string', useNull: true },
        { name: 'secure', type: 'boolean' },
        { name: 'alwaysSecure', type: 'boolean' },
        { name: 'secureHost', type: 'string', useNull: true },
        { name: 'secureBasePath', type: 'string', useNull: true },
        { name: 'hosts', type: 'string', useNull: true },

        { name: 'customerScope', type: 'boolean' },
        //{ name: 'flag', type: 'string', useNull: true },
        //{ name: 'switchLanguages', type: 'string' },
        //{ name: 'separateNumbers', type: 'boolean' },

        // Use "convert" because "mappping" not working with "useNull"
        { name: 'mainId', convert: function(v, record) {
            return v || record.raw && record.raw.main && record.raw.main.id;
        }, useNull: true, defaultValue: 1 },
        { name: 'localeId', convert: function(v, record) {
            return v || record.raw && record.raw.locale && record.raw.locale.id;
        }, useNull: true },
        { name: 'currencyId', convert: function(v, record) {
            return v || record.raw && record.raw.currency && record.raw.currency.id;
        }, useNull: true },
        { name: 'categoryId', convert: function(v, record) {
            return v || record.raw && record.raw.category && record.raw.category.id;
        }, useNull: true },
        { name: 'templateId', convert: function(v, record) {
            return v || record.raw && record.raw.template && record.raw.template.id;
        }, useNull: true },
        { name: 'documentTemplateId', convert: function(v, record) {
            return v || record.raw && record.raw.documentTemplate && record.raw.documentTemplate.id;
        }, useNull: true },
        { name: 'customerGroupId', convert: function(v, record) {
            return v || record.raw && record.raw.customerGroup && record.raw.customerGroup.id;
        }, useNull: true },
        { name: 'fallbackId', convert: function(v, record) {
            return v || record.raw && record.raw.fallback && record.raw.fallback.id;
        }, useNull: true },
        { name: 'deletable', type: 'boolean', convert: function(v, r) { return r.data.id > 2; } }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Base.model.Currency',
        name: 'getCurrencies',
        associationKey: 'currencies'
    }, {
        type: 'hasMany',
        model: 'Shopware.apps.Config.model.form.PageGroup',
        name: 'getPages',
        associationKey: 'pages'
    }]
});
//<?php }} ?>