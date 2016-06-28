<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/components/Enlight.app.SubWindow.js" */ ?>
<?php /*%%SmartyHeaderCode:15828062855770ed8f3e5301-11438560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0160f7982d3f6522854176e55fc35dd12d97f7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/components/Enlight.app.SubWindow.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15828062855770ed8f3e5301-11438560',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f3ec3f7_99260281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f3ec3f7_99260281')) {function content_5770ed8f3ec3f7_99260281($_smarty_tpl) {?>/**
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
 * @subpackage Window
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */

/**
 * Shopware UI - Window
 *
 * This class overrides the default Ext.window.Window object
 * to add our necessary functionality.
 *
 * The class renders the Ext.window.Window in the active
 * desktop, renders the header tools and sets the needed
 * event listeners.
 */
Ext.define('Enlight.app.SubWindow', {
    extend: 'Enlight.app.Window',
    alias: 'widget.subwindow',
    footerButton: false,
    isSubWindow: true
});
<?php }} ?>