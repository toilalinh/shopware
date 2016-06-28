<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/model/locale.js" */ ?>
<?php /*%%SmartyHeaderCode:3877548365770ed91334af5-04754122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682e3876bf8a6a4b93b0cd7f754a83542bc5a7cc' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/model/locale.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3877548365770ed91334af5-04754122',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed9135bd09_07847676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed9135bd09_07847676')) {function content_5770ed9135bd09_07847676($_smarty_tpl) {?>/**
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
 * Shopware UI - Global Stores and Models
 *
 * The dispatch model represents a data row of the s_premium_dispatch or the
 * Shopware\Models\Dispatch\Dispatch doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Locale', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: ['Shopware.model.Locales', 'Shopware.model.Locale'],

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

	/**
    * The fields used for this model
    * @array
    */
    fields: [
		//
        { name : 'id', type : 'int' },
        { name: 'name', type: 'string', convert: function(v, record) {
            return record.data.language + ' (' + record.data.territory + ')';
        } },
        { name: 'language', type : 'string' },
        { name: 'territory', type : 'string' },
        { name: 'locale', type : 'string' }
    ]
});
//
<?php }} ?>