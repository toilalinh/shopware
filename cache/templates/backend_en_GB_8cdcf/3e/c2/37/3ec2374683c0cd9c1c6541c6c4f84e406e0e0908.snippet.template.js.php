<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/template.js" */ ?>
<?php /*%%SmartyHeaderCode:12192200545770f10a56e8a7-07732436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec2374683c0cd9c1c6541c6c4f84e406e0e0908' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/template.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12192200545770f10a56e8a7-07732436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a5b66e7_62743874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a5b66e7_62743874')) {function content_5770f10a5b66e7_62743874($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.Template', {
    extend: 'Shopware.apps.Base.model.Template',

    fields: [
		//
        { name: 'description', type : 'string', useNull: true },
        { name: 'author', type : 'string', useNull: true },
        { name: 'license', type : 'string', useNull: true },
        { name: 'esi', type : 'boolean' },
        { name: 'styleSupport', type : 'boolean' },
        { name: 'emotion', type : 'boolean' },
        { name: 'enabled', type : 'boolean' },
        { name: 'preview', type : 'boolean' },
        { name: 'previewThumb', type : 'string', useNull: true },
        { name: 'previewFull', type : 'string', useNull: true }
    ]
});
//<?php }} ?>