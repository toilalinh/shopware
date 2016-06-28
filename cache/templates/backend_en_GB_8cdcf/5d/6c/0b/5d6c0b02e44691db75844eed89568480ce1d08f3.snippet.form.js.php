<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/main/form.js" */ ?>
<?php /*%%SmartyHeaderCode:20549864365770f10a689d40-14203811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6c0b02e44691db75844eed89568480ce1d08f3' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/main/form.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20549864365770f10a689d40-14203811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a6d94c8_01175803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a6d94c8_01175803')) {function content_5770f10a6d94c8_01175803($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.main.Form', {
    extend: 'Ext.data.Model',

    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'label', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' }
    ],

    associations: [
        {
        type: 'hasMany', model: 'Shopware.apps.Config.model.main.Element',
        name: 'getElements', associationKey: 'elements'
    },
    {
        type: 'hasMany', model: 'Shopware.apps.Config.model.main.FormTranslation',
        name: 'getTranslation', associationKey: 'translations'
    }
    ]
});
//<?php }} ?>