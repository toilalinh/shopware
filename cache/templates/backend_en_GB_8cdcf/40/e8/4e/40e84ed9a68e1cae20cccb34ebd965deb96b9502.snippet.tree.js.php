<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/view/category/tree.js" */ ?>
<?php /*%%SmartyHeaderCode:16596111765770f0d9d74df3-82961587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e84ed9a68e1cae20cccb34ebd965deb96b9502' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/view/category/tree.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16596111765770f0d9d74df3-82961587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0da006834_41181864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0da006834_41181864')) {function content_5770f0da006834_41181864($_smarty_tpl) {?>/**
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
 * Shopware UI - Category management main window.
 *
 * This component contains a category tree. This tree is uses to manage 
 * the hierarchical order of categories. Its provides methods to create, delete, rearrange categories.
 */
//
Ext.define('Shopware.apps.Category.view.category.Tree', {
    /**
    * Parent Element Ext.tree.Panel
    * @string
    */
    extend: 'Ext.tree.Panel',
    /**
     * Register the alias for this class.
     * @string 
     */
    alias : 'widget.category-category-tree',
    /**
     * True to make the panel collapsible and have an expand/collapse toggle 
     * Tool added into the header tool button area. 
     * False to keep the panel sized either statically, or by an owning layout manager, with no toggle Tool.
     * 
     * @boolean
     */
    collapsible: false,

    region   : 'west',
    /**
     * The Store the tree should use as its data source.
     * @string
     */
    store: 'Tree',
    /**
     * False to hide the root node.
     * @boolean
     */
    rootVisible: true,
    /**
     * True to use Vista-style arrows in the tree.
     * @boolean
     */
    useArrows: false,
    /**
     * The width of this component in pixels.
     * @integer 
     */
    width: 250,
    /**
     * Plugins and plugin configurations
     * @object
     */
    viewConfig: {
        plugins: {
            ptype: 'treeviewdragdrop'
        }
    },
    /**
     * Array containing docked items
     * @array
     */
    dockedItems: [ ],
    /**
     * Translations
     * @object
     */
    snippets : {
        // Grid headers
        columnCategoryHeader : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'category_column_title','default'=>'Catergories','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'category_column_title','default'=>'Catergories','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'category_column_title','default'=>'Catergories','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnActionHeader : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'action_column_title','default'=>'Action','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'action_column_title','default'=>'Action','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'action_column_title','default'=>'Action','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnArticleHeader : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'articles_column_title','default'=>'Articles','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'articles_column_title','default'=>'Articles','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'articles_column_title','default'=>'Articles','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        // Context menu
        contextAddSubCategory : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'context_add_category','default'=>'Add new sub category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'context_add_category','default'=>'Add new sub category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add new subcategory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'context_add_category','default'=>'Add new sub category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        contextDeleteSubCategory : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'context_delete_category','default'=>'Delete sub category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'context_delete_category','default'=>'Delete sub category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete subcategory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'context_delete_category','default'=>'Delete sub category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        contextReloadTree : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'context_reload_tree','default'=>'Reload','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'context_reload_tree','default'=>'Reload','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'context_reload_tree','default'=>'Reload','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        
        treeAdd : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'tree_add','default'=>'Add category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'tree_add','default'=>'Add category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'tree_add','default'=>'Add category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        treeDelete : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'tree_delete','default'=>'Delete category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'tree_delete','default'=>'Delete category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'tree_delete','default'=>'Delete category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },
    /**
     * Name of the root node. We have to show the root node in order to move a subcategory under the root.
     * @string 
     */
    rootNodeName : 'Shopware',
    
     /**
     * Initialize the controller and defines the necessary default configuration
     */
    initComponent : function() {
        var me = this;
        me.registerEvents();
        me.columns = me.createColumns();
        me.selModel = Ext.create('Ext.selection.RowModel', {
        });
        me.on({
            // Context menu on items
            itemcontextmenu: me.onOpenItemContextMenu,
            // Context menu on container
            containercontextmenu: me.onOpenContainerContextMenu,
            // scope
            scope: me
        });

        // rename root node to shopware.
        var rootNode = me.getStore().getRootNode();
        rootNode.data.text = me.rootNodeName;
        me.dockedItems = me.createMenu();
        me.callParent(arguments);
        // forward the beforedrop event to the controller
        // Used a different name to avoid event loops
        me.view.on('beforedrop', function() {
            me.fireEvent('beforeDropCategory', arguments);
        });
    },

    /**
     * Event listener method which fires when the user performs a right click
     * on a node in the Ext.tree.Panel.
     *
     * Opens a context menu which features functions to create a new sub category,
     * to delete the selected category including all children.
     *
     * Fires the following events on the Ext.tree.Panel:
     * - addSubCategory
     * - deleteSubCategory
     *
     * @event itemcontextmenu
     * @param [object] view - HTML DOM Object of the Ext.tree.Panel
     * @param [object] record - Associated Ext.data.Model for the clicked node
     * @param [object] item HTML DOM Object of the clicked node
     * @param [integer] index - Index of the clicked node in the associated Ext.data.TreeStore
     * @param [object] event - The fired Ext.EventObject
     * @return void
     */
    onOpenItemContextMenu : function(view, record, item, index, event) {
        event.preventDefault(true);
        var me = this,
            nodeId = ~~(1 * record.get('id')),
            disableStatus = (nodeId > 0 ) ? false : true,
            menuElements = [];
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        menuElements.push({
                text: me.snippets.contextAddSubCategory,
                iconCls: 'sprite-blue-folder--plus',
                handler: function() {
                    me.fireEvent('addSubCategory', record, item, index);
                }
        });
        /* <?php }?> */
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?> */
        menuElements.push({
                text: me.snippets.contextDeleteSubCategory,
                iconCls: 'sprite-blue-folder--minus',
                disabled: disableStatus,
                handler: function() {
                    me.fireEvent('deleteSubCategory', me, view, record, item, index);
                }
            });
        /* <?php }?> */
        var menu = Ext.create('Ext.menu.Menu', {
            items: menuElements
        });
        menu.showAt(event.getPageX(), event.getPageY());
    },
     /**
     * Event listener method which fires when the user performs a right click
     * on the Ext.tree.Panel.
     *
     * Opens a context menu which features functions to create a category and
     * to reload the category list.
     *
     * Fires the following events on the Ext.tree.Panel:
     * - addSubCategory
     * - reload
     *
     * @event containercontextmenu
     * @param [object] view - HTML DOM Object of the Ext.tree.Panel
     * @param [object] event - The fired Ext.EventObject
     * @return void
     */
     onOpenContainerContextMenu : function(view, event) {
         event.preventDefault(true);
         var me = this,
             menuElements = [];
         /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?> */
         menuElements.push({
             text:me.snippets.contextAddSubCategory,
             iconCls: 'sprite-blue-folder--plus',
             handler:function () {
                 me.fireEvent('addSubCategory');
             }
         });
         /* <?php }?> */
         menuElements.push({
             text:me.snippets.contextReloadTree,
             iconCls:'sprite-arrow-circle-315',
             handler:function () {
                 me.fireEvent('reload', me, view);
             }
         });

         var menu = Ext.create('Ext.menu.Menu', {
             items:menuElements
         });
         menu.showAt(event.getPageX(), event.getPageY());
    },

    /**
     * Builds and returns the footer menu
     * 
     * @return [array]
     */
    createMenu : function()
    {
        var me   = this,
            menu = [];
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?> */
        menu.push({
            text   :me.snippets.treeAdd,
            action : 'addCategory',
            cls    : 'addBtn small secondary'
        });
        menu.push( '->');
        /* <?php }?> */
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?> */
        menu.push({
            text     : me.snippets.treeDelete,
            action   : 'deleteCategory',
            disabled : true,
            cls      : 'deleteBtn small secondary'
        });
        /* <?php }?> */

        menu.push({
            xtype: 'tbspacer',
            width: 5
        });
        return [{
            xtype:'toolbar',
            dock:'bottom',
            items:menu,
            cls: Ext.baseCSSPrefix + 'tree-toolbar'
        }]
    },
    /**
     * Creates the column model for the TreePanel
     *
     * @return [array] columns - generated columns
     */
    createColumns : function() {
        var me = this,
            columns = [{
                xtype: 'treecolumn',
                text: me.snippets.columnCategoryHeader,
                sortable: false,
                flex:1,
                renderer: me.categoryFolderRenderer,
                dataIndex: 'text'
            }];

        return columns;
    },
     /**
     * Defines additional events which will be
     * fired from the component
     *
     * @return void
     */
    registerEvents : function() {
        this.addEvents(

            /**
             * Event will be fired when the user clicks the edit icon in the
             * action column
             *
             * This event can easily be captured in the controller
             * eg.
             * <code>
             * this.control({ 'editSettings' : function(){
             *     console.log('the editSettings button has been pressed.');
             * }
             * </code>
             *
             * @event editSettings
             * @param [object] View - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             * @param [object] item - Associated HTML DOM node
             */
            'editSettings',
            /**
             * Event will be fired when the user clicks the add icon in the
             * action column or in the footer menu.
             *
             * This event can easily be captured in the controller
             * eg.
             * <code>
             * this.control({ 'addSubCategory' : function(){
             *     console.log('the addSubCategory button has been pressed.');
             * }
             * </code>
             *
             * @event addSubCategory
             * @param [object] View - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             * @param [object] item - Associated HTML DOM node
             */
            'addSubCategory',
            /**
             * Event will be fired when the user clicks the delete icon in the
             * action column or in the footer menu.
             *
             * This event can easily be captured in the controller
             * eg.
             * <code>
             * this.control({ 'deleteSubCategory' : function(){
             *     console.log('the delete button has been pressed.');
             * }
             * </code>
             *
             * @event deleteSubCategory
             * @param [object] View - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             * @param [object] item - Associated HTML DOM node
             */
            'deleteSubCategory',
            /**
             * Event will be fired when the user clicks the reload icon in the
             * context menu of the category tree.
             *
             * This event can easily be captured in the controller
             * eg.
             * <code>
             * this.control({ 'reload' : function(){
             *     console.log('the reload button has been pressed.');
             * }
             * </code>
             *
             * @event reloadTree
             * @param [object] View - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             * @param [object] item - Associated HTML DOM node
             */
            'reload',
            /**
             * Event will be fired when the user want to drop a tree node
             *
             * @event
             * @param [array] node The TreeView node if any over which the mouse was positioned.
             * @param [array] data The data object gathered at mousedown time by the cooperating DragZone's getDragData method it contains the following properties:
             * @param [array] overModel The Model over which the drop gesture took place.
             * @param [array] dropPosition "before", "after" or "append" depending on whether the mouse is above or below the midline of the node, or the node is a branch node which accepts new child nodes.
             * @param [array] dropHandler An object containing methods to complete/cancel the data transfer operation and either move or copy Model instances from the source View's Store to the destination View's Store.
             * @param [array] option The options object passed to Ext.util.Observable.addListener.
             *
             */
            'beforeDropCategory'

        );
        return true;
    },

    /**
     * category folder renderer
     *
     * @param value
     * @param record
     * @param metaData
     */
    categoryFolderRenderer: function (value, metaData, record) {
        if(!record.data.active && !record.data.root) {
            metaData.tdAttr = 'style="opacity:0.4"';
        }
        return value;
    }
});
//
<?php }} ?>