<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.MessageBox.js" */ ?>
<?php /*%%SmartyHeaderCode:14462144885770ed8f299b87-51452157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5f36d825f08cf1d837a4deeadbd42fd1215da5' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.MessageBox.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14462144885770ed8f299b87-51452157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f2adef4_53040442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f2adef4_53040442')) {function content_5770ed8f2adef4_53040442($_smarty_tpl) {?>/**
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
 * @package    ExtJS
 * @subpackage MessageBox
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */
Ext.override(Ext.MessageBox, {
    afterRender: function() {
        var me = this,
            toolbar = me.dockedItems.getAt(1);

        toolbar.addCls('shopware-toolbar');
        toolbar.setUI('shopware-ui');

        Ext.each(me.msgButtons, function(button) {
            if(button.itemId === 'ok' || button.itemId === 'yes') {
                button.addCls('primary')

            } else {
                button.addCls('secondary');
            }
        });

        me.callOverridden(arguments);
    }
})<?php }} ?>