<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:42
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/view/category/tabs/article_mapping.js" */ ?>
<?php /*%%SmartyHeaderCode:15343765175770f0da4472f3-58447373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a358af80da577e28a378490dadd170ab63473ebf' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/view/category/tabs/article_mapping.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15343765175770f0da4472f3-58447373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0da562579_45386700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0da562579_45386700')) {function content_5770f0da562579_45386700($_smarty_tpl) {?>/**
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
 * @subpackage Settings
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware UI - Category Article Mapping
 *
 * Shows the drag and drop selector to map articles to a category
 */
//
Ext.define('Shopware.apps.Category.view.category.tabs.ArticleMapping', {

   /**
    * Parent Element Ext.container.Container
    * @string
    */
    extend:'Ext.form.Panel',

    /**
     * Register the alias for this class.
     * @string 
     */
    alias:'widget.category-category-tabs-article_mapping',

    /**
     * Base class of the component
     * @string
     */
    cls: 'shopware-form',

    /**
     * Specifies the border for this component. The border can be a single numeric 
     * value to apply to all sides or it can be a CSS style specification for each 
     * style, for example: '10 5 3 10'.
     * 
     * Default: 0
     * @integer
     */
    border: 0,

    /**
     * Display the the contents of this tab immediately
     * @boolean
     */
    autoShow : true,

    /**
     * Layout configuration
     * @object
     */
    layout: {
        type: 'hbox',
        pack: 'start',
        align: 'stretch'
    },

    /**
     * Body padding
     * @integer
     */
    bodyPadding: 10,

    /**
     * Available action buttons
     * @array
     */
    defaultButtons: [ 'add', 'remove' ],

    /**
     * Default text which are used for the tooltip on the button.
     * @object
     */
    buttonsText: {
        add: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'button_add','default'=>'Add','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'button_add','default'=>'Add','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'button_add','default'=>'Add','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        remove: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'button_remove','default'=>'Remove','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'button_remove','default'=>'Remove','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'button_remove','default'=>'Remove','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
    },


    /**
     * Initialize the Shopware.apps.Category.view.category.tabs.ArticleMapping and defines the necessary
     * default configuration
     *
     * @returns { Void }
     */
    initComponent:function () {
        var me = this;
        me.fromGrid = me.createFromGrid();
        me.buttonContainer = me.createActionButtons();
        me.toGrid = me.createToGrid();

        me.items = [ me.fromGrid, me.buttonContainer, me.toGrid ];
        me.addEvents('storeschanged', 'add', 'remove');
        me.on('storeschanged', me.onStoresChanged, me);

        me.callParent(arguments);
    },

    /**
     * Creates the `from` grid
     * @returns { Ext.grid.Panel }
     */
    createFromGrid: function() {
        var me = this, grid, toolbar;

        grid = Ext.create('Ext.grid.Panel', {
            internalTitle: 'from',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'available_articles','default'=>'Available Articles','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'available_articles','default'=>'Available Articles','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'available_articles','default'=>'Available Articles','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1,
            store: me.availableProductsStore.load(),
            selModel: me.createSelectionModel(),
            viewConfig: { loadMask: false, plugins: me.createGridDragAndDrop() },
            bbar: me.createPagingToolbar(me.availableProductsStore),
            columns: me.getColumns()
        });

        toolbar = me.createSearchToolbar(grid);
        grid.addDocked(toolbar);

        return grid;
    },

    /**
     * Creates the `to` grid
     * @returns { Ext.grid.Panel }
     */
    createToGrid: function() {
        var me = this, grid, toolbar;

        grid =  Ext.create('Ext.grid.Panel', {
            internalTitle: 'to',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'mapped_articles','default'=>'Mapped Articles','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'mapped_articles','default'=>'Mapped Articles','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mapped items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'mapped_articles','default'=>'Mapped Articles','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1,
            store: me.assignedProductsStore.load(),
            selModel: me.createSelectionModel(),
            viewConfig: { loadMask: false, plugins: me.createGridDragAndDrop() },
            bbar: me.createPagingToolbar(me.assignedProductsStore),
            columns: me.getColumns()
        });

        toolbar = me.createSearchToolbar(grid);
        grid.addDocked(toolbar);

        return grid;
    },

    /**
     * Creates the action buttons which are located between the `fromGrid` (on the left side)
     * and the `toGrid` (on the right side).
     *
     * The buttons are placed in an `Ext.container.Container` to apply the necessary layout
     * on it.
     *
     * @returns { Ext.container.Container }
     */
    createActionButtons: function() {
        var me = this;

        me.actionButtons = [];
        Ext.Array.forEach(me.defaultButtons, function(name) {

            var button = Ext.create('Ext.Button', {
                tooltip: me.buttonsText[name],
                cls: Ext.baseCSSPrefix + 'form-itemselector-btn',
                iconCls: Ext.baseCSSPrefix + 'form-itemselector-' + name,
                action: name,
                disabled: true,
                navBtn: true,
                margin: '4 0 0 0',
                listeners: {
                    scope: me,
                    click: function() {
                        me.fireEvent(name, me);
                    }
                }
            });
            me.actionButtons.push(button);
        });


        return Ext.create('Ext.container.Container', {
            margins: '0 4',
            items:  me.actionButtons,
            width: 22,
            layout: {
                type: 'vbox',
                pack: 'center'
            }
        });
    },

    /**
     * Creates a paging toolbar based of the incoming store
     *
     * @param { Ext.data.Store } store
     * @returns { Ext.toolbar.Paging }
     */
    createPagingToolbar: function(store) {

        return Ext.create('Ext.toolbar.Paging', {
            store: store,
            displayInfo: true
        });
    },

    /**
     * Creates a toolbar which could be docked to the top of
     * a grid panel and contains a searchfield to filter
     * the associated grid panel.
     *
     * @returns { Ext.toolbar.Toolbar }
     */
    createSearchToolbar: function(cmp) {
        var me = this, searchField;

        searchField = Ext.create('Ext.form.field.Text', {
            name: 'searchfield',
            dock: 'top',
            cls: 'searchfield',
            width: 270,
            emptyText: 'Search...',
            enableKeyEvents: true,
            checkChangeBuffer: 500,
            listeners: {
                change: function(field, value) {
                    me.fireEvent('search', value, cmp);
                }
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            padding: '2 0',
            items: [ '->', searchField, ' ' ]
        });
    },

    /**
     * Creates the selection model which is used by both grids.
     *
     * @returns { Ext.selection.CheckboxModel }
     */
    createSelectionModel: function() {
        return Ext.create('Ext.selection.CheckboxModel');
    },

    createGridDragAndDrop: function() {
        return Ext.create('Ext.grid.plugin.DragDrop', {
            ddGroup: 'category-product-assignment-grid-dd'
        });
    },

    /**
     * Creates the necessary columns for both grids. Please
     * note that the `name` column has a specific renderer.
     *
     * @returns { Array }
     */
    getColumns: function() {
        var me = this;

        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'columns'/'article_number','default'=>'Article Number','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'columns'/'article_number','default'=>'Article Number','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'columns'/'article_number','default'=>'Article Number','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1,
            dataIndex: 'number'
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'columns'/'article_name','default'=>'Article Name','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'columns'/'article_name','default'=>'Article Name','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'columns'/'article_name','default'=>'Article Name','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 2,
            dataIndex: 'name',
            renderer: me.nameColumnRenderer
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'article_mapping'/'columns'/'supplier_name','default'=>'Supplier Name','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'columns'/'supplier_name','default'=>'Supplier Name','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Supplier Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'article_mapping'/'columns'/'supplier_name','default'=>'Supplier Name','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1,
            dataIndex: 'supplierName'
        }];
    },

    /**
     * Renders the incoming column value into `strong` tags.
     *
     * @param { String } value
     * @returns { String } formatted string
     */
    nameColumnRenderer: function(value) {
        return Ext.String.format('<strong>[0]</strong>', value);
    },

    /**
     * Event listener which will be fired when the user selects
     * an another category in the tree.
     *
     * The method reconfigures the stores and reloads them.
     *
     * @return { Void }
     */
    onStoresChanged: function() {
        var me = this,
            fromStore = me.availableProductsStore,
            toStore = me.assignedProductsStore;

        // Set the new stores
        me.fromGrid.reconfigure(fromStore);
        me.toGrid.reconfigure(toStore);

        // Reload the stores
        me.fromGrid.getStore().load();
        me.toGrid.getStore().load();
    }
});
//
<?php }} ?>