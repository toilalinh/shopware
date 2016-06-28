<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar/similar.js" */ ?>
<?php /*%%SmartyHeaderCode:15833812785770f0d8e77c11-40697581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3681c9886202debc36ac46afba6c727eb5d434' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar/similar.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15833812785770f0d8e77c11-40697581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d911f275_09566205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d911f275_09566205')) {function content_5770f0d911f275_09566205($_smarty_tpl) {?>/**
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
 * Shopware UI - Article detail page - Sidebar
 * The similar component contains the configuration elements for the similar article relations.
 * The accessory component extends this component, because these both components has the same logic and elements.
 */
//
//
Ext.define('Shopware.apps.Article.view.detail.sidebar.Similar', {
    /**
     * Define that the billing field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-sidebar-similar',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-sidebar-similar',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'title','default'=>'Similar articles','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'title','default'=>'Similar articles','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Similar items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'title','default'=>'Similar articles','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        notice:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'notice','default'=>'At this point you have the option of linking other articles with the current article. The linked articles are automatically displayed on the article detail page.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'notice','default'=>'At this point you have the option of linking other articles with the current article. The linked articles are automatically displayed on the article detail page.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
At this point you have the option of linking other items to the current item. The linked items will automatically be displayed on this item\'s detail page.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'notice','default'=>'At this point you have the option of linking other articles with the current article. The linked articles are automatically displayed on the article detail page.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        articleSearch:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'article_search','default'=>'Article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'article_search','default'=>'Article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'article_search','default'=>'Article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        assignment: {
            field: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'assignment_field','default'=>'Assignment','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'assignment_field','default'=>'Assignment','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Designation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'assignment_field','default'=>'Assignment','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            box: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'assignment_box','default'=>'Assign each other','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'assignment_box','default'=>'Assign each other','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign items mutually<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'assignment_box','default'=>'Assign each other','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        button:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'button','default'=>'Add article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'button','default'=>'Add article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'button','default'=>'Add article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        gridTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'grid_title','default'=>'Assigned similar articles','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'grid_title','default'=>'Assigned similar articles','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assigned similar items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'grid_title','default'=>'Assigned similar articles','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        name:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'name','default'=>'Article name','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'name','default'=>'Article name','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'name','default'=>'Article name','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        edit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'edit','default'=>'Edit entry','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'edit','default'=>'Edit entry','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'edit','default'=>'Edit entry','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        delete:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'similar'/'delete','default'=>'Remove entry','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'delete','default'=>'Remove entry','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'similar'/'delete','default'=>'Remove entry','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    bodyPadding: 10,
    autoScroll: true,

    /**
     * Helper property which contains the name of the add event which fired when the user
     * clicks the button of the form panel
     */
    addEvent: 'addSimilarArticle',

    /**
     * Helper property which contains the name of the remove event which fired when the user
     * clicks the action column of the grid panel
     */
    removeEvent: 'removeSimilarArticle',

    listingName: 'similar-listing',

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
        me.title = me.snippets.title;
        me.items = me.createElements();
        me.callParent(arguments);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
    	this.addEvents(
    		/**
    		 * Event will be fired when the user want to add a similar article
    		 *
    		 * @event
    		 */
    		'addSimilarArticle',

            /**
             * Event will be fired when the user want to remove an assigned similar article
             *
             * @event
             */
            'removeSimilarArticle'
    	);
    },

    /**
     * Creates the elements for the similar article panel.
     * @return array
     */
    createElements: function() {
        var me = this;

        me.noticeContainer = me.createNoticeContainer();
        me.formPanel = me.createFormPanel();
        me.articleGrid = me.createGrid();

        return [ me.noticeContainer, me.formPanel, me.articleGrid ];
    },

    /**
     * Creates the notice container for the similar articles panel.
     * @return Ext.container.Container
     */
    createNoticeContainer: function() {
        var me = this;

        return Ext.create('Ext.container.Container', {
            cls: Ext.baseCSSPrefix + 'global-notice-text',
            html: me.snippets.notice
        });
    },

    /**
     * Creates the form field set for the similar article panel. The form panel is used to
     * edit or add new similar articles to the article on the detail page.
     * @return Ext.form.FieldSet
     */
    createFormPanel: function() {
        var me = this;

        return Ext.create('Ext.form.FieldSet', {
            layout: 'anchor',
            padding: 10,
            defaults: {
                labelWidth: 120,
                anchor: '100%'
            },
            items: me.createFormItems()
        });
    },

    /**
     * Creates the form items.
     * @return
     */
    createFormItems: function() {
        var me = this;
        me.articleSearch = me.createArticleSearch();

        return [
            me.articleSearch,
            {
                xtype: 'checkbox',
                name: 'cross',
                fieldLabel: me.snippets.assignment.field,
                boxLabel: me.snippets.assignment.box,
                inputValue: true,
                uncheckedValue: false
            },
            me.createAddButton()
        ]
    },

    /**
     * Creates the add button for the form Panel.
     * @return
     */
    createAddButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            cls: 'small secondary',
            text: me.snippets.button,
            handler: function() {
                me.fireEvent(me.addEvent, me, me.articleGrid, me.articleSearch);
            }
        });
    },

    /**
     * Creates the article live suggest search field.
     * @return Shopware.form.field.ArticleSearch
     */
    createArticleSearch: function() {
        var me = this;

        return Ext.create('Shopware.form.field.ArticleSearch', {
            name: 'number',
            fieldLabel: me.snippets.articleSearch,
            returnValue: 'name',
            hiddenReturnValue: 'number',
            articleStore: Ext.create('Shopware.store.Article'),
            allowBlank: false,
            getValue: function() {
                return this.getSearchField().getValue();
            },
            setValue: function(value) {
                this.getSearchField().setValue(value);
            }
        });
    },

    /**
     * Creates the grid panel for the already assigned similar articles. The panel has
     * an edit and delete action column to remove or edit the assigned similar articles.
     * @return Ext.grid.Panel
     */
    createGrid: function() {
        var me = this;

        return Ext.create('Ext.grid.Panel', {
            title: me.snippets.gridTitle,
            cls: Ext.baseCSSPrefix + 'free-standing-grid',
            store: me.gridStore,
            name: me.listingName,
            height: 150,
            maxHeight: 150,
            minHeight: 150,
            columns: [
                {
                    header: me.snippets.articleSearch,
                    dataIndex: 'number',
                    flex: 1
                }, {
                    header: me.snippets.name,
                    dataIndex: 'name',
                    flex: 1
                }, {
                    xtype: 'actioncolumn',
                    width: 30,
                    items: [
                        {
                            iconCls: 'sprite-minus-circle-frame',
                            tooltip: me.snippets.delete,
                            handler: function (view, rowIndex, colIndex, item, opts, record) {
                                me.fireEvent(me.removeEvent, view, record);
                            }
                        }
                    ]
                }
            ]
        });
    }
});
//
<?php }} ?>