<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:42
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/component/element/boolean.js" */ ?>
<?php /*%%SmartyHeaderCode:10120910795770ed92767520-17288218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d1d62b1a06d396b52115f966a436ab5f2c5c21d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/component/element/boolean.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10120910795770ed92767520-17288218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed927773f7_00031725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed927773f7_00031725')) {function content_5770ed927773f7_00031725($_smarty_tpl) {?>/*
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
 * @subpackage Component
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Boolean', {
    extend: 'Ext.form.field.Checkbox',
    alias: [
        'widget.base-element-boolean',
        'widget.base-element-checkbox'
    ],
    inputValue: true,
    uncheckedValue:false,

    initComponent: function () {
        var me = this;

        if(me.value) {
            me.setValue(!!me.value);
        }

        // Move support text to box label
        if(me.supportText) {
            me.boxLabel = me.supportText;
            delete me.supportText;
        } else if(me.helpText) {
            me.boxLabel = me.helpText;
            delete me.helpText;
        }

        me.callParent(arguments);
    }
});<?php }} ?>