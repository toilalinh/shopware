<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:33
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/view/main.js" */ ?>
<?php /*%%SmartyHeaderCode:17849401075770f0d1ccbf04-43240987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b45bf57a2378a31753aebb0bdda8b9117d9f01e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/view/main.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17849401075770f0d1ccbf04-43240987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d1cd8e66_05224530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d1cd8e66_05224530')) {function content_5770f0d1cd8e66_05224530($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.view.Main', {
	extend: 'Ext.panel.Panel',
	alias: 'widget.index-desktoppanel',
    cls: 'main-backend-holder',
    border: false,
    plain: true,
    frame: false,
    region: 'center',
    layout: 'fit',
    bodyStyle: 'background: transparent'
});
<?php }} ?>