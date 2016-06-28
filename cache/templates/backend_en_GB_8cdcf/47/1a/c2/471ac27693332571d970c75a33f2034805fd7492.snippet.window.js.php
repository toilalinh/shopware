<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:14314942495770f0d61f9714-13785145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471ac27693332571d970c75a33f2034805fd7492' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/view/main/window.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14314942495770f0d61f9714-13785145',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d633f5c4_98606665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d633f5c4_98606665')) {function content_5770f0d633f5c4_98606665($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ArticleList.view.main.Window', {
    extend: 'Enlight.app.Window',
    alias : 'widget.articleList-main-window',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'title','default'=>'Article list','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'title','default'=>'Article list','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'title','default'=>'Article list','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: 'border',
    width: 990,
    height: '90%',
    stateful: true,
    stateId: 'shopware-articleList-main-window',

    snippets: {
        title:         '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'title','default'=>'Article overview','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'title','default'=>'Article overview','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'title','default'=>'Article overview','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'category_title','default'=>'Categories','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'category_title','default'=>'Categories','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'category_title','default'=>'Categories','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        filterTitle:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'filter_title','default'=>'Filter','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'filter_title','default'=>'Filter','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'filter_title','default'=>'Filter','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        noFilter:      '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'no_filter','default'=>'No filter','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'no_filter','default'=>'No filter','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'no_filter','default'=>'No filter','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        notInStock:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'not_in_stock','default'=>'Not in stock','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'not_in_stock','default'=>'Not in stock','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not in stock<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'not_in_stock','default'=>'Not in stock','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        noCategory:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'no_category','default'=>'No categories','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'no_category','default'=>'No categories','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'no_category','default'=>'No categories','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        noImage:       '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'no_image','default'=>'No images','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'no_image','default'=>'No images','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No images<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'no_image','default'=>'No images','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    initComponent: function() {
        var me = this;

        me.title = me.snippets.title;

        me.addEvents(
            /**
             * @event
             * @param [Ext.view.View] view - the view that fired the event
             * @param [Ext.data.Model] record
             */
            'categoryChanged'
        );

        me.categoryStore = Ext.create('Shopware.store.CategoryTree');

        me.items = [{
            xtype: 'articleList-main-grid',
            articleStore: me.articleStore,
            region: 'center'
        }];

        me.sidebarPanel = Ext.create('Ext.panel.Panel', {
            title: me.snippets.categoryTitle,
            collapsible: true,
            width: 230,
            layout: {
                type: 'vbox',
                pack: 'start',
                align: 'stretch'
            },
            region: 'west',
            items: [
                me.createTree(),
                me.createFilterPanel()
            ]
        });

        me.items.push(me.sidebarPanel);

        me.callParent(arguments);
    },

    createFilterPanel: function() {
        var me = this;

        return new Ext.create('Ext.form.Panel', {
            title: me.snippets.filterTitle,
            bodyPadding: 5,
            items: [{
                xtype: 'radiogroup',
                listeners: {
                    change: {
                        fn: function(view, newValue, oldValue) {
                            var me    = this,
                                store =  me.articleStore;

                            store.getProxy().extraParams.filterBy = newValue.filter;
                            store.load();

                        },
                        scope: me
                    }
                },
                columns: 1,
                vertical: true,
                items: [
                    { boxLabel: me.snippets.noFilter, name: 'filter', inputValue: 'none', checked: true  },
                    { boxLabel: me.snippets.notInStock, name: 'filter', inputValue: 'notInStock'  },
                    { boxLabel: me.snippets.noCategory, name: 'filter', inputValue: 'noCategory' },
                    { boxLabel: me.snippets.noImage, name: 'filter', inputValue: 'noImage' }
                ]
            }]


        });
    },

    /**
     * Creates the category tree
     *
     * @return [Ext.tree.Panel]
     */
    createTree: function() {
        var me = this;

        var tree = Ext.create('Ext.tree.Panel', {
            rootVisible: true,
            flex: 1,
            expanded: true,
            useArrows: false,
            store: me.categoryStore,
            root: {
                text: me.snippets.categoryTitle,
                expanded: true
            },
            listeners: {
                itemclick: {
                    fn: function(view, record) {
                        var me    = this,
                            store =  me.articleStore;

                        if (record.get('id') === 'root') {
                            store.getProxy().extraParams.categoryId = null;
                        } else {
                            store.getProxy().extraParams.categoryId = record.get('id');
                        }

                        //scroll the store to first page
                        store.currentPage = 1;
                        store.load({
                            callback: function() {
                            }
                        });
                    },
                    scope: me
                }
            }
        });

        return tree;
    }
});
//
<?php }} ?>