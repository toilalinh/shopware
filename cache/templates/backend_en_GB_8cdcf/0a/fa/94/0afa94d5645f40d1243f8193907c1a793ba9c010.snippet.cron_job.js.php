<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:44
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/form/cron_job.js" */ ?>
<?php /*%%SmartyHeaderCode:12341052735770f118eb2a42-04615655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0afa94d5645f40d1243f8193907c1a793ba9c010' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/form/cron_job.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12341052735770f118eb2a42-04615655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f11906e321_84800233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f11906e321_84800233')) {function content_5770f11906e321_84800233($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.form.CronJob', {
    extend: 'Shopware.apps.Config.view.base.Form',
    alias: 'widget.config-form-cronjob',

    getItems: function() {
        var me = this;
        return [{
            xtype: 'config-base-table',
            store: 'form.CronJob',
            columns: me.getColumns()
        },{
            xtype: 'config-base-detail',
            items: me.getFormItems()
        }];
    },

    getColumns: function() {
        var me = this;
        return [{
            dataIndex: 'name',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, {
            dataIndex: 'action',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'action_text','default'=>'Action','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'action_text','default'=>'Action','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'action_text','default'=>'Action','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, {
            xtype: 'booleancolumn',
            dataIndex: 'active',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'table'/'active_text','default'=>'Active','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'active_text','default'=>'Active','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'table'/'active_text','default'=>'Active','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, me.getActionColumn()];
    },

    getFormItems: function() {
        var me = this;
        return [{
            xtype: 'hidden',
            name: 'pluginId',
            listeners:{
                change: function(field, value) {
                    var form = field.up('form'),
                        hideFields = form.query('[isReadOnlyField]');
                    Ext.each(hideFields, function(hideField) {
                        hideField.setReadOnly(value === null || value === '');
                    })
                }
            }
        }, {
            name: 'name',
            allowBlank: false,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            readOnly: true,
            isReadOnlyField: true,
            allowBlank: false,
            name: 'action',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'action_label','default'=>'Action','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'action_label','default'=>'Action','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'action_label','default'=>'Action','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            xtype: 'config-element-textarea',
            name: 'data',
            readOnly: true,
            isReadOnlyField: true,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'data_label','default'=>'Data','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'data_label','default'=>'Data','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Data<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'data_label','default'=>'Data','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            xtype: 'config-element-datetime',
            name: 'start',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'last_label','default'=>'Last','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'last_label','default'=>'Last','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last execution<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'last_label','default'=>'Last','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            xtype: 'config-element-datetime',
            name: 'next',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'next_label','default'=>'Next','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'next_label','default'=>'Next','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next execution<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'next_label','default'=>'Next','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            xtype: 'config-element-interval',
            name: 'interval',
            allowBlank: false,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'interval_label','default'=>'Interval','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'interval_label','default'=>'Interval','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Interval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'interval_label','default'=>'Interval','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            xtype: 'config-element-boolean',
            name: 'active',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'active_label','default'=>'Active','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'active_label','default'=>'Active','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'active_label','default'=>'Active','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            name: 'informMail',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'inform_mail_label','default'=>'Email recipient','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'inform_mail_label','default'=>'Email recipient','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email recipient<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'inform_mail_label','default'=>'Email recipient','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            name: 'informTemplate',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'inform_template_label','default'=>'Email template','namespace'=>'backend/config/view/cron_job')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'inform_template_label','default'=>'Email template','namespace'=>'backend/config/view/cron_job'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'inform_template_label','default'=>'Email template','namespace'=>'backend/config/view/cron_job'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }];
    }
});
//
//taxinput<?php }} ?>