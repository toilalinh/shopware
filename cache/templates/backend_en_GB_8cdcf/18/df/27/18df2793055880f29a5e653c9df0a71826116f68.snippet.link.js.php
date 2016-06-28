<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/model/link.js" */ ?>
<?php /*%%SmartyHeaderCode:11550004155770f0d6e571a0-47634809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18df2793055880f29a5e653c9df0a71826116f68' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/model/link.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11550004155770f0d6e571a0-47634809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d6e8e622_00817303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d6e8e622_00817303')) {function content_5770f0d6e8e622_00817303($_smarty_tpl) {?>/**
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
 * Shopware Model - Article backend module.
 *
 * shopware AG (c) 2012. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @date 2012-02-20
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Detail
 */
//
Ext.define('Shopware.apps.Article.model.Link', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    belongsTo: 'Shopware.apps.Article.model.Article',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'articleId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'link', type: 'string' },
        { name: 'target', type: 'boolean', defaultValue: true }

    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.LinkAttribute', name: 'getAttributes', associationKey: 'attribute'}
    ]
});
//
<?php }} ?>