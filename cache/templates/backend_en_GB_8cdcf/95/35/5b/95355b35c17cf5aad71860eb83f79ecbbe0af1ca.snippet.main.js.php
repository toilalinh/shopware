<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:21368494835770f109a553e1-55406896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95355b35c17cf5aad71860eb83f79ecbbe0af1ca' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/controller/main.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21368494835770f109a553e1-55406896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f109b17490_45846197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f109b17490_45846197')) {function content_5770f109b17490_45846197($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Config backend module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.controller.Main', {
    extend: 'Enlight.app.Controller',

    views: [
        'base.Form',
        'base.Table',
        'base.Detail',
        'base.Search',
        'base.Property',

        'main.Window', 'main.Navigation', 'main.Iframe',
        'main.Panel',
        'main.Form', 'main.Fieldset',

        'element.Boolean', 'element.Button', 'element.Date',
        'element.Html', 'element.Select', 'element.Text',
        'element.TextArea', 'element.Time', 'element.Number',
        'element.DateTime', 'element.Interval', 'element.SelectTree',
        'element.Color'
    ],

    stores:[
        'main.Navigation',
        'main.Form'
    ],

    models:[
        'main.Form', 'main.Navigation',
        'main.Element' , 'main.Value',
        'main.ElementTranslation', 'main.FormTranslation'
    ],

    refs: [
        { ref: 'window', selector: 'config-main-window' },
        { ref: 'shopField', selector: 'config-navigation [name=shop]' },
        { ref: 'panel', selector: 'config-main-panel' },
        { ref: 'form', selector: 'config-main-form' }
    ],

    /**
     * The main window instance
     * @object
     */
    mainWindow: null,

    init: function () {
        var me = this;

        // Init main window
        me.mainWindow = me.getView((me.subApplication.mode) ? 'main.Iframe' : 'main.Window').create({
            mode: me.subApplication.mode,
            autoShow: true,
            hideNavigation: !!me.action
        });

        // Register base stores
        me.navigationStore = me.getStore('main.Navigation');
        me.shopStore = Ext.data.StoreManager.lookup('base.ShopLanguage').load();
        me.formStore = me.getStore('main.Form');

        // Register events
        me.control({
            'config-navigation treepanel': {
                select: me.onSelectForm
            },
            'config-main-form button[action=save]': {
                click: me.onSaveForm
            },
			'config-main-form button[action=reset]': {
				click: me.onResetForm
			},
            'config-navigation config-base-search': {
                change: me.onSearchForm
            }
        });
        me.formStore.on('load', me.onLoadForm, me);
//
        if(me.action) {
            me.formStore.load({
                filters : [{
                    property: Ext.isNumeric(me.action) ? 'id' : 'name',
                    value: me.action
                }]
            });
        }
    },

	onResetForm: function(btn){
		var me = this,
			formPanel = btn.up('form'),
			basicForm = formPanel.getForm();

		Ext.each(basicForm.getFields().items, function(field) {
			field.reset();
		});
	},

    onLoadForm: function(store, records, success) {
        var me = this, form, controller;
        if (success !== true || !records.length) {
            return;
        }
        form = records[0];

        if(form.associations.containsKey('getTranslation')) {
            if(form.getTranslation().getAt(0) && form.getTranslation().getAt(0).get('label')) {
                form.data.label = form.getTranslation().getAt(0).get('label');
            }
        }

        if(form.get('name') == 'Template') {
            controller = 'Template';
        } else if(form.get('name') == 'Document') {
			controller = 'Document';
			me.getController('Form');
		} else {
			controller = 'Form';
		}
        me.getController(controller);

        me.initForm(form);
    },

    onSelectForm: function(tree, record) {
        var me = this;
        if(!record.data.id) {
            return;
        }
        if(!record.get('leaf')) {
            record.expand();
            return;
        }

        var panel = me.mainWindow.contentPanel;
        panel.setLoading('Loading ' + record.get('label') + '...');

        me.formStore.load({
            filters : [{
                property: 'id',
                value: record.data.id
            }]
        });
    },

    onSearchForm: function(field, value) {
        var me = this;
        var store = me.getStore('main.Navigation');
        if (value.length === 0 ) {
            store.load();
        } else {
            store.load({
                filters : [{
                    property: 'search',
                    value: '%' + value + '%'
                }]
            });
        }
    },

    onSaveForm: function(button) {
        var me = this,
            formPanel = button.up('form'),
            basicForm = formPanel.getForm(),
            form = basicForm.getRecord(),
            values = basicForm.getFieldValues(),
            fieldName, fieldValue, valueStore;

        form.getElements().each(function(element) {
            valueStore = element.getValues();
            valueStore.removeAll();
            me.shopStore.each(function(shop) {
                fieldName = 'values[' + shop.get('id') + ']['+ element.get('id') + ']';
                fieldValue = values[fieldName];
                if(fieldValue !== null) {
                    valueStore.add({
                        shopId: shop.get('id'),
                        value: fieldValue
                    });
                }
            });
        });

        form.setDirty();

        var title = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message'/'save_form_title','default'=>'Save form','namespace'=>'backend/config/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message'/'save_form_title','default'=>'Save form','namespace'=>'backend/config/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message'/'save_form_title','default'=>'Save form','namespace'=>'backend/config/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            win = me.getWindow();

        form.store.add(form);
        form.store.sync({
            success :function (records, operation) {
                var template = new Ext.Template('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message'/'save_form_success','default'=>'Form „[name]“ has been saved.','namespace'=>'backend/config/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message'/'save_form_success','default'=>'Form „[name]“ has been saved.','namespace'=>'backend/config/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Form \u201E[name]\u201C has been saved.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message'/'save_form_success','default'=>'Form „[name]“ has been saved.','namespace'=>'backend/config/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'),
                    message = template.applyTemplate({
                        name: form.data.label || form.data.name
                    });
                Shopware.Notification.createGrowlMessage(title, message, win.title);
            },
            failure:function (batch) {
                var template = new Ext.Template('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message'/'save_form_error','default'=>'Form „[name]“ could not be saved.','namespace'=>'backend/config/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message'/'save_form_error','default'=>'Form „[name]“ could not be saved.','namespace'=>'backend/config/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Form \u201E[name]\u201C could not be saved.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message'/'save_form_error','default'=>'Form „[name]“ could not be saved.','namespace'=>'backend/config/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'),
                    message = template.applyTemplate({
                        name: form.data.label || form.data.name
                    });
                if(batch.proxy.reader.rawData.message) {
                    message += '<br />' + batch.proxy.reader.rawData.message;
                }
                Shopware.Notification.createGrowlMessage(title, message, win.title);
            }
        });
    },

    /**
     *
     * @param form
     */
    initForm: function(form) {
        var me = this,
            win = me.mainWindow,
            panel = win.contentPanel;

        if(me.shopStore.isLoading()) {
            Ext.defer(me.initForm, 100, me, [ form ]);
            return false;
        }

        var formPanel,
            formType = 'widget.config-form-' + form.get('name').toLowerCase();

        panel.removeAll(true);

        win.loadTitle(form);

        if (Ext.ClassManager.getNameByAlias(formType)) {
            formPanel = Ext.create(formType, {
                shopStore: me.shopStore,
                formRecord: form
            });
        } else {
            formPanel =  Ext.createByAlias('widget.config-main-form', {
                shopStore: me.shopStore,
                formRecord: form
            });
        }
        panel.add(formPanel);
        panel.setLoading(false);
    }
});
//
<?php }} ?>