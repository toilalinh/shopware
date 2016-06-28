<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:43
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/login/model/locale.js" */ ?>
<?php /*%%SmartyHeaderCode:7633613665770ed93976805-80228551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e56bfbc08ba6811713ebe12e36c8b461e6d3e531' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/login/model/locale.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7633613665770ed93976805-80228551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed9398c844_86916126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed9398c844_86916126')) {function content_5770ed9398c844_86916126($_smarty_tpl) {?>/**
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
 * @package    Login
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Backend - ErrorReporter Main Model
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Login.model.Locale', {
	extend: 'Ext.data.Model',
	fields: [ 'name', 'value' ],
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Login/getLocales';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});<?php }} ?>