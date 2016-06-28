<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/model/template.js" */ ?>
<?php /*%%SmartyHeaderCode:1986165415770f0d9b355d4-54676272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7c06dedfadc6a88c2bd65e0c0601a15436540d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/model/template.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986165415770f0d9b355d4-54676272',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9b602c8_52941644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9b602c8_52941644')) {function content_5770f0d9b602c8_52941644($_smarty_tpl) {?>/**
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
 * @package    Category
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware Model - Template settings
 * 
 * Model to access the settings for category templates aka sCATEGORYTEMPLATES
 */
//
Ext.define('Shopware.apps.Category.model.Template', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * If the name of the field is 'id' extjs assumes automatically that
     * this field is an unique identifier.
     * @integer
     */
    idProperty : 'template',
    /**
     * The fields used for this model
     * @array
     */
    fields:[
		// 
        { name : 'template', type: 'string' },
        { name : 'name', type: 'string' } 
    ]
});

//
<?php }} ?>