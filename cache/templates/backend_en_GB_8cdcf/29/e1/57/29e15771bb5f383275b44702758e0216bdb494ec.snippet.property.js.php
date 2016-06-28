<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/base/property.js" */ ?>
<?php /*%%SmartyHeaderCode:13844541845770f10aadc529-71737768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e15771bb5f383275b44702758e0216bdb494ec' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/base/property.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13844541845770f10aadc529-71737768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10ab6b4a4_78462818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10ab6b4a4_78462818')) {function content_5770f10ab6b4a4_78462818($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */

//

//
Ext.define('Shopware.apps.Config.view.base.Property', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.config-base-property',

    plugins: [{
        ptype: 'cellediting',
        pluginId: 'cellediting',
        clicksToEdit: 1
    }],

    margin: '10 0 0 0',
    border: false,
    viewConfig: {
        emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'property_table'/'empty_text','default'=>'No entries','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_table'/'empty_text','default'=>'No entries','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No entries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_table'/'empty_text','default'=>'No entries','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            dockedItems: [
                me.getToolbar()
            ],
            columns: []
        });

        me.columns = Ext.Array.merge(me.columns, me.getColumns());

        me.callParent(arguments);
    },

    getColumns: function() {
        var me = this;

        return [me.getActionColumn()];
    },

    getActionColumn: function() {
        var me = this;
        return {
            xtype: 'actioncolumn',
            width: 25,
            items: [{
              iconCls: 'sprite-minus-circle-frame',
              action: 'delete',
              tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'property_table'/'delete_tooltip','default'=>'Delete entry','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_table'/'delete_tooltip','default'=>'Delete entry','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_table'/'delete_tooltip','default'=>'Delete entry','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
              handler: function (view, rowIndex, colIndex, item, opts, record) {
                  me.fireEvent('delete', view, record, rowIndex);
              }
            }]
        };
    },

    getToolbar: function() {
        var me = this;
        return {
            xtype: 'toolbar',
            dock: 'top',
            border: false,
            items: me.getTopBar()
        };
    },

    getTopBar: function () {
        var me = this;
        return [{
            iconCls:'sprite-plus-circle-frame',
            text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'property_table'/'add_text','default'=>'Add entry','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_table'/'add_text','default'=>'Add entry','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_table'/'add_text','default'=>'Add entry','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action:'add'
        }];
    }
});
//<?php }} ?>