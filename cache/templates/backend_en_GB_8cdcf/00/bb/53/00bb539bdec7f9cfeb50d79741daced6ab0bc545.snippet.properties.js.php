<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/properties.js" */ ?>
<?php /*%%SmartyHeaderCode:16774798685770f0d81f0148-40562282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00bb539bdec7f9cfeb50d79741daced6ab0bc545' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/properties.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16774798685770f0d81f0148-40562282',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d8349960_19432787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d8349960_19432787')) {function content_5770f0d8349960_19432787($_smarty_tpl) {?>/**
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
 * The properties component contains the grid panel for the article properties.
 * The grid supports a multi selection over a grid combo box element.
 * On top of the grid, a combo box displayed where the user can select a property group.
 * After the selection of a property group, the group options will be displayed in the grid.
 */
//
//
Ext.define('Shopware.apps.Article.view.detail.Properties', {
    /**
     * Define that the billing field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.FieldSet',
    /**
     * The Ext.container.Container.layout for the fieldset's immediate child items.
     * @object
     */
    layout: 'anchor',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-properties-field-set',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-properties-field-set',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'properties'/'title','default'=>'Properties','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'title','default'=>'Properties','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Properties<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'title','default'=>'Properties','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        notice:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'properties'/'notice','default'=>'To configure an article property, please select a suitable property group via the selection box. Hereafter, a grid with all property values will be displayed. To change the values as well, you can click on the second grid column and modify the value via combo box (multiple selection possible).','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'notice','default'=>'To configure an article property, please select a suitable property group via the selection box. Hereafter, a grid with all property values will be displayed. To change the values as well, you can click on the second grid column and modify the value via combo box (multiple selection possible).','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To set a item property, please select a suitable property group via the selection box. A grid with all property values will be displayed. To change these values as well, you can click on the second grid column and modify the values by clicking in the boxes (multiple selections possible).<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'notice','default'=>'To configure an article property, please select a suitable property group via the selection box. Hereafter, a grid with all property values will be displayed. To change the values as well, you can click on the second grid column and modify the value via combo box (multiple selection possible).','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        property:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'properties'/'property','default'=>'Select property','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'property','default'=>'Select property','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select property<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'property','default'=>'Select property','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        name:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'properties'/'name_column','default'=>'Property','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'name_column','default'=>'Property','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Property<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'name_column','default'=>'Property','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        value:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'properties'/'value_column','default'=>'Values','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'value_column','default'=>'Values','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Values<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'properties'/'value_column','default'=>'Values','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        empty:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },
    /**
     * Contains the field set defaults.
     */
    defaults: {
        labelWidth: 155,
        anchor: '100%'
    },

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
        me.title = me.snippets.title;
        me.items = me.createElements();
        me.callParent(arguments);
    },

    /**
     * Creates the elements for the properties field set.
     * @return Array
     */
    createElements: function () {
        var me = this;

        var notice = Ext.create('Ext.container.Container', {
            html: me.snippets.notice,
            style: 'font-style: italic; color: #999; margin: 0 0 8px 0; font-size: 11px;'
        });

        me.propertyGrid = me.createPropertyGrid();

        me.propertyCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'filterGroupId',
            labelWidth: 155,
            forceSelection: false,
            queryMode: 'local',
            valueField: 'id',
            displayField: 'name',
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.property
        });

        return [ notice, me.propertyCombo, me.propertyGrid ];
    },

    /**
     * Creates the grid panel for the article properties.
     * @return Ext.grid.Panel
     */
    createPropertyGrid: function() {
        var me = this, store = null;

        return me.propertyGrid = Ext.create('Ext.grid.Panel', {
            height: 255,
            name: 'property-grid',
            cls: Ext.baseCSSPrefix + 'free-standing-grid ' + Ext.baseCSSPrefix + 'article-properties-grid',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'property'/'title','default'=>'Properties','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'property'/'title','default'=>'Properties','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Properties<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'property'/'title','default'=>'Properties','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            plugins: [{
                ptype: 'cellediting',
                clicksToEdit: 1,
                cls: Ext.baseCSSPrefix + 'article-properties-grid-editor'
            }],
            selType: 'cellmodel',
            columns: [
                {
                    header: me.snippets.name,
                    dataIndex: 'name',
                    editor: {
                        xtype: 'textfield',
                        readOnly: true
                    },
                    width: 150
                } , {
                    header: me.snippets.value,
                    dataIndex: 'value',
                    flex: 1,
                    renderer: me.getValueRenderer,
                    editor: me.getValueEditor()
                }
            ]
        });
    },

    getValueEditor: function() {
        var me = this;
        return me.valueEditor =  Ext.create('Ext.ux.form.field.BoxSelect', {
            store: me.valueStore,
            multiSelect: true,
            forceSelection: false,
            createNewOnEnter: true,
            createNewOnBlur: true,
            delimiter: ', ',
            typeAhead: true,
            displayField: 'value',
            valueField: 'id',
            queryMode: 'remote',
            minChars: 2,
            cls: Ext.baseCSSPrefix + 'article-properties-box-selection'
        });
    },

    getValueRenderer: function(values, metadata, record, rowIndex, colIndex) {
        var me = this,
            column = me.columns[colIndex],
            result = [];
        if(!column.editor && !column._editor) {
            return value;
        }
        if(!column._editor) {
            column._editor = column.editor;
        }

        var editor = column._editor,
            store = editor.store || me.valueStore;

        Ext.each(values, function(value, key) {
            var map = store.getById(value);
            result[result.length] = map ? map.get(editor.displayField) : value;
        });

        return result.join(', ');
    },

    onStoresLoaded: function(article, stores) {
        var me = this, propertyStore = stores['properties'];
        me.article = article;
        me.store = Ext.data.StoreManager.lookup('Property');
        me.valueStore = Ext.data.StoreManager.lookup('PropertyValue');

        me.propertyCombo.bindStore(propertyStore);
        me.propertyGrid.reconfigure(me.store);
        me.valueEditor.bindStore(me.valueStore);
    }
});
//
<?php }} ?>