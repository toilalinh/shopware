<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:45
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/tax/rule.js" */ ?>
<?php /*%%SmartyHeaderCode:13514265715770f1195282e1-30684332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48deae31e60e3bb285129707526b29a201b9b9df' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/tax/rule.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13514265715770f1195282e1-30684332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f11960cc35_61906142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f11960cc35_61906142')) {function content_5770f11960cc35_61906142($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Backend - View for tax rules
 */

//

//
Ext.define('Shopware.apps.Config.view.tax.Rule', {
    extend:'Shopware.apps.Config.view.base.Property',
    alias:'widget.config-tax-rule',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'title','default'=>'Tax rules','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'title','default'=>'Tax rules','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tax regulations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'title','default'=>'Tax rules','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    name: 'rules',

    initComponent: function() {
        var me = this;

        me.callParent(arguments);

        me.on('beforeedit', me.onComboEdit);
    },

    getColumns: function() {
        var me = this;

        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'name_header','default'=>'Name','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'name_header','default'=>'Name','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'name_header','default'=>'Name','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'name',
            flex: 1.5,
            field: 'textfield'
        },{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'area_header','default'=>'Area','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'area_header','default'=>'Area','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Area<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'area_header','default'=>'Area','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'areaId',
            flex:1,
            editor: {
                xtype: 'config-element-select',
				queryMode:'local',
				queryCaching:true,
                store: Ext.data.StoreManager.lookup('base.CountryArea').load(),
                displayField: 'name',
                valueField: 'id',
                emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            renderer: me.onComboRenderer
        },{
            header:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'country_header','default'=>'Country','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'country_header','default'=>'Country','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'country_header','default'=>'Country','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex:'countryId',
            flex:1,
            editor: {
                xtype: 'config-element-select',
				queryMode:'local',
				queryCaching:true,
                store: Ext.data.StoreManager.lookup('base.Country').load(),
                displayField:'name',
                valueField:'id',
                emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            renderer: me.onComboRenderer
        },{
            header:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'state_header','default'=>'State','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'state_header','default'=>'State','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
State<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'state_header','default'=>'State','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex:'stateId',
            flex:1,
            editor: {
                xtype: 'config-element-select',
				queryMode:'local',
				queryCaching:true,
                store:Ext.data.StoreManager.lookup('base.CountryState').load(),
                displayField:'name',
                valueField:'id',
                emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'select_empty_text','default'=>'All','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            renderer: me.onComboRenderer
        },{
            header:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'rules'/'tax_header','default'=>'Tax','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'tax_header','default'=>'Tax','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tax<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'rules'/'tax_header','default'=>'Tax','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex:'tax',
            flex:1,
            xtype:'numbercolumn', format:'00.00',
            editor:{
                xtype:'numberfield',
                allowBlank:false,
                decimalPrecision:2
            }
        }, me.getActionColumn()];
    },

    onComboEdit: function(plugin, event) {
        var me = this,
            column = me.columns[event.colIdx];
        if(!column || !column.editor && !column._editor) {
            return;
        }
        if(!column._editor) {
            column._editor = column.editor;
        }
        var editor = column._editor,
            store = editor.store,
            record = event.record,
            filter, value, filters;
        switch(event.field) {
            case 'areaId':
                record.set('countryId', null);
                record.set('stateId', null);
                break;
            case 'countryId':
                filter = 'areaId';
                record.set('stateId', null);
                break;
            case 'stateId':
                filter = 'countryId';
                break;
        }
        if(filter) {
            value = record.get(filter);
        }
        if(value) {
            filters = [{
                property: filter,
                value: value
            }]
        }
        store.load({
            filters: filters
        });
    },

    onComboRenderer: function(value, metadata, record, rowIndex, colIndex) {
        var me = this,
            column = me.columns[colIndex];
        if(!column.editor && !column._editor) {
            return value;
        }
        if(!column._editor) {
            column._editor = column.editor;
        }
        var editor = column._editor,
            store = column._editor.store,
            index, record;

        if(!value) {
            return editor.emptyText;
        }
        store.clearFilter(true);
        index = store.find(editor.valueField, value);
        record = store.getAt(index);
        if(!record) {
            return editor.emptyText;
        }
        value = record.get(editor.displayField);
        return value.substr(0, 1).toUpperCase() + value.substr(1);
    },

    getTopBar: function () {
        var me = this,
            topBar = me.callParent();
        me.addButton = Ext.apply(topBar[0],{ disabled:true });

        topBar.push({
            xtype: 'config-element-select',
            flex: 1,
            isPropertyFilter: true,
            name: 'customerGroupId',
            editable: false,
            store: 'base.CustomerGroup',
            listeners: {
                enable: function() {
                    // if available get the first entry
                    if(this.store.getAt('0')) {
                        this.setValue(this.store.getAt('0').get('id'));
                    }
                }
            }
        });
        return topBar;
    }
});
//<?php }} ?>