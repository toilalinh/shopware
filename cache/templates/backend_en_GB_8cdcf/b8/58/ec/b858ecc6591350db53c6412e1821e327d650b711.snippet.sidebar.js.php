<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar.js" */ ?>
<?php /*%%SmartyHeaderCode:3511148895770f0d8870323-81487365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b858ecc6591350db53c6412e1821e327d650b711' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3511148895770f0d8870323-81487365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d88c28a9_70372653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d88c28a9_70372653')) {function content_5770f0d88c28a9_70372653($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Detail
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article detail page
 * The sidebar component contains the definition of the sidebar layout.
 * The sidebar displays as an accordion. The different sidebar elements
 * defined under the 'Shopware.apps.Article.view.detail.sidebar' namespace:
 */
//
//
Ext.define('Shopware.apps.Article.view.detail.Sidebar', {
    /**
     * Define that the billing field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.panel.Panel',

    /**
     * The Ext.container.Container.layout for the fieldset's immediate child items.
     * @object
     */
    layout: {
        type: 'accordion',
        animate: Ext.isChrome
    },

    /**
     * Enable only collapse animation in chrome.
     * @boolean
     */
    animCollapse: Ext.isChrome,

    collapsible: true,

    collapsed: true,

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'accordion'-'title','default'=>'Article-Options','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'accordion'-'title','default'=>'Article-Options','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'accordion'-'title','default'=>'Article-Options','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Defines the component region
     */
    region: 'east',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-sidebar',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-sidebar',

    /**
     * Sets the container width to a fix value.
     * @integer
     */
    width: 350,

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
        var me = this,
            mainWindow = me.subApp.articleWindow;

        mainWindow.on('storesLoaded', me.onStoresLoaded, me);

        me.callParent(arguments);
    },

    /**
     * Creates the elements for the sidebar container.
     * @return object
     */
    createElements: function() {
        var me = this;
        return [
            {
                xtype: 'article-sidebar-option',
                shopStore: me.shopStore,
                article: me.article,
                animCollapse: Ext.isChrome,
                animate: Ext.isChrome
            }, {
                xtype: 'article-sidebar-link',
                article: me.article,
                animCollapse: Ext.isChrome,
                animate: Ext.isChrome
            },
            {
                xtype: 'article-sidebar-accessory',
                article: me.article,
                gridStore: me.article.getAccessory(),
                animCollapse: Ext.isChrome,
                animate: Ext.isChrome
            },
            {
                xtype: 'article-sidebar-similar',
                article: me.article,
                gridStore: me.article.getSimilar(),
                animCollapse: Ext.isChrome,
                animate: Ext.isChrome
            }
        ];
    },

    onStoresLoaded: function(article, stores) {
        var me = this;
        me.article = article;
        me.shopStore = stores['shops'];
        me.add(me.createElements());
    }
});
//
<?php }} ?>