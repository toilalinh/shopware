<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:43
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/login/view/main.js" */ ?>
<?php /*%%SmartyHeaderCode:18674613595770ed93991545-84675090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3483bf8f21fa934da3c441b6064d8fb962081b5b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/login/view/main.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18674613595770ed93991545-84675090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed9399db94_32674545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed9399db94_32674545')) {function content_5770ed9399db94_32674545($_smarty_tpl) {?>/**
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
 * @subpackage Main
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Login.view.Main', {
    extend: 'Ext.window.Window',
    width: 476,
    height: 321,
    ui: 'shopware-ui',
    cls: 'login-window',
    shadow: false,
    preventHeader: true,
    footerButton: false,
    border: false,
    resizable: false,
    maximizable: false,
    plain: true,
    header: false,

    /**
     * Initialize the component and bind an event listener to
     * the `onWindowResize` to center the window.
     *
     * @returns { Void }
     */
    initComponent: function() {
        var me = this;

        me.callParent();

        Ext.EventManager.onWindowResize(function() { me.center(); })
    }
});
<?php }} ?>