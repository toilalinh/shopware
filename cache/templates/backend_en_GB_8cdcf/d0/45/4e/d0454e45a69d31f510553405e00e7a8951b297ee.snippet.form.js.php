<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/main/form.js" */ ?>
<?php /*%%SmartyHeaderCode:17128788685770f10ac912f4-08179745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0454e45a69d31f510553405e00e7a8951b297ee' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/main/form.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17128788685770f10ac912f4-08179745',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10ad5b103_01866735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10ad5b103_01866735')) {function content_5770f10ad5b103_01866735($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.main.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.config-main-form',

    autoScroll: true,
    border: false,

    /**
     *
     */
    initComponent:function () {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems(),
            buttons: me.getButtons()
        });

        me.callParent(arguments);

        me.loadRecord(me.formRecord);
    },

    /**
     * @return array
     */
    getButtons: function() {
        var me = this;
        return [{
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'reset_text','default'=>'Reset','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'reset_text','default'=>'Reset','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reset<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'reset_text','default'=>'Reset','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'secondary',
            action: 'reset'
        },{
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'save_text','default'=>'Save','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'save_text','default'=>'Save','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'save_text','default'=>'Save','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'primary',
            action: 'save'
        }];
    },

    getItems: function() {
        var me = this,
            type, name, value,
            items = [], fields = [],
            tabs = [], options,
            elementLabel = '',
            elementDescription = '',
            elementName,
            form = me.formRecord;


        var formDescription = form.get('description');
        if(form.associations.containsKey('getTranslation')) {
            if(form.getTranslation().getAt(0) && form.getTranslation().getAt(0).get('description')) {
                formDescription = form.getTranslation().getAt(0).get('description');
            }
        }

        if(formDescription) {
            items.push({
                xtype: 'fieldset',
                margin: 10,
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'description_title','default'=>'Description','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'description_title','default'=>'Description','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'description_title','default'=>'Description','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                html: formDescription
            });
        }

        me.shopStore.each(function(shop) {
            fields = [];
            form.getElements().each(function(element) {
                value = element.getValues().find('shopId', shop.getId());
                value = element.getValues().getAt(value);
                var initialValue = value;
                if(!value && shop.getId() != 1) {
                    value = element.getValues().find('shopId', 1);
                    value = element.getValues().getAt(value);
                }

                type = element.get('type').toLowerCase();
                type = 'config-element-' + type;
                name = 'values[' + shop.get('id') + ']['+ element.get('id') + ']';

                options = element.get('options');
                options = Ext.isObject(options) ? options : {};
                options = Ext.applyIf(options, options.attributes || {});
                delete options.attributes;

                elementName = element.get('name');
                elementLabel = element.get('label');
                elementDescription = element.get('description');
                if(element.associations.containsKey('getTranslation')) {
                    if(element.getTranslation().getAt(0) && element.getTranslation().getAt(0).get('label')) {
                        elementLabel = element.getTranslation().getAt(0).get('label');
                    }

                    if(element.getTranslation().getAt(0) && element.getTranslation().getAt(0).get('description')) {
                        elementDescription = element.getTranslation().getAt(0).get('description');
                    }
                }

                var field = Ext.applyIf({
                    xtype: type,
                    name: name,
                    elementName: elementName,
                    fieldLabel: elementLabel,
                    helpText: elementDescription, //helpText
                    value: value ? value.get('value') : element.get('value'),
                    emptyText: shop.get('default') ? null : element.get('value'),
                    disabled: !element.get('scope') && !shop.get('default'),
                    allowBlank: !element.get('required') || !shop.get('default')
                }, options);

                if (field.xtype == "config-element-boolean" || field.xtype == "config-element-checkbox") {
                    field = me.convertCheckBoxToComboBox(field, shop, initialValue);
                }

                fields.push(field);
            });
            if(fields.length > 0) {
                tabs.push({
                    xtype: 'config-fieldset',
                    title: shop.get('name'),
                    items: fields
                });
            }
        });

        if(tabs.length > 1) {
            items.push({
                xtype: 'tabpanel',
                bodyStyle: 'background-color: transparent !important',
                border: false,
                activeTab: 0,
                enableTabScroll: true,
                deferredRender: false,
                items: tabs
            });
        } else {
            if(tabs.length > 0) {
                delete tabs[0].title;
            }
            items.push({
                xtype: 'panel',
                bodyStyle: 'background-color: transparent !important',
                border: false,
                layout: 'fit',
                items: tabs
            });
        }
        return items;
    },

    /**
     * helper method to convert the checkbox to a combobox
     * this is done to support the not selected values by the customer
     * cause checkboxes only have two states
     *
     * @param { Shopware.apps.Base.view.element.BooleanSelect } field
     * @param { Shopware.apps.Base.model.Shop } shop
     * @param { int } initialValue
     * @returns Shopware.apps.Base.view.element.BooleanSelect
     */
    convertCheckBoxToComboBox: function (field, shop, initialValue) {
        var booleanSelectValue = field.value;

        if (shop.get('id') != 1 && initialValue === undefined) {
            // set empty string only for foreign shops as a fallback to the default shop
            // the default shop always got a value
            booleanSelectValue = '';
        }
        else {
            //cast the value to boolean
            booleanSelectValue = Boolean(field.value);
        }

        Ext.apply(field, {
            xtype: "base-element-boolean-select",
            value: booleanSelectValue,
            emptyText: ""
        });

        return field;
    }
});
//
<?php }} ?>