<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/template/view.js" */ ?>
<?php /*%%SmartyHeaderCode:110244415770f10a5e6124-54575403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3874f9fc81a79fcb983280c2efb3bbe8014839' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/template/view.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110244415770f10a5e6124-54575403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a721da3_11617886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a721da3_11617886')) {function content_5770f10a721da3_11617886($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.template.View', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.config-template-view',

    region: 'center',
    store: 'form.Template',

    autoScroll: true,
    border: false,

    initComponent: function() {
        var me = this;

        me.store = Ext.data.StoreManager.lookup(me.store);

        Ext.applyIf(me, {
            items: [
                me.getDataView()
            ],
            dockedItems: [
                me.getPagingToolbar(),
                me.getToolbar()
            ]
        });

        me.callParent(arguments);

        me.store.load();
    },

    getDataView: function() {
        var me = this;
        return {
            xtype: 'dataview',
            tpl: me.getViewTemplate(),

            itemSelector: '.thumb-wrap',
            style: 'background: #fff',
            store: me.store
        };
    },

    getViewTemplate: function() {
        var me = this;
        return new Ext.XTemplate(
            '<tpl for=".">',

            '<tpl if="enabled">',
                '<div class="thumb-wrap enabled" id="{template}">',
            '<tpl elseif="preview">',
                '<div class="thumb-wrap previewed" id="{template}">',
            '<tpl else>',
                '<div class="thumb-wrap" id="{template}">',
            '</tpl>',

            '<tpl if="enabled">',
                '<div class="hint enabled"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'hint_enabled','default'=>'Enabled','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'hint_enabled','default'=>'Enabled','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'hint_enabled','default'=>'Enabled','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></div>',
            '<tpl elseif="preview">',
                '<div class="hint preview"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'hint_preview','default'=>'Preview','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'hint_preview','default'=>'Preview','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'hint_preview','default'=>'Preview','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></div>',
            '</tpl>',

            '<div class="thumb">',
                '<div class="inner-thumb">',
                '<tpl if="previewThumb">',
                    '<img src="{previewThumb}" title="{name}" />',
                '</tpl>',
                '</div>',
            '</div>',

            '<span class="x-editable">{name}</span>',
            '   </div>',
            '</tpl>',
            '<div class="x-clear"></div>'
        );
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
        return [{
            iconCls:'sprite-application-search-result',
            text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'start_preview_text','default'=>'Start preview','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'start_preview_text','default'=>'Start preview','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'start_preview_text','default'=>'Start preview','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled:true,
            action:'preview'
        }, {
            iconCls:'sprite-application-search-result',
            text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'stop_preview_text','default'=>'Stop preview','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'stop_preview_text','default'=>'Stop preview','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stop preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'stop_preview_text','default'=>'Stop preview','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            hidden:true,
            action:'stop-preview'
        }, {
            iconCls:'sprite-application--arrow',
            text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'select_template_text','default'=>'Select template','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'select_template_text','default'=>'Select template','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'select_template_text','default'=>'Select template','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled:true,
            action:'enable'
        }, {
            xtype: 'config-element-select',
            editable: false,
            name: 'shop',
            emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'shop_empty_text','default'=>'Please select a shop...','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'shop_empty_text','default'=>'Please select a shop...','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select shop...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'shop_empty_text','default'=>'Please select a shop...','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            store: 'base.Shop'
        }, '->', {
            xtype:'config-base-search'
        }, {
            xtype:'tbspacer', width:6
        }];
    }
});
//
<?php }} ?>