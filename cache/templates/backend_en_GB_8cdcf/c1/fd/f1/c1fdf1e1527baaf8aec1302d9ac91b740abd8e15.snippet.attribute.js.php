<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:44
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:19606846415770f118390541-43434284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1fdf1e1527baaf8aec1302d9ac91b740abd8e15' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/attribute.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19606846415770f118390541-43434284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f1183c7108_40468414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f1183c7108_40468414')) {function content_5770f1183c7108_40468414($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.Attribute', {
    extend:'Ext.data.Model',

    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'default',  type: 'string', useNull: true },
        { name: 'type',  type: 'string' },
        { name: 'store',  type: 'string', useNull: true },
        { name: 'label',  type: 'string', useNull: true },
        { name: 'required',  type: 'boolean' },
        { name: 'name',  type: 'string' },
        { name: 'help',  type: 'string', useNull: true },
        { name: 'variantable', type: 'boolean' },
        { name: 'translatable', type: 'boolean' },
        { name: 'position', type: 'int' }
    ]
});
//<?php }} ?>