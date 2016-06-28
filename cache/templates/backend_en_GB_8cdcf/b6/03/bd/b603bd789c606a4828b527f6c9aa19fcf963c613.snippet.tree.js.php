<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:42
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/store/tree.js" */ ?>
<?php /*%%SmartyHeaderCode:4841063575770f0da61def0-87920639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b603bd789c606a4828b527f6c9aa19fcf963c613' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/store/tree.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4841063575770f0da61def0-87920639',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0da6388d4_08302807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0da6388d4_08302807')) {function content_5770f0da6388d4_08302807($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - for the Category backend module.
 *
 * The tree store loads and stores the tree data
 */
//
Ext.define('Shopware.apps.Category.store.Tree', {
    /**
     * Define that this component is an extension of the Ext.data.TreeStore
     */
    extend : 'Ext.data.TreeStore',

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Category.model.Tree'
});
//
<?php }} ?>