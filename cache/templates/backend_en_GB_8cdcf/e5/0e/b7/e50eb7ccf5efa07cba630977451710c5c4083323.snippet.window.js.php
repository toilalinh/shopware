<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:1572911535770f0d6ec5990-07042553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50eb7ccf5efa07cba630977451710c5c4083323' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/main/window.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572911535770f0d6ec5990-07042553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d6f2dad0_45327572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d6f2dad0_45327572')) {function content_5770f0d6f2dad0_45327572($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list main window.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.main.Window', {
    /**
     * Define that the order main window is an extension of the enlight application window
     * @string
     */
    extend:'Enlight.app.Window',
    /**
     * Set base css class prefix and module individual css class for css styling
     * @string
     */
    cls:Ext.baseCSSPrefix + 'order-list-main-window',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-list-main-window',
    /**
     * Set no border for the window
     * @boolean
     */
    border:false,
    /**
     * True to automatically show the component upon creation.
     * @boolean
     */
    autoShow:true,
    /**
     * Set border layout for the window
     * @string
     */
    layout:'border',
    /**
     * Define window width
     * @integer
     */
    width:1200,
    /**
     * Define window height
     * @integer
     */
    height:'90%',
    /**
     * True to display the 'maximize' tool button and allow the user to maximize the window, false to hide the button and disallow maximizing the window.
     * @boolean
     */
    maximizable:true,
    /**
     * True to display the 'minimize' tool button and allow the user to minimize the window, false to hide the button and disallow minimizing the window.
     * @boolean
     */
    minimizable:true,
    /**
     * A flag which causes the object to attempt to restore the state of internal properties from a saved state on startup.
     */
    stateful:true,
    /**
     * The unique id for this object to use for state management purposes.
     */
    stateId:'shopware-order-main-window',
    /**
     * Set window title which is displayed in the window header
     * @string
     */
    title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','default'=>'Order list','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Order list','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Orders<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Order list','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',


    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
     */
    initComponent:function () {
      var me = this;

      //add the order list grid panel and set the store
      me.items = [
            {
                xtype: 'container',
                layout: {
                    type: 'vbox',
                    align: 'stretch'
                },
                region: 'center',
                items: [Ext.create('Shopware.apps.Order.view.list.List', {
                    flex: 2,
                    listStore: me.listStore,
                    orderStatusStore: me.orderStatusStore,
                    paymentStatusStore: me.paymentStatusStore,
                    statusStore: me.statusStore,
                    taxStore: me.taxStore
                }), Ext.create('Shopware.apps.Order.view.list.Position', {
                    collapsed: true,
                    collapsible: true,
                    flex: 1,
                    title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'position_grid_title','default'=>'Order positions','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'position_grid_title','default'=>'Order positions','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Order positions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'position_grid_title','default'=>'Order positions','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    region: 'south',
                    statusStore: me.statusStore,
                    taxStore: me.taxStore
                })]
            }, Ext.create('Shopware.apps.Order.view.list.Navigation', {
                region: 'west',
                statisticStore: me.statisticStore,
                orderStatusStore: me.orderStatusStore,
                paymentStatusStore: me.paymentStatusStore
            })
      ];

      me.callParent(arguments);
  }

});
//
<?php }} ?>