<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/form/document.js" */ ?>
<?php /*%%SmartyHeaderCode:15545170375770f10a5ee018-84524260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ddb8d5fae852b358a8c84c8a47bdf82c2752dac' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/form/document.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15545170375770f10a5ee018-84524260',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10ac951e4_92101259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10ac951e4_92101259')) {function content_5770f10ac951e4_92101259($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.form.Document', {
    extend: 'Shopware.apps.Config.view.base.Form',
    alias: 'widget.config-form-document',

    getItems: function() {
        var me = this;
        return [{
            xtype: 'config-base-table',
            store: 'form.Document',
            columns: me.getColumns()
        },{
			xtype: 'config-base-detail',
			items: me.getFormItems(),
			store: 'detail.Document',
			width: '60%',
			plugins: [{
				pluginId: 'translation',
				ptype: 'translation',
				translationType: 'documents',
				translationMerge: true
			}]
		}];
    },

    getColumns: function() {
        var me = this;
        return [{
            xtype: 'gridcolumn',
            dataIndex: 'name',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, me.getActionColumn()];
    },

    getFormItems: function() {
        var me = this;
		var html =
				'<div style="font-size: 10px" class="containerDocument">' +
					'<div style="border:1px dotted;position:absolute;width:25px;height:15px;margin-left:5px;margin-top:15px;text-align:center">Body</div>' +
					'<div style="width:30px;margin:0 auto;height:5px;background-color:#CCC"></div>' +
					'<div style="position:absolute;width:5px;margin-top:202px;height:30px;background-color:#CCC"></div>' +
					'<div style="position:absolute;width:5px;margin-top:202px;margin-left:310px;height:30px;background-color:#CCC"></div>' +
					'<div style="position:absolute;width:30px;margin-top:425px;;margin-left:140px;height:5px;background-color:#CCC"></div>' +
					'<div style="border:1px dotted;position:absolute;width:90px;height:25px;margin-left:45px;margin-top:15px;text-align:center">Logo</div>' +
					'<div style="border:1px dotted;position:absolute;width:100px;height:15px;margin-left:45px;margin-top:50px;text-align:center;font-weight:bold">[Header_Box_Left]</div>' +
					'<div style="border:1px dotted;position:absolute;width:100px;height:45px;margin-left:45px;margin-top:65px;text-align:center">Header_Sender<br />Header_Recipient</div>' +
					'<div style="border:1px dotted;position:absolute;width:60px;height:110px;margin-left:245px;margin-top:55px;text-align:center;font-weight:bold">Header_<br />Box_<br />Right</div>' +
					'<div style="border:1px dotted;position:absolute;width:260px;height:120px;margin-left:45px;margin-top:45px;text-align:center">[Header]</div>' +
					'<div style="border:1px dotted;position:absolute;width:160px;height:20px;margin-left:45px;margin-top:180px;text-align:center">Header_Box_Bottom</div>' +
					'<div style="border:1px dotted;position:absolute;width:250px;height:105px;margin-left:45px;margin-top:225px;text-align:center">Content<br />Td/Td_Head/Td_Line/Td_Name</div>' +
					'<div style="border:1px dotted;position:absolute;width:95px;height:45px;margin-left:200px;margin-top:335px;text-align:center">Content_Amount</div>' +
					'<div style="border:1px dotted;position:absolute;width:95px;height:35px;margin-left:45px;margin-top:335px;text-align:center">Content_Info</div>' +
					'<div style="border:1px dotted;position:absolute;width:250px;height:15px;margin-left:45px;margin-top:400px;text-align:center">Footer</div>' +
				'</div>'
        return [{
			xtype: 'fieldset',
			defaults: {
				anchor: '100%',
				labelWidth: 250,
				xtype: 'textfield'
			},
			items:[{
				name: 'id',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'id_label','default'=>'ID','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'id_label','default'=>'ID','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'id_label','default'=>'ID','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				hidden: true
			},{
				name: 'name',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				allowBlank: false,
				translatable: true
			},{
				name: 'numbers',
				xtype: 'config-element-select',
				valueField: 'name',
                displayField: 'description',
				store: 'form.Number',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'numbers_label','default'=>'Numbers','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'numbers_label','default'=>'Numbers','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Numbers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'numbers_label','default'=>'Numbers','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
				name: 'template',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'template_label','default'=>'Template','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'template_label','default'=>'Template','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'template_label','default'=>'Template','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
				name: 'left',
                xtype: 'config-element-number',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'left_label','default'=>'Spacing left (mm)','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'left_label','default'=>'Spacing left (mm)','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Spacing left (mm)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'left_label','default'=>'Spacing left (mm)','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
				name: 'right',
                xtype: 'config-element-number',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'right_label','default'=>'Spacing right (mm)','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'right_label','default'=>'Spacing right (mm)','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Spacing right (mm)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'right_label','default'=>'Spacing right (mm)','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
				name: 'top',
                xtype: 'config-element-number',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'top_label','default'=>'Spacing top (mm)','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'top_label','default'=>'Spacing top (mm)','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Spacing top (mm)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'top_label','default'=>'Spacing top (mm)','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
				name: 'bottom',
                xtype: 'config-element-number',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'bottom_label','default'=>'Spacing bottom (mm)','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'bottom_label','default'=>'Spacing bottom (mm)','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Spacing bottom (mm)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'bottom_label','default'=>'Spacing bottom (mm)','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
				name: 'pageBreak',
                xtype: 'config-element-number',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'pagebreak_label','default'=>'Articles per page','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'pagebreak_label','default'=>'Articles per page','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items per page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'pagebreak_label','default'=>'Articles per page','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
			},{
                xtype: 'config-element-boolean',
				name: 'booleanPageBreak',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'booleanpagebreak_label','default'=>'Pagination','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'booleanpagebreak_label','default'=>'Pagination','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pagination<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'booleanpagebreak_label','default'=>'Pagination','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				style: {
					marginTop: '20px'
				}
			},{
				xtype: 'container',
				layout: 'hbox',
				items: [{
					xtype: 'config-element-button',
					text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'preview_button','default'=>'Preview','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'preview_button','default'=>'Preview','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'preview_button','default'=>'Preview','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
					width: 150,
					iconCls: 'sprite-document-pdf',
					handler: function(){
						var detailPanel = me.down('config-base-detail'),
							values = detailPanel.getValues();
						var previewPageBreak = values['booleanPageBreak'] ? '&pagebreak=on' : '';
						window.open('<?php echo '/backend/document';?>?typ=' + values.id + '&preview=1&sampleData=1' + previewPageBreak);
					}
				},{
					xtype: 'config-element-button',
					width: 150,
					style: {
						marginLeft: '10px'
					},
					iconCls: 'sprite-document-template',
					text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'preview_structure','default'=>'View structure','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'preview_structure','default'=>'View structure','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View structure<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'preview_structure','default'=>'View structure','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
					handler: function(){
						Ext.create('Ext.window.Window',{
							title: 'Structure',
							width: '319px',
							height: '471px',
							border: 0,
							items: {
								xtype: 'container',
								html: html
							}
						}).show();
					}
				}]

			}]
		},{
			xtype: 'fieldset',
			title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'elements_label','default'=>'Elements','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'elements_label','default'=>'Elements','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Elements<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'elements_label','default'=>'Elements','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			name: 'elementFieldSet',
			defaults: {
				anchor: '100%',
				labelWidth: 250,
				xtype: 'textfield'
			},
			items:[{
				xtype: 'config-element-button',
				text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'applyconfig_label','default'=>'Use the element-config for all forms','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'applyconfig_label','default'=>'Use the element-config for all forms','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use the config for all forms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'applyconfig_label','default'=>'Use the element-config for all forms','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				width: '100%',
				style :{
					'margin-bottom': '10px'
				},
				handler: function(){
					var detailPanel = me.down('config-base-detail'),
						values = detailPanel.getValues(),
						id = values['id'];

                    Ext.MessageBox.confirm(
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'applyconfig_label','default'=>'Use the element-config for all forms','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'applyconfig_label','default'=>'Use the element-config for all forms','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use the config for all forms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'applyconfig_label','default'=>'Use the element-config for all forms','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'applyconfig_config_confirm_message','default'=>'Are you sure you want to take over the properties for all types of documents?','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'applyconfig_config_confirm_message','default'=>'Are you sure you want to take over the properties for all types of documents?','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Should these settings be applied to all document types?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'applyconfig_config_confirm_message','default'=>'Are you sure you want to take over the properties for all types of documents?','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        function (response) {
                            if (response !== 'yes') {
                                return false;
                            }
                            Ext.Ajax.request({
                                url: '<?php echo '/backend/Document/duplicateProperties';?>',
                                params: {
                                    id: id
                                },
                                scope: this
                            });
                        }
                    );
				}
			},{
				xtype: 'combo',
				queryMode:'local',
				forceSelection: true,
				valueField: 'id',
				displayField: 'name',
				name: 'elements'
			},{
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_body','default'=>'Body-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_body','default'=>'Body-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Body content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_body','default'=>'Body-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Body_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_logo','default'=>'Logo-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_logo','default'=>'Logo-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logo content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_logo','default'=>'Logo-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Logo_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_header_recipient','default'=>'Header-Recipient-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_recipient','default'=>'Header-Recipient-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header recipient content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_recipient','default'=>'Header-Recipient-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Recipient_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_header','default'=>'Header-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header','default'=>'Header-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header','default'=>'Header-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_header_sender','default'=>'Header-Sender-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_sender','default'=>'Header-Sender-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header sender content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_sender','default'=>'Header-Sender-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Sender_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_header_box_left','default'=>'Header-Box-Left-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_box_left','default'=>'Header-Box-Left-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header box left content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_box_left','default'=>'Header-Box-Left-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Box_Left_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_header_box_right','default'=>'Header-Box-Right-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_box_right','default'=>'Header-Box-Right-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header box right content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_box_right','default'=>'Header-Box-Right-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Box_Right_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_label_header_box_bottom','default'=>'Header-Box-Bottom-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_box_bottom','default'=>'Header-Box-Bottom-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header box bottom content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_label_header_box_bottom','default'=>'Header-Box-Bottom-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Box_Bottom_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_content_label','default'=>'Content-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_content_label','default'=>'Content-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_content_label','default'=>'Content-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Content_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_td_label','default'=>'Td-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_label','default'=>'Td-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_label','default'=>'Td-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_td_name_label','default'=>'Td-Name-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_name_label','default'=>'Td-Name-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td name content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_name_label','default'=>'Td-Name-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Name_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_td_line_label','default'=>'Td-Line-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_line_label','default'=>'Td-Line-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td line content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_line_label','default'=>'Td-Line-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Line_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_td_head_label','default'=>'Td-Head-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_head_label','default'=>'Td-Head-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td head content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_td_head_label','default'=>'Td-Head-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Head_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_footer_label','default'=>'Footer-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_footer_label','default'=>'Footer-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Footer content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_footer_label','default'=>'Footer-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Footer_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_content_amount_label','default'=>'Content-Amount-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_content_amount_label','default'=>'Content-Amount-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content amount content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_content_amount_label','default'=>'Content-Amount-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Content_Amount_Value',
				hidden: true,
				translatable: true
			}, {
				xtype: 'tinymce',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'content_content_info_label','default'=>'Content-Info-Content','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_content_info_label','default'=>'Content-Info-Content','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content info content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'content_content_info_label','default'=>'Content-Info-Content','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Content_Info_Value',
				hidden: true,
				translatable: true
			},{
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_body_label','default'=>'Body-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_body_label','default'=>'Body-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Body style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_body_label','default'=>'Body-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Body_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_logo_label','default'=>'Logo-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_logo_label','default'=>'Logo-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logo style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_logo_label','default'=>'Logo-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Logo_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_header_recipient_label','default'=>'Header-Recipient-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_recipient_label','default'=>'Header-Recipient-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header recipient style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_recipient_label','default'=>'Header-Recipient-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Recipient_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_header_label','default'=>'Header-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_label','default'=>'Header-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_label','default'=>'Header-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_header_sender_label','default'=>'Header-Sender-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_sender_label','default'=>'Header-Sender-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header sender style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_sender_label','default'=>'Header-Sender-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Sender_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_header_box_left_label','default'=>'Header-Box-Left-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_box_left_label','default'=>'Header-Box-Left-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header box left style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_box_left_label','default'=>'Header-Box-Left-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Box_Left_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_header_box_right_label','default'=>'Header-Box-Right-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_box_right_label','default'=>'Header-Box-Right-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header box right style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_box_right_label','default'=>'Header-Box-Right-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Box_Right_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_header_box_bottom_label','default'=>'Header-Box-Bottom-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_box_bottom_label','default'=>'Header-Box-Bottom-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header box bottom style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_header_box_bottom_label','default'=>'Header-Box-Bottom-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Header_Box_Bottom_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_content_label','default'=>'Content-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_content_label','default'=>'Content-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_content_label','default'=>'Content-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Content_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_td_label','default'=>'Td-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_label','default'=>'Td-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_label','default'=>'Td-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_td_name_label','default'=>'Td-Name-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_name_label','default'=>'Td-Name-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td name style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_name_label','default'=>'Td-Name-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Name_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_td_line_label','default'=>'Td-Line-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_line_label','default'=>'Td-Line-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td line style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_line_label','default'=>'Td-Line-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Line_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_td_head_label','default'=>'Td-Head-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_head_label','default'=>'Td-Head-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Td head style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_td_head_label','default'=>'Td-Head-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Td_Head_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_footer_label','default'=>'Footer-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_footer_label','default'=>'Footer-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Footer style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_footer_label','default'=>'Footer-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Footer_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_content_amount_label','default'=>'Content-Amount-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_content_amount_label','default'=>'Content-Amount-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content amount style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_content_amount_label','default'=>'Content-Amount-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Content_Amount_Style',
				hidden: true,
				translatable: true
			}, {
				xtype: 'textarea',
				fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'detail'/'style_content_info_label','default'=>'Content-Info-Style','namespace'=>'backend/config/view/document')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_content_info_label','default'=>'Content-Info-Style','namespace'=>'backend/config/view/document'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content info style<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'detail'/'style_content_info_label','default'=>'Content-Info-Style','namespace'=>'backend/config/view/document'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				labelWidth: 100,
				name: 'Content_Info_Style',
				hidden: true,
				translatable: true
			}]
		}];
    }
});
//
<?php }} ?>