<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/view/main/grid.js" */ ?>
<?php /*%%SmartyHeaderCode:18066412785770f0d634b715-45969214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7609c22281f94956f0d749433610a5c952e504ed' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article_list/view/main/grid.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18066412785770f0d634b715-45969214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d672b022_12387101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d672b022_12387101')) {function content_5770f0d672b022_12387101($_smarty_tpl) {?>/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License and of our
 * proprietary license can be found at and
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
Ext.define('Shopware.apps.ArticleList.view.main.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.articleList-main-grid',

    snippets: {
        columnNumber:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_number','default'=>'Number','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_number','default'=>'Number','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_number','default'=>'Number','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        addArticle:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'add_article','default'=>'Add article','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'add_article','default'=>'Add article','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'add_article','default'=>'Add article','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteArticle:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'delete_article','default'=>'Delete selected articles','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'delete_article','default'=>'Delete selected articles','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'delete_article','default'=>'Delete selected articles','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnName:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_name','default'=>'Name','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_name','default'=>'Name','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_name','default'=>'Name','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnSupplier: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_supplier','default'=>'Supplier','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_supplier','default'=>'Supplier','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Supplier<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_supplier','default'=>'Supplier','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnActive:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_active','default'=>'Active','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_active','default'=>'Active','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_active','default'=>'Active','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnPrice:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_price','default'=>'Price','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_price','default'=>'Price','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Price<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_price','default'=>'Price','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnTax:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_tax','default'=>'Tax','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_tax','default'=>'Tax','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tax<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_tax','default'=>'Tax','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnStock:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_stock','default'=>'Stock','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_stock','default'=>'Stock','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stock<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_stock','default'=>'Stock','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnInfo:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'column_info','default'=>'Info','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_info','default'=>'Info','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Info<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'column_info','default'=>'Info','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        splitViewBtn:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'split_view_btn','default'=>'Activate split view','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'split_view_btn','default'=>'Activate split view','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Activate split view<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'split_view_btn','default'=>'Activate split view','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        tooltipEdit:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'tooltip_edit','default'=>'Edit','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_edit','default'=>'Edit','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_edit','default'=>'Edit','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        emptytextSearch:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'emptytext_search','default'=>'Search ...','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'emptytext_search','default'=>'Search ...','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'emptytext_search','default'=>'Search ...','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        tooltipNoImage:         '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'tooltip_noimage','default'=>'Article has no image','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_noimage','default'=>'Article has no image','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item has no image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_noimage','default'=>'Article has no image','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tooltipNoCategories:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'tooltip_categories','default'=>'Article is not assigned to any category','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_categories','default'=>'Article is not assigned to any category','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item is not assigned to any category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_categories','default'=>'Article is not assigned to any category','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tooltipeHasVariants:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'tooltip_hasvariants','default'=>'Article has variants','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_hasvariants','default'=>'Article has variants','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item has variants<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_hasvariants','default'=>'Article has variants','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tooltipHasConfigurator: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'tooltip_hasconfigurator','default'=>'Article has configurator','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_hasconfigurator','default'=>'Article has configurator','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item has configurator<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'tooltip_hasconfigurator','default'=>'Article has configurator','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        regexNumberValidation: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'regex_number_validation','default'=>'The inserted article number contains illegal characters!','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'regex_number_validation','default'=>'The inserted article number contains illegal characters!','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The item number entered contains invalid characters!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'regex_number_validation','default'=>'The inserted article number contains illegal characters!','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    initComponent: function() {
        var me = this;

        me.editor      = me.getRowEditorPlugin();
        me.plugins     = [ me.editor ];
        me.store       = me.articleStore;
        me.selModel    = me.getGridSelModel();
        me.columns     = me.getColumns();
        me.tbar        = me.getToolbar();
        me.bbar        = me.getPagingbar();

        me.addEvents(
            /**
             * Will be fired when the "show variants" checkbox changed
             * @param Ext.form.field.Checkbox
             * @param boolean
            */
            'filterVariantsChange',

            /**
             * Will be fired when user clicks the delete action column
             * @param record
             */
            'deleteArticle',

            /**
             * Will be fired when the user clicks the delete articles button in the toolbar
             * @param records
             */
            'deleteMultipleArticles',

            'triggerSplitView',

            'productchange'
        );

        me.callParent(arguments);
    },

    /**
     * Creates rowEditor Plugin
     *
     * @return [Ext.grid.plugin.RowEditing]
     */
    getRowEditorPlugin: function() {
        return Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 2,
            errorSummary: false,
            pluginId: 'rowEditing'
        });
    },

    /**
     * Creates the grid selection model for checkboxes
     *
     * @return [Ext.selection.CheckboxModel] grid selection model
     */
    getGridSelModel: function () {
        var me = this;

        return Ext.create('Ext.selection.CheckboxModel', {
            listeners:{
                // Unlocks the delete button if the user has checked at least one checkbox
                selectionchange: function (sm, selections) {
                    me.deleteButton.setDisabled(selections.length === 0);
                    me.splitViewModeBtn.setDisabled(selections.length === 0);
                    me.fireEvent('productchange', selections);
                }
            }
        });
    },

    /**
     * Creates the grid columns
     *
     * @return [array] grid columns
     */
    getColumns: function() {
        var me               = this,
            actionColumItems = [];

        actionColumItems.push({
            action: 'edit',
            cls: 'editBtn',
            iconCls: 'sprite-pencil',
            handler: function(view, rowIndex, colIndex, item, opts, record) {
                Shopware.app.Application.addSubApplication({
                    name: 'Shopware.apps.Article',
                    action: 'detail',
                    params: {
                        articleId: record.get('articleId')
                    }
                });
            }
        });

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('resource'=>'article','privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        actionColumItems.push({
            iconCls:'sprite-minus-circle-frame',
            action:'delete',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.fireEvent('deleteArticle', record);
            }
        });
        /*<?php }?>*/

        return [{
            header: me.snippets.columnNumber,
            dataIndex: 'number',
            flex: 2,
            editor: {
                regex: /^[a-zA-Z0-9-_. ]+$/,
                regexText: me.snippets.regexNumberValidation,
                allowBlank: false,
                enableKeyEvents:true,
                checkChangeBuffer:700
            }
        }, {
            header: me.snippets.columnName,
            dataIndex: 'name',
            flex: 4,
            renderer: me.nameColumnRenderer,
            editor: {
                allowBlank: 'false'
            }
        }, {
            header: me.snippets.columnSupplier,
            dataIndex: 'supplier',
            flex: 3
        }, {
            header: me.snippets.columnActive,
            dataIndex: 'active',
            xtype: 'booleancolumn',
            width: 40,
            renderer: me.activeColumnRenderer,
            editor: {
                width: 85,
                xtype: 'checkbox',
                uncheckedValue: false,
                inputValue: true
            }
        }, {
            xtype: 'numbercolumn',
            header: me.snippets.columnPrice,
            dataIndex: 'price',
            align: 'right',
            width: 55,
            editor: {
                width: 85,
                xtype: 'numberfield',
                allowBlank: false,
                hideTrigger: true,
                keyNavEnabled: false,
                mouseWheelEnabled: false
            }
        }, {
            xtype: 'numbercolumn',
            header: me.snippets.columnTax,
            dataIndex: 'tax',
            flex: 1
        }, {
            header: me.snippets.columnStock,
            dataIndex: 'inStock',
            flex: 1,
            renderer: me.colorColumnRenderer,
            editor: {
                width: 285,
                xtype: 'numberfield',
                allowBlank: false,
                allowDecimals: false
            }
        }, {
            header: me.snippets.columnInfo,
            flex: 1,
            renderer: me.infoColumnRenderer
        }, {
            /**
             * Special column type which provides
             * clickable icons in each row
             */
            xtype: 'actioncolumn',
            width: 26 * actionColumItems.length,
            items: actionColumItems
        }];
    },

    /**
     * Creates the grid toolbar
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar: function() {
        var me = this, buttons = [];

        me.splitViewModeBtn = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-ui-split-panel',
            text: me.snippets.splitViewBtn,
            disabled: true,
            enableToggle: true,
            handler: function() {
                var selectionModel = me.getSelectionModel(),
                    record = selectionModel.getSelection()[0];

                me.fireEvent('triggerSplitView', this, record);
            }
        });

        buttons.push(me.splitViewModeBtn);

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('resource'=>'article','privilege'=>'save'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
        buttons.push(
            Ext.create('Ext.button.Button', {
                text: me.snippets.addArticle,
                iconCls:'sprite-plus-circle-frame',
                handler: function() {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Article',
                        action: 'detail'
                    });
                }
            })
        );
        /*<?php }?>*/

        //creates the delete button to remove all selected esds in one request.
        me.deleteButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-minus-circle-frame',
            text: me.snippets.deleteArticle,
            disabled: true,
            handler: function() {
                var selectionModel = me.getSelectionModel(),
                    records = selectionModel.getSelection();

                if (records.length > 0) {
                    me.fireEvent('deleteMultipleArticles', records);
                }
            }
        });

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('resource'=>'article','privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
        buttons.push(me.deleteButton);
        /*<?php }?>*/

        buttons.push({
            xtype: 'tbfill'
        });

        buttons.push({
            xtype: 'checkbox',
            width: 170,
            boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list'/'Variants','default'=>'Show variants','namespace'=>'backend/article_list/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'Variants','default'=>'Show variants','namespace'=>'backend/article_list/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display variants<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list'/'Variants','default'=>'Show variants','namespace'=>'backend/article_list/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            uncheckedValue:false,
            inputValue:true,
            listeners: {
                'change': function(field, newValue) {
                    me.fireEvent('filterVariantsChange', field, newValue);
                }
            }
        });

        buttons.push({
            xtype : 'textfield',
            name : 'searchfield',
            action : 'search',
            width: 170,
            cls: 'searchfield',
            enableKeyEvents: true,
            checkChangeBuffer: 500,
            emptyText: me.snippets.emptytextSearch,
            listeners: {
                'change': function(field, value) {
                    var store        = me.store,
                        searchString = Ext.String.trim(value);

                    //scroll the store to first page
                    store.currentPage = 1;

                    //If the search-value is empty, reset the filter
                    if (searchString.length === 0 ) {
                        store.clearFilter();
                    } else {
                        //This won't reload the store
                        store.filters.clear();

                        //Loads the store with a special filter
                        store.filter('search', searchString);
                    }
                }
            }
        });

        buttons.push({
            xtype: 'tbspacer',
            width: 6
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            items: buttons
        });
    },


    /**
     * Renders the name column and concatenates name and additionaltext if its a variant
     * @param value
     * @param metaData
     * @param record
     */
    nameColumnRenderer: function(value, metaData, record) {
        var me = this,
            additionalText = record.get('additionalText'),
            name = record.get('name');
        if(additionalText !== '') {
            return name + ', ' + additionalText;
        }
        return name;
    },

    /**
     * @param [object] - value
     */
    activeColumnRenderer: function(value) {
        if (value) {
            return '<div class="sprite-tick-small"  style="width: 25px; height: 25px">&nbsp;</div>';
        } else {
            return '<div class="sprite-cross-small" style="width: 25px; height: 25px">&nbsp;</div>';
        }
    },

    /**
     * @param [object] - value
     */
    colorColumnRenderer: function(value) {
        if (value > 0){
            return '<span style="color:green;">' + value + '</span>';
        } else {
            return '<span style="color:red;">' + value + '</span>';
        }
    },

    /**
     * @param [object] - value
     * @param [object] - metaData
     * @param [object] - record
     */
    infoColumnRenderer: function(value, metaData, record) {
        var me     = this,
            result = '',
            title;

        var style = 'style="width: 25px; height: 25px; display: inline-block; margin-right: 3px;"';

        if (!record.get('imageSrc')) {
            title = me.snippets.tooltipNoImage;
            result = result + '<div  title="' + title + '" class="sprite-image--exclamation" ' + style + '>&nbsp;</div>';
        }

        if (record.get('hasVariants')) {
            title = me.snippets.tooltipeHasVariants;
            result = result + '<div  title="' + title + '" class="sprite-documents-stack" ' + style + '>&nbsp;</div>';
        }

        if (record.get('hasConfigurator')) {
            title = me.snippets.tooltipHasConfigurator;
            result = result + '<div  title="' + title + '" class="sprite-images-stack" ' + style + '>&nbsp;</div>';
        }

        if (!record.get('hasCategories')) {
            title = me.snippets.tooltipNoCategories;
            // todo@all change icon
            result = result + '<div title="' + title + '" class="sprite-blue-folder--exclamation" ' + style + '>&nbsp;</div>';
        }

        return result;
    },

    /**
     * Creates pagingbar
     *
     * @return Ext.toolbar.Paging
     */
    getPagingbar: function() {
        var me = this;
        var pageSize = Ext.create('Ext.form.field.ComboBox', {
            labelWidth: 120,
            cls: Ext.baseCSSPrefix + 'page-size',
            queryMode: 'local',
            width: 180,
            listeners: {
                scope: me,
                select: me.onPageSizeChange
            },
            store: Ext.create('Ext.data.Store', {
                fields: [ 'value' ],
                data: [
                    { value: '20' },
                    { value: '40' },
                    { value: '60' },
                    { value: '80' },
                    { value: '100' },
                    { value: '250' }
                ]
            }),
            displayField: 'value',
            valueField: 'value'
        });
        pageSize.setValue(me.articleStore.pageSize);

        var pagingBar = Ext.create('Ext.toolbar.Paging', {
            store: me.articleStore,
            dock:'bottom',
            displayInfo:true
        });

        pagingBar.insert(pagingBar.items.length - 2, [ { xtype: 'tbspacer', width: 6 }, pageSize ]);
        return pagingBar;
    },
    /**
     * Event listener method which fires when the user selects
     * a entry in the "number of orders"-combo box.
     *
     * @event select
     * @param [object] combo - Ext.form.field.ComboBox
     * @param [array] records - Array of selected entries
     * @return void
     */
    onPageSizeChange: function(combo, records) {
        var record = records[0],
            me = this;

        me.articleStore.pageSize = record.get('value');
        me.articleStore.loadPage(1);
    }
});
//
<?php }} ?>