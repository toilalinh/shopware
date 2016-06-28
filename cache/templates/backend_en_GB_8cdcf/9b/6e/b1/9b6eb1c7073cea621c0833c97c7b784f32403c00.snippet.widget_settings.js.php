<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:34
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/store/widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:11484303415770f0d28a3589-66633049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b6eb1c7073cea621c0833c97c7b784f32403c00' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/store/widget_settings.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11484303415770f0d28a3589-66633049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d28badf7_52800697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d28badf7_52800697')) {function content_5770f0d28badf7_52800697($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Index.store.WidgetSettings', {

	extend: 'Ext.data.Store',

	model: 'Shopware.apps.Index.model.WidgetSettings',

    proxy: {
        type: 'localstorage',
        id: 'widget-settings-' + window.location.pathname.replace('/backend/', '')
    }
});

//
<?php }} ?>