<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:2201294965770f0d9c1cf77-14573787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb7ff7c57f9bd8f9881c08c9dd162c2a4b82a31' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/view/main/window.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2201294965770f0d9c1cf77-14573787',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9d01488_85124564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9d01488_85124564')) {function content_5770f0d9d01488_85124564($_smarty_tpl) {?>/**
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
 * @subpackage Main
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware UI - Category Main Window
 *
 * Displays the Main Window of the Category Module
 */
//
Ext.define('Shopware.apps.Category.view.main.Window', {

    /**
     * Parent Element Enlight.app.Window
     * @string
     */
    extend: 'Enlight.app.Window',

    /**
     * Title of this window
     * @string
     */
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'main_title','default'=>'Categories','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'main_title','default'=>'Categories','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'main_title','default'=>'Categories','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * XType for this component
     * @string
     */
    alias: 'widget.category-main-window',

    /**
     * Enables  / Disables border
     * Default: false
     * @boolean
     */
    border: false,

    /**
     * Enabled / disables autoShow
     * Default: true
     * @boolean
     */
    autoShow: true,

    /**
     * Layout setting for this sub-application
     * Default: border
     * @string
     */
    layout: 'border',

    /**
     * Height setting for this window in pixel
     * Default: 600 px
     * @integer
     */
    height: '90%',

    /**
     * Width setting for this window in pixel
     * Default: 925 px
     * @integer
     */
    width: 1150,

    /**
     * A flag which causes the object to attempt to restore the state of internal properties from a saved state on startup.
     * @boolean
     */
    stateful:true,

    /**
     * The unique id for this object to use for state management purposes.
     */
    stateId:'shopware-category-main-window',

    /**
     * Containing the tabs with the overview and the settings
     * @array of Ext.tab.Panel
     */
    tabPanel : null,

    /**
     * Masks the viewport when the window is visible.
     * @boolean
     */
    modal: false,

    /**
     * Initializes the component and builds up the main interface
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.addEvents('saveDetail');

        me.tabPanel = Ext.create('Ext.tab.Panel', {
            region:'center',
            items:me.getTabs(),
            split: true,
            dockedItems: me.getDockedItems()
        });

        me.items = [
            {
                xtype:'category-category-tree',
                split: true,
                store:me.treeStore
            },
            me.tabPanel
        ];

        me.callParent(arguments);
    },

    /**
     * Creates the tabs for the tab panel of the window.
     * Contains the detail form which is used to display the customer data for an existing customer
     * or to create a new customer.
     * Can contains additionally an second tab which displays the customer orders and a chart which
     * displays the orders grouped by the order year and month
     *
     * @public
     * @return Array of components
     */
    getTabs:function () {
        var me = this;

        me.articleMappingContainer = Ext.create('Ext.panel.Panel', {
            title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'title','default'=>'Article-Mapping','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'title','default'=>'Article-Mapping','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item mapping<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'title','default'=>'Article-Mapping','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled: true,
            layout: 'fit'
        });

        me.categoryRestrictionContainer = Ext.create('Ext.panel.Panel', {
            title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'restrict_category'/'title','default'=>'Restrict Category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'restrict_category'/'title','default'=>'Restrict Category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Restrict category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'restrict_category'/'title','default'=>'Restrict Category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled: true,
            layout: 'fit'
        });

        return [
            {
                xtype:'category-category-tabs-settings',
                templateStore : me.templateStore
            },
            me.articleMappingContainer,
            me.categoryRestrictionContainer
        ];
    },

    /**
     * Build and returns the action toolbar in the footer of the form.
     *
     * @public
     * @return Array of docked items
     */
    getDockedItems : function() {
        var me = this,
            menu = ['->'];
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
        menu.push({
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'main'/'window'/'button'/'save','default'=>'Save','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'main'/'window'/'button'/'save','default'=>'Save','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'main'/'window'/'button'/'save','default'=>'Save','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'saveDetail',
            disabled: true,
            cls:'primary',
            handler: function() {
                me.fireEvent('saveDetail', me);
            }
        });
        /* <?php }?> */

        return [{
            xtype:'toolbar',
            cls: 'shopware-toolbar',
            dock:'bottom',
            ui: 'shopware-ui',
            items : menu
        }]
    }
});
//
<?php }} ?>