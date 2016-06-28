<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/base/table.js" */ ?>
<?php /*%%SmartyHeaderCode:20520883465770f10a92a832-44344987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81493b303d95e61dd5c962b43675d21cb1a6762c' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/base/table.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20520883465770f10a92a832-44344987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a9de053_41886651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a9de053_41886651')) {function content_5770f10a9de053_41886651($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.base.Table', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.config-base-table',

    region: 'center',
    border: false,

    deletable: true,
    addable: true,

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            dockedItems: [
                me.getPagingToolbar(),
                me.getToolbar()
            ],
            columns: me.getColumns()
        });

        me.callParent(arguments);

        me.store.clearFilter(true);
        me.store.load();
    },

    getColumns: function() {
        var me = this;
        return [];
    },

    getPagingToolbar: function() {
        var me = this;
        return {
            xtype: 'pagingtoolbar',
            displayInfo: true,
            store: me.store,
            dock: 'bottom'
        };
    },

    getToolbar: function() {
        var me = this;
        return {
            xtype: 'toolbar',
            ui: 'shopware-ui',
            dock: 'top',
            border: false,
            items: me.getTopBar()
        };
    },

    getTopBar:function () {
        var me = this;
        var items = [];
        if(me.addable) {
            items.push({
                iconCls:'sprite-plus-circle-frame',
                text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'add_text','default'=>'Add entry','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'add_text','default'=>'Add entry','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'add_text','default'=>'Add entry','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                tooltip:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'add_tooltip','default'=>'Add (ALT + INSERT)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'add_tooltip','default'=>'Add (ALT + INSERT)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add (ALT + INSERT)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'add_tooltip','default'=>'Add (ALT + INSERT)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action:'add'
            });
        }
        if(me.deletable) {
            items.push({
                iconCls:'sprite-minus-circle-frame',
                text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'delete_text','default'=>'Delete entry','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'delete_text','default'=>'Delete entry','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'delete_text','default'=>'Delete entry','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                tooltip:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'delete_tooltip','default'=>'Delete (ALT + DELETE)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'delete_tooltip','default'=>'Delete (ALT + DELETE)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete (ALT + DELETE)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'delete_tooltip','default'=>'Delete (ALT + DELETE)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                disabled:true,
                action:'delete'
            });
        }
        items.push('->', {
            xtype:'config-base-search'
        }, {
            xtype:'tbspacer', width:6
        });
        return items;
    }
});
//
<?php }} ?>