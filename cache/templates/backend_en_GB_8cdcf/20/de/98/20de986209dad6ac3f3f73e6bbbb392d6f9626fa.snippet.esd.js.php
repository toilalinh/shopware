<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/model/esd.js" */ ?>
<?php /*%%SmartyHeaderCode:4620747795770f0d6ee5aa5-22155165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20de986209dad6ac3f3f73e6bbbb392d6f9626fa' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/model/esd.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4620747795770f0d6ee5aa5-22155165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d7048e86_02980353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d7048e86_02980353')) {function content_5770f0d7048e86_02980353($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Esd', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used  for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name' },
        { name: 'additionalText' },
        { name: 'date', type: 'date' },
        { name: 'hasSerials', type: 'boolean'},
        { name: 'serialsUsed', type: 'int' },
        { name: 'serialsTotal', type: 'int' },
        { name: 'downloads', type: 'int' },
        { name: 'file' }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.EsdAttribute', name: 'getAttributes', associationKey: 'attribute'}
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            read: '<?php echo '/backend/Article/getEsd';?>',
            create: '<?php echo '/backend/Article/addEsd';?>',
            update: '<?php echo '/backend/Article/saveEsd';?>',
            destroy: '<?php echo '/backend/Article/deleteEsd/targetField/details';?>'
        },

        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>