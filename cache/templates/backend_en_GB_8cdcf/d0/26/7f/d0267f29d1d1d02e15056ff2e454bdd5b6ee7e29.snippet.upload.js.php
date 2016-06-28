<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/image/upload.js" */ ?>
<?php /*%%SmartyHeaderCode:17365014195770f0d95f3dc2-03805604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0267f29d1d1d02e15056ff2e454bdd5b6ee7e29' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/image/upload.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17365014195770f0d95f3dc2-03805604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d96e4f16_44661222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d96e4f16_44661222')) {function content_5770f0d96e4f16_44661222($_smarty_tpl) {?>/**
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
 * The upload component contains a media drop zone, an upload button for images and a media selection.
 * The user can select the article images over the media manager, can use the drag and drop system or can select
 * the images over the upload button. All events of the component handled in the media controller.
 */
//
//
Ext.define('Shopware.apps.Article.view.image.Upload', {
    /**
     * Define that the category drop zone is an extension of the Ext.panel.Panel
     * @string
     */
    extend:'Ext.panel.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-image-upload',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-image-upload',

    /**
     * Layout for the component
     */
    layout: 'anchor',

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
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'upload'/'title','default'=>'Upload images','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'title','default'=>'Upload images','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload images<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'title','default'=>'Upload images','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        infoHeader: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'upload'/'info_header','default'=>'Please assign the requested images to the article <strong>[0]</strong>.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'info_header','default'=>'Please assign the requested images to the article <strong>[0]</strong>.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Here you can assign images to your item <strong>[0]</strong>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'info_header','default'=>'Please assign the requested images to the article <strong>[0]</strong>.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        infoText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'upload'/'info_text','default'=>'You have several opportunities to select new or existing images. You can, as usual, use the normal uploader, you can utilize the dropbox that appears below to upload your images or you can select the images directly from the media manager.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'info_text','default'=>'You have several opportunities to select new or existing images. You can, as usual, use the normal uploader, you can utilize the dropbox that appears below to upload your images or you can select the images directly from the media manager.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You have several options for assigning new or existing images. You may use the standard uploading function,  the dropbox below or you may select images directly from the Media manager.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'info_text','default'=>'You have several opportunities to select new or existing images. You can, as usual, use the normal uploader, you can utilize the dropbox that appears below to upload your images or you can select the images directly from the media manager.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        upload:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'upload'/'upload','default'=>'Upload images','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'upload','default'=>'Upload images','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload images<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'upload','default'=>'Upload images','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        mediaSelection: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'upload'/'select','default'=>'Select images','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'select','default'=>'Select images','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select images<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'upload'/'select','default'=>'Select images','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

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
        me.infoText = me.createInfoText();
        me.uploadFields = me.createUploadFields();
        me.dropZone = me.createDropZone();
        me.items = [
            me.infoText,
            me.uploadFields,
            me.dropZone
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
    		 * Event will be fired when the user want to upload images over the button.
    		 *
    		 * @event
    		 * @param [object]
    		 */
    		'mediaUpload'
    	);
    },

    /**
     * Creates the info text which is displayed on top of the drop zone.
     * @return Ext.container.Container
     */
    createInfoText: function() {
        var me = this, title = me.snippets.infoHeader;

        if (me.article instanceof Ext.data.Model) {
            title = Ext.String.format(title, me.article.get('name'));
        }
        return Ext.create('Ext.container.Container', {
            html: title + '<br><br>' + me.snippets.infoText,
            style: 'color: #999; font-style: italic;'
        });
    },

    /**
     * Creates the container with the both upload fields.
     * @return Ext.container.Container
     */
    createUploadFields: function() {
        var me = this;

        me.fileUploadField = Ext.create('Ext.form.field.File', {
            buttonOnly: false,
            labelWidth: 100,
            anchor: '100%',
            margin: '0 10 0 0',
            name: 'fileId',
            buttonText : me.snippets.upload,
            listeners: {
                scope: this,
                afterrender: function(btn) {
                    btn.fileInputEl.dom.multiple = true;
                },
                change: function(field) {
                    me.fireEvent('mediaUpload', field)
                }
            },
            buttonConfig : {
                iconCls: 'sprite-inbox-upload',
                cls: 'small secondary'
            }
        });

        if(Ext.isIE || Ext.isSafari) {
            var form = Ext.create('Ext.form.Panel', {
                unstyled: true,
                border: 0,
                bodyBorder: 0,
                style: 'background: transparent',
                bodyStyle: 'background: transparent',
                url: '<?php echo '/backend/mediaManager/upload';?>?albumID=-1',
                items: [ me.fileUploadField ]
            });
            me.fileUploadField  = form;
        }

        // Media selection field
        me.mediaSelection = Ext.create('Shopware.MediaManager.MediaSelection', {
            fieldLabel: me.snippets.mediaSelection,
            name: 'media-manager-selection',
            multiSelect: true,
            anchor: '100%',
            buttonText: me.snippets.mediaSelection,
            buttonConfig : {
                width:150
            },
            albumId: -1,
            allowBlank: false,
            validTypes: me.getAllowedExtensions(),
            validTypeErrorFunction: me.getExtensionErrorCallback()
        });

        return Ext.create('Ext.container.Container', {
            layout: 'column',
            margin: '20 0',
            defaults: {
                columnWidth: 0.5
            },
            items: [
                me.fileUploadField,
                me.mediaSelection
            ]
        });
    },

    /**
     * Method to set the allowed file extension for the media manager
     * @return Array of strings
     */
    getAllowedExtensions : function() {
        return [ 'gif', 'png', 'jpeg', 'jpg', 'swf' ]
    },
    /**
     * Returns the method which should be called if some select a file with a wrong extension.
     *
     * @return string
     */
    getExtensionErrorCallback :  function() {
        return 'onExtensionError';
    },

    /**
     * Creates the drop zone container
     * @return Ext.container.Container
     */
    createDropZone: function() {
        var me = this;

        return Ext.create('Shopware.apps.Article.view.image.DropZone', {
            anchor: '100%',
            dropZoneConfig: { hideOnLegacy: true, focusable: false }
        });
    }

});
//




<?php }} ?>