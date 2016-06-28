<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/model/list.js" */ ?>
<?php /*%%SmartyHeaderCode:21064839275770f0d614dde7-92320589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94d67e8ae90cd72ef387a83d34d9d8982432d23' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/model/list.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21064839275770f0d614dde7-92320589',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d61f1fc9_89025340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d61f1fc9_89025340')) {function content_5770f0d61f1fc9_89025340($_smarty_tpl) {?>/**
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
 * @package    ArticleList
 * @subpackage Article
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * shopware AG (c) 2012. All rights reserved.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.ArticleList.model.List', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'articleId', type: 'int' },

        { name: 'number',   type: 'string' },
        { name: 'name',     type: 'string' },
        { name: 'supplier', type: 'string' },
        { name: 'additionalText', type: 'string' },

        { name: 'tax',      type: 'string' },
        { name: 'price',    type: 'string' },

        { name: 'active',   type: 'boolean' },
        { name: 'inStock',  type: 'int' },
        { name: 'imageSrc', type: 'string' },

        { name: 'hasVariants',      type: 'boolean' },
        { name: 'hasConfigurator',  type: 'boolean' },
        { name: 'hasCategories',    type: 'boolean' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            read:    '<?php echo '/backend/ArticleList/list';?>',
            update:  '<?php echo '/backend/ArticleList/update';?>',
            destroy: '<?php echo '/backend/ArticleList/delete';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>