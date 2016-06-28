<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/base/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:6673445115770f10a9e6913-27688289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e81cdff639cc7e31a36f338f6307a3b1d490e8f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/base/detail.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6673445115770f10a9e6913-27688289',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10aa9eb29_42472928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10aa9eb29_42472928')) {function content_5770f10aa9eb29_42472928($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.base.Detail', {
    extend: 'Ext.form.Panel',
    alias: 'widget.config-base-detail',

    region: 'east',
    layout: 'anchor',
    border: false,
    width: 450,

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'title','default'=>'Details','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'title','default'=>'Details','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'title','default'=>'Details','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    autoScroll: true,
    bodyPadding: '10 10 50 10',
    collapsible: true,
    disabled: true,

    defaults: {
        xtype: 'textfield',
        anchor: '100%',
        labelWidth: 120
    },

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems(),
            buttons: me.getButtons()
        });

        me.callParent(arguments);
    },

    loadRecord: function(record) {
        var form = this.getForm();
        if(record) {
            form._record = record;
            form.setValues(record.data);
        } else {
            form._record = undefined;
            form.reset();
        }
        form.fireEvent('recordchange', form, record);
    },

    updateRecord: function(record) {
        record = record || this.getRecord();
        var fields = record.fields.items,
            values = this.getForm().getFieldValues(),
            obj = {},
            i = 0,
            len = fields.length,
            name;

        for (; i < len; ++i) {
            name  = fields[i].name;

            if (values.hasOwnProperty(name)) {
                obj[name] = values[name];
            }
        }

        record.beginEdit();
        record.set(obj);
        record.endEdit();

        return this;
    },

    /**
     * @return array
     */
    getButtons: function() {
        var me = this;
        return [{
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'reset_text','default'=>'Reset','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'reset_text','default'=>'Reset','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reset<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'reset_text','default'=>'Reset','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'secondary',
            action: 'reset'
        },{
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'save_text','default'=>'Save','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'save_text','default'=>'Save','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'save_text','default'=>'Save','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'primary',
            tooltip:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'save_tooltip','default'=>'Save (CTRL + S)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'save_tooltip','default'=>'Save (CTRL + S)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save (CTRL + S)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'save_tooltip','default'=>'Save (CTRL + S)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'save'
        }];
    },

    /**
     * @return array
     */
    getItems: function() {
        var me = this;
        return [];
    }
});
//
<?php }} ?>