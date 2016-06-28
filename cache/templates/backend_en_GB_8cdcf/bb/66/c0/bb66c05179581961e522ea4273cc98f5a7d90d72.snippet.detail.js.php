<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/template/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:14114737205770f10a72a085-85502022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb66c05179581961e522ea4273cc98f5a7d90d72' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/template/detail.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14114737205770f10a72a085-85502022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a8484b5_19254225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a8484b5_19254225')) {function content_5770f10a8484b5_19254225($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.template.Detail', {
    extend: 'Ext.form.Panel',
    alias: 'widget.config-template-detail',

    region: 'east',
    layout: 'form',
    border: false,
    width: 300,

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'title','default'=>'Details','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'title','default'=>'Details','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'title','default'=>'Details','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    autoScroll: true,
    collapsible: true,
    bodyPadding: 10,

    defaults: {
        xtype: 'displayfield',
        labelWidth: 120
    },

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems()
        });

        me.callParent(arguments);
    },

    getImageField: function() {
        return {
            xtype: 'field', //imagefield
            cls: Ext.baseCSSPrefix + 'preview-image',
            hideEmptyLabel: true,
            name: 'previewThumb',
            basePath: '', //'/templates/',
            setRawValue: function(value) {
                var me = this;
                value = Ext.value(value, '');
                me.rawValue = value;
                if (me.inputEl) {
                    me.inputEl.dom.src = value ? me.basePath + value : null;
                }
                return value;
            },
            fieldSubTpl: [
                '<div class="thumb"><div class="inner-thumb">',
                '<img id="{id}" type="{type}" ',
                '<tpl if="name">name={name}" </tpl>',
                'class="" />',
                '</div></div>',
                {
                    compiled: true,
                    disableFormats: true
                }
            ]
        };
    },

    /**
     * @return array
     */
    getItems: function() {
        var me = this;
        return [me.getImageField(), {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'name',
            htmlEncode: true
        }, {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'author_label','default'=>'Author','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'author_label','default'=>'Author','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Author <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'author_label','default'=>'Author','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'author',
            htmlEncode: true
        }, {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'license_label','default'=>'License','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'license_label','default'=>'License','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'license_label','default'=>'License','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'license',
            htmlEncode: true
        }, {
            xtype: 'checkbox',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'esi_label','default'=>'Esi support','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'esi_label','default'=>'Esi support','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ESI support<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'esi_label','default'=>'Esi support','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'esi',
            disabled: true,
            disabledCls: ''
        }, {
            xtype: 'checkbox',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'style_label','default'=>'Style assistant','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'style_label','default'=>'Style assistant','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Style assistant<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'style_label','default'=>'Style assistant','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'styleSupport',
            disabled: true,
            disabledCls: ''
        }, {
            xtype: 'checkbox',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'detail'/'emotion_label','default'=>'Emotion support','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'emotion_label','default'=>'Emotion support','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Emotion support<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'detail'/'emotion_label','default'=>'Emotion support','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'emotion',
            disabled: true,
            disabledCls: ''
        }];
    }
});
//
<?php }} ?>