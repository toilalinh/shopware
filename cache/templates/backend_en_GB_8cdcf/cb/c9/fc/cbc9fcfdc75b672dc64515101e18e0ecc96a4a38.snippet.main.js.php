<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:10446650505770f0d6775843-98314039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc9fcfdc75b672dc64515101e18e0ecc96a4a38' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/controller/main.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10446650505770f0d6775843-98314039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d698b128_88676867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d698b128_88676867')) {function content_5770f0d698b128_88676867($_smarty_tpl) {?>/**
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
 * @package    ArticleList
 * @subpackage Main
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * shopware AG (c) 2012. All rights reserved.
 */

//
//
Ext.define('Shopware.apps.ArticleList.controller.Main', {

    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Class property which holds the main application if it is created
     *
     * @default null
     * @object
     */
    mainWindow: null,

    /**
     * Define references for the different parts of our application. The
     * references are parsed by ExtJS and Getter methods are automatically created.
     *
     * @array
     */
    refs: [
        { ref: 'articleGrid', selector: 'articleList-main-grid' }
    ],

    defaultState: {
        x: 0,
        y: 0,
        width: 0,
        height: 0
    },

    /**
     * Contains all snippets for the component.
     * @object
     */
    snippets: {
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        splitViewTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'splitview_title','default'=>'Split-View','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'splitview_title','default'=>'Split-View','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Split view<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'splitview_title','default'=>'Split-View','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        splitViewText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'splitview_text','default'=>'The split view mode has been activated.','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'splitview_text','default'=>'The split view mode has been activated.','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The split view mode has been activated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'splitview_text','default'=>'The split view mode has been activated.','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        splitViewAlreadyActive: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'split_view_already_active','default'=>'The split view mode has already been activated. Please close the product mask window and start a new instance of the split view.','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'split_view_already_active','default'=>'The split view mode has already been activated. Please close the product mask window and start a new instance of the split view.','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The split view mode has already been activated. Please close the item mask window and reactivate the split view.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'split_view_already_active','default'=>'The split view mode has already been activated. Please close the product mask window and start a new instance of the split view.','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        messages: {
            successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'success','default'=>'Success','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'success','default'=>'Success','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Success<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'success','default'=>'Success','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteSuccess: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'delete_success','default'=>'The selected articles have been removed','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_success','default'=>'The selected articles have been removed','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The selected items have been removed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_success','default'=>'The selected articles have been removed','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteArticleTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'delete_article_title','default'=>'Delete selected Article(s)?','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article_title','default'=>'Delete selected Article(s)?','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected item(s)?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article_title','default'=>'Delete selected Article(s)?','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteArticle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'delete_article','default'=>'Are you sure you want to delete the selected Article(s)?','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article','default'=>'Are you sure you want to delete the selected Article(s)?','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected item(s)?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article','default'=>'Are you sure you want to delete the selected Article(s)?','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     *
     * @return void
     */
    init: function() {
        var me = this;

        me.control({
            'articleList-main-window': {
                categoryChanged: me.onCategoryChanged
            },

            'articleList-main-grid': {
                filterVariantsChange: me.onFilterVariantsChanged,
                deleteArticle: me.onDeleteArticle,
                deleteMultipleArticles: me.onDeleteMultipleArticles,
                triggerSplitView: me.onTriggerSplitView,
                edit: me.onEdit,
                productchange: me.onProductChange
            }
        });

        Shopware.app.Application.addEvents(
            'moduleConnector:splitView',
            'moduleConnector:splitViewClose'
        );
        Shopware.app.Application.on('moduleConnector:splitViewClose', me.onCloseSplitView, me);

        me.mainWindow = me.getView('main.Window').create({
            articleStore: me.getStore('List').load()
        });

        me.subApplication.articleGrid = me.getArticleGrid();

        me.mainWindow.show();
        me.callParent(arguments);
    },

    /**
     * Fired after a row is edited and passes validation. This event is fired
     * after the store's update event is fired with this edit.
     *
     * @event edit
     * @param [Ext.grid.plugin.Editing]
     * @param [object] An edit event
     *
     * @return void
     */
    onEdit: function(editor, event) {
        var me     = this,
            store  = me.getStore('List'),
            record = event.record;

        if (!record.dirty) {
            return;
        }

        me.getArticleGrid().setLoading(true);
        record.save({
            success: function() {
                store.load({
                    callback: function() {
                        me.getArticleGrid().setLoading(false);
                    }
                });
            },
            failure: function() {
                me.getArticleGrid().setLoading(false);
            }
        });
    },

    /**
     * @param record
     */
    onDeleteArticle: function(record) {
        var me    = this,
            store = me.getStore('List');

        Ext.MessageBox.confirm(me.snippets.messages.deleteArticleTitle, me.snippets.messages.deleteArticle, function (response) {
            if (response !== 'yes') {
                return false;
            }
            record.destroy({
                callback: function() {
                    Shopware.Notification.createGrowlMessage(me.snippets.messages.successTitle, me.snippets.messages.deleteSuccess, me.snippets.growlMessage);
                    store.load();
                }
            });
        });
    },

    /**
     * @param records
     */
    onDeleteMultipleArticles: function(records) {
        var me    = this,
            store = me.getStore('List');

        if (records.length > 0) {
            // we do not just delete - we are polite and ask the user if he is sure.
            Ext.MessageBox.confirm(me.snippets.messages.deleteArticleTitle, me.snippets.messages.deleteArticle, function (response) {
                if ( response !== 'yes' ) {
                    return;
                }
                store.getProxy().batchActions = false;
                store.remove(records);
                store.sync({
                    callback: function() {
                        Shopware.Notification.createGrowlMessage(me.snippets.messages.successTitle, me.snippets.messages.deleteSuccess, me.snippets.growlMessage);
                        //store.currentPage = 1;
                        store.load();
                    }
                });
            });
        }
    },

    /**
     * @event filterVariantsChange
     * @param field
     * @param newValue
     */
    onFilterVariantsChanged: function(field, newValue) {
        var me = this,
            store = me.getStore('List');

        if (newValue) {
            store.getProxy().extraParams.showVariants = 1;
        } else {
            store.getProxy().extraParams.showVariants = 0;
        }

        store.load();
    },

    /**
     * @event categoryChanged
     * @param [Ext.view.View] view - the view that fired the event
     * @param [Ext.data.Model] record
     *
     * @return void
     */
    onCategoryChanged: function(view, record) {
        var me    = this,
            store = this.getStore('List'),
            grid  = me.getArticleGrid();

        if (record.get('id') === 'root') {
            store.getProxy().extraParams.categoryId = null;
        } else {
            store.getProxy().extraParams.categoryId = record.get('id');
        }

        //scroll the store to first page
        store.currentPage = 1;
        grid.setLoading(true);
        store.load({
            callback: function() {
                grid.setLoading(false);
            }
        });
    },

    onTriggerSplitView: function(btn, record) {
        var me = this,
            mainWindow = me.mainWindow,
            tmpPosition = mainWindow.getPosition(),
            position = {
                x: tmpPosition[0],
                y: tmpPosition[1] - 40
            };

        if(!record) {
            return;
        }

        // Is a split view already been up and running...
        if(me.splitViewMode) {
            Ext.MessageBox.alert(me.snippets.splitViewTitle, me.snippets.splitViewAlreadyActive);
            return false;
        }

        // Add inidicator to the class that the split view mode is up and running...
        if(!me.hasOwnProperty('splitViewMode') || !me.splitViewMode) {
            me.splitViewMode = true;
        }

        Shopware.Notification.createGrowlMessage(me.snippets.splitViewTitle, me.snippets.splitViewText);

        // Save the position and the size of the product list
        me.defaultState = Ext.Object.merge(me.defaultState, mainWindow.getSize());
        me.defaultState = Ext.Object.merge(me.defaultState, position);

        // Prepare the article list
        mainWindow.sidebarPanel.collapse();
        mainWindow.setPosition(0,0);
        mainWindow.setSize(Ext.Element.getViewportWidth() / 2, Ext.Element.getViewportHeight() - 90);

        // Open the product module and set it up for the splitview mode
        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.Article',
            action: 'detail',
            params: {
                splitViewMode: true,
                articleId: record.get('articleId')
            }
        });
    },

    onProductChange: function(selection) {
        var me = this,
            record = selection[0];

        // No record was selected...
        if(!record) {
            return false;
        }

        Shopware.app.Application.fireEvent('moduleConnector:splitView', me, {
            articleId: record.get('articleId')
        });
    },

    onCloseSplitView: function() {
        var me = this,
            mainWindow = me.mainWindow;

        mainWindow.setSize(me.defaultState);
        mainWindow.setPosition(me.defaultState.x, me.defaultState.y);
        me.splitViewMode = false;
    }
});
//
<?php }} ?>