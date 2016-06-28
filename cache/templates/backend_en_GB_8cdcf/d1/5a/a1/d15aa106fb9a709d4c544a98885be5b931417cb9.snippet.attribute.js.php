<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/model/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:2680159205770f0d9b67f24-68777387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd15aa106fb9a709d4c544a98885be5b931417cb9' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/model/attribute.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680159205770f0d9b67f24-68777387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9b9efc5_05497841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9b9efc5_05497841')) {function content_5770f0d9b9efc5_05497841($_smarty_tpl) {?>/**
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
 * Shopware Model
 *
 * This Model is extended from the Ext.data.Model to add the category attributes
 *
 */
//
Ext.define('Shopware.apps.Category.model.Attribute', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.model.Category',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		//
        { name : 'id', type: 'int' },
        { name : 'categoryId', type: 'int', useNull: true },
        { name : 'attribute1', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute2', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute3', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute4', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute5', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute6', type: 'string', useNull:true, defaultValue: null }
    ]
});
//
<?php }} ?>