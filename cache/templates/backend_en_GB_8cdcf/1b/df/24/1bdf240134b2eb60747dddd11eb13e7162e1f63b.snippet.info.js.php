<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/image/info.js" */ ?>
<?php /*%%SmartyHeaderCode:7209788075770f0d9811018-78492353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bdf240134b2eb60747dddd11eb13e7162e1f63b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/image/info.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7209788075770f0d9811018-78492353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9985da7_66573546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9985da7_66573546')) {function content_5770f0d9985da7_66573546($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Detail
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article detail page - Image
 * The image info component displayed on the right side in the image tab.
 * It contains a image preview to display the original image of the selected list item.
 * Additional it contains a tree panel for the assigned article components like variants or similar.
 * All events of the component handled in the media controller.
 */
//
//
Ext.define('Shopware.apps.Article.view.image.Info', {
    /**
     * Define that the category drop zone is an extension of the Ext.panel.Panel
     * @string
     */
    extend:'Ext.form.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-image-info',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-image-info',

    /**
     * Layout for the component
     */
    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    autoScroll:true,
    /**
     * Defaults for the panel items
     * @object
     */
    defaults: {
        anchor: '100%'
    },

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'title','default'=>'Image options','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'title','default'=>'Image options','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Image options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'title','default'=>'Image options','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        download: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'download','default'=>'Download','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'download','default'=>'Download','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'download','default'=>'Download','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        imageTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'image_title','default'=>'Title','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'image_title','default'=>'Title','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'image_title','default'=>'Title','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        settings: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'settings','default'=>'Settings','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'settings','default'=>'Settings','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'settings','default'=>'Settings','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        treeTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'tree','default'=>'Assignments','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'tree','default'=>'Assignments','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allocations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'tree','default'=>'Assignments','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        translateTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'translate_title','default'=>'Translate title','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'translate_title','default'=>'Translate title','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Translate title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'translate_title','default'=>'Translate title','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        attribute1: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'attribute1','default'=>'attribute1','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'attribute1','default'=>'attribute1','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
attribute1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'attribute1','default'=>'attribute1','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        attribute2: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'attribute2','default'=>'attribute2','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'attribute2','default'=>'attribute2','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
attribute2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'attribute2','default'=>'attribute2','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        attribute3: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'attribute3','default'=>'attribute3','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'attribute3','default'=>'attribute3','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
attribute3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'attribute3','default'=>'attribute3','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Sets the body padding value
     * @integer
     */
    bodyPadding: 10,

    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
	 */
    initComponent:function () {
        var me = this;
        me.title = me.snippets.title;
        me.thumbnail = me.createThumbnail();
        me.settings = me.createSettings();
        me.items = [
            me.thumbnail,
            me.settings
        ];
        me.registerEvents();
        me.callParent(arguments);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
    	this.addEvents(
    		/**
    		 * Event will be fired when the user want to download the original image
    		 *
    		 * @event
    		 * @param [Ext.data.Model] The media record
    		 */
    		'download',

            /**
             * Event will be fired when the user wants to translate the settings.
             *
             * @event
             * @param [object] form - Ext.form.Panel - The settings Panel
             * @param [object] record - Shopware.apps.Article.model.Media
             */
            'translateSettings',

            /**
             * Event will be fired when the user wants to save the image settings.
             * @event
             * @param [object] form - Ext.form.Panel - The settings Panel
             * @param [object] record - Shopware.apps.Article.model.Media
             */
            'saveImageSettings'
    	);
    },

    /**
     * Creates the thumbnail container for the info panel.
     * @return Ext.view.View
     */
    createThumbnail: function() {
        var me = this;

        return Ext.create('Ext.view.View', {
            cls: 'outer-article-info-thumbnail',
            emptyText: 'No additional information found',
            tpl: me.createInfoPanelTemplate(),
            margin: '0 0 10',
            itemSelector: '.copy-image-path',
            autoScroll:true,
            flex: 1,
            renderData: []
        });
    },



    /**
     * Creates the XTemplate for the information panel
     *
     * Note that the template has different member methods
     * which are only callable in the actual template.
     *
     * @return [object] generated Ext.XTemplate
     */
    createInfoPanelTemplate: function() {
        return new Ext.XTemplate(
            '<tpl for=".">',
                '<div class="article-thumb-wrap">',
                    // If the type is image, then show the image
                    '<div class="thumb">',
                        '<div class="inner-thumb"><img src="',
                            '<tpl if="original">',
                                '<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => '', "fullPath" => false), $_smarty_tpl); ?>','{original}',
                            '</tpl>',
                        '" /></div>',
                    '</div>',
                '</div>',
            '</tpl>',
            '<div class="x-clear"></div>'
        );
    },

    /**
     * Creates the field set for the image settings.
     * Contains the title text field and the download button.
     *
     * @return Ext.form.FieldSet
     */
    createSettings: function() {
        var me = this;

        var changeHandler = function() {
            if (me.record) {
                me.fireEvent('saveImageSettings', me.settingsForm, me.record);
            }
        }

        me.titleField = Ext.create('Ext.form.field.Text', {
            name: 'description',
            anchor: '100%',
            fieldLabel: me.snippets.imageTitle,
            translatable: true,
            listeners: {
                blur: {
                    fn: changeHandler
                }
            }
        });

        me.attr1Field = Ext.create('Ext.form.field.Text', {
            name: 'attribute[attribute1]',
            anchor: '100%',
            fieldLabel: me.snippets.attribute1,
            listeners: {
                blur: {
                    fn: changeHandler
                }
            }
        });

        me.attr2Field = Ext.create('Ext.form.field.Text', {
            name: 'attribute[attribute2]',
            anchor: '100%',
            fieldLabel: me.snippets.attribute2,
            listeners: {
                blur: {
                    fn: changeHandler
                }
            }
        });

        me.attr3Field = Ext.create('Ext.form.field.Text', {
            name: 'attribute[attribute3]',
            anchor: '100%',
            fieldLabel: me.snippets.attribute3,
            listeners: {
                blur: {
                    fn: changeHandler
                }
            }
        });

        me.settingToolbar = Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            margin: '8 0 0',
            items: [
                '->', {
                    xtype: 'button',
                    text: me.snippets.translateTitle,
                    cls: 'small secondary',
                    handler: function() {
                        if (me.record) {
                            me.fireEvent('translateSettings', me.settingsForm, me.record);
                        }
                    }
                }, {
                    xtype: 'button',
                    text: me.snippets.download,
                    anchor: '50%',
                    cls: 'small secondary',
                    handler: function() {
                        me.fireEvent('download', me.record);
                    }
                }
            ]
        });

        me.settingsForm = Ext.create('Ext.form.Panel', {
            title: me.snippets.settings,
            layout: 'anchor',
            flex:1,
            autoScroll:true,
            plugins: [{
                ptype: 'translation',
                pluginId: 'translation',
                translationType: 'articleimage',
                translationMerge: false,
                translationKey: null,
                translationName: 'attributes'
            }],
            defaults: {
                labelWidth: 90,
                anchor: '100%'
            },
            bodyPadding: 10,
            cls: Ext.baseCSSPrefix + 'media-info-form-panel',
            dockedItems: [ me.settingToolbar ],
            items: [
                me.titleField,
                me.attr1Field,
                me.attr2Field,
                me.attr3Field
            ]
        });
        return me.settingsForm;
    }
});
//




<?php }} ?>