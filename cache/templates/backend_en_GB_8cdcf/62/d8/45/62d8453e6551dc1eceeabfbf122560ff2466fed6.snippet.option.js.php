<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar/option.js" */ ?>
<?php /*%%SmartyHeaderCode:14086712955770f0d88cb357-52879519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d8453e6551dc1eceeabfbf122560ff2466fed6' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar/option.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14086712955770f0d88cb357-52879519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d8bb0f41_62484036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d8bb0f41_62484036')) {function content_5770f0d8bb0f41_62484036($_smarty_tpl) {?>/**
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
 * Shopware UI - Article Detail page - Sidebar
 * The option component contains different configuration elements for the article.
 * It contains the button field set to translate, duplicate and delete the article,
 * the preview field set to select a shop of a combo box and preview the article in the frontend detail page.
 * A rapid categorization to grant the user an easy way to assign the article to different categories.
 * And a file upload field set to upload article images.
 */
//
//
Ext.define('Shopware.apps.Article.view.detail.sidebar.Option', {
    /**
     * Define that the billing field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-sidebar-option',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'title','default'=>'Options','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'title','default'=>'Options','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'title','default'=>'Options','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        articleOptions:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'article_options','default'=>'Article options','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'article_options','default'=>'Article options','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'article_options','default'=>'Article options','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        duplicate:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'duplicate','default'=>'Duplicate','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'duplicate','default'=>'Duplicate','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Duplicate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'duplicate','default'=>'Duplicate','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        delete:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'delete','default'=>'Delete','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'delete','default'=>'Delete','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'delete','default'=>'Delete','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        translate:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'translate','default'=>'Translate','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'translate','default'=>'Translate','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Translate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'translate','default'=>'Translate','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        shop:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'shop','default'=>'Select shop','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'shop','default'=>'Select shop','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'shop','default'=>'Select shop','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        articlePreview:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'article_preview','default'=>'Article preview','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'article_preview','default'=>'Article preview','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'article_preview','default'=>'Article preview','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryCombo:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'select_category','default'=>'Select category','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'select_category','default'=>'Select category','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'select_category','default'=>'Select category','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        selectedCategories:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'selected_categories','default'=>'Assigned categories','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'selected_categories','default'=>'Assigned categories','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assigned categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'selected_categories','default'=>'Assigned categories','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryColumns: {
            name:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'columns'/'name','default'=>'Name','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'columns'/'name','default'=>'Name','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'columns'/'name','default'=>'Name','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            actionTooltip:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'tooltip','default'=>'Delete entry','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'tooltip','default'=>'Delete entry','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'tooltip','default'=>'Delete entry','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        rapidCategorization: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'rapid_categorization','default'=>'Rapid categorization','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'rapid_categorization','default'=>'Rapid categorization','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Quick categorization<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'rapid_categorization','default'=>'Rapid categorization','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        upload: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'upload_button','default'=>'Select image','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'upload_button','default'=>'Select image','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'upload_button','default'=>'Select image','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        dropZone: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'drop_zone','default'=>'Upload files via drag&drop','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'drop_zone','default'=>'Upload files via drag&drop','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload files via drag & drop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'drop_zone','default'=>'Upload files via drag&drop','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        imageUpload: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'options'/'image_field_set','default'=>'Upload images directly','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'image_field_set','default'=>'Upload images directly','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload images directly<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'options'/'image_field_set','default'=>'Upload images directly','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        empty:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Contains the field set defaults.
     */
    defaults: {
        labelWidth: 155,
        padding: 10
    },

    bodyPadding: 10,
    autoScroll: true,

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
        me.items = me.createElements();
        me.registerEvents();
        me.addCls(Ext.baseCSSPrefix + 'article-sidebar-option');
        me.callParent(arguments);
    },

    /**
     * Creates the elements for the options panel.
     * @return array
     */
    createElements: function() {
        var me = this;

        me.buttonContainer = me.createButtonContainer();
        me.articlePreview = me.createArticlePreview();
        me.rapidCategorization = me.createRapidCategorization();
        me.imageContainer = me.createImageContainer();

        return [ me.buttonContainer, me.articlePreview, me.rapidCategorization, me.imageContainer ];
    },

    /**
     * Registers additional custom component events.
     * @return void
     */
    registerEvents: function() {
        this.addEvents(
            /**
             *
             * @event
             * @param [Ext.data.Model] - The article record
             */
            'duplicateArticle',

            /**
             *
             * @event
             * @param [Ext.data.Model] - The article record
             */
            'deleteArticle',

            /**
             *
             * @event
             * @param [Ext.data.Model] - The article record
             */
            'translateArticle',

            /**
             * Event will be fired when the user clicks the preview button which displayed
             * in the option panel of the sidebar.
             *
             * @event
             * @param [Ext.data.Model] - The article record
             * @param [Ext.data.Model] - The selected shop record
             */
            'articlePreview',

            /**
             * Event will be fired when the user select an item of the category combo box.
             *
             * @event
             * @param [array] - Array of the selected items
             * @param [Ext.grid.Panel] - The category list
             */
            'addCategory',

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
     * Creates the container for the copy, delete and translation button
     * @return Ext.form.FieldSet
     */
    createButtonContainer: function() {
        var me = this;

        me.duplicateButton = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-blue-folder--plus',
            text: me.snippets.duplicate,
            cls: 'small secondary',
            margin: '0 10 0 0',
            handler: function() {
                me.fireEvent('duplicateArticle', me.article);
            }
        });

        me.deleteButton = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-minus-circle-frame',
            text: me.snippets.delete,
            cls: 'small secondary',
            margin: '0 10 0 0',
            handler: function() {
                me.fireEvent('deleteArticle', me.article);
            }
        });

        me.translateButton = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-globe-green',
            text: me.snippets.translate,
            cls: 'small secondary',
            handler: function() {
                me.fireEvent('translateArticle', me.article);
            }
        });

        return Ext.create('Ext.form.FieldSet', {
            title: me.snippets.articleOptions,
            layout: 'hbox',
            defaults: {
                flex: 1
            },
            items: [
				/*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'save'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
                me.duplicateButton,
				/*<?php }?>*/
				/*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                me.deleteButton,
				/*<?php }?>*/
                me.translateButton
            ]
        });

    },

    /**
     * Creates the container for the article preview. Contains a combo box for the shop selection and
     * a button which displays the article in the selected shop.
     * @return Ext.form.FieldSet
     */
    createArticlePreview: function() {
        var me = this;

        me.shopCombo = Ext.create('Ext.form.field.ComboBox', {
            fieldLabel: me.snippets.shop,
            store: me.shopStore,
            labelWidth: 75,
            queryMode: 'local',
            valueField: 'id',
            displayField: 'name',
            editable: false,
            emptyText: me.snippets.empty
        });

        me.previewButton = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-globe--arrow',
            cls: 'small secondary',
            margin: '2 0 0',
            handler: function() {
                me.fireEvent('articlePreview', me.article, me.shopCombo);
            }
        });

        return Ext.create('Ext.form.FieldSet', {
            title: me.snippets.articlePreview,
            layout: 'column',
            items: [
                {
                    xtype:'container',
                    columnWidth: 0.85,
                    items: [ me.shopCombo ]
                },
                {
                    xtype:'container',
                    columnWidth: 0.15,
                    margin: '0 0 0 5',
                    items: [ me.previewButton ]
                }
            ]
        });
    },

    /**
     * Creates the field set for the rapid categorization. Contains a grid with displays already
     * selected categories and a search field to add more categories.
     * @return Ext.form.FieldSet
     */
    createRapidCategorization: function() {
        var me = this;

        me.categorySearch = Ext.create('Ext.form.field.ComboBox', {
            anchor: '100%',
            name: 'categoryId',
            margin: '0 0 15',
            fieldLabel: me.snippets.categoryCombo,
            store: Ext.create('Shopware.apps.Article.store.CategoryPath'),
            valueField: 'id',
            displayField: 'name',
            listeners: {
                select: function(combo, records) {
                    me.fireEvent('addCategory', records, me.categoryList);
                    combo.setValue('');
                }
            }
        });

        me.categoryList = Ext.create('Shopware.apps.Article.view.category.List', {
            title: me.snippets.selectedCategories,
            anchor: '100%',
            article: me.article,
            height: 115,
            minHeight: 115,
            maxHeight: 115,
            //This grid needs no selection model, paging and toolbar, so we override this function
            getGridSelModel: function() {},
            createPagingBar: function() {},
            createToolbar: function() {}
        });

        return Ext.create('Ext.form.FieldSet', {
            layout: 'anchor',
            title: me.snippets.rapidCategorization,
            items: [
                me.categorySearch,
                me.categoryList
            ]
        });
    },

    /**
     * Creates the field set for the article image upload. To upload the article images, the container contains
     * a drag and drop zone and a file upload field.
     * @return Ext.form.FieldSet
     */
    createImageContainer: function() {
        var me = this, fieldset;
        
        fieldset = Ext.create('Ext.form.FieldSet', {
            layout: 'anchor',
            title: me.snippets.imageUpload
        });

        me.uploadField  = Ext.create('Ext.form.field.File', {
            buttonOnly: false,
            labelWidth: 100,
            anchor: '100%',
            name: 'fileId',
            margin: '0 0 15',
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
		    	items: [ me.uploadField ]
	    	});
	    	me.uploadField = form;
        }
        
	    fieldset.add(me.uploadField);
        
        var config = { dropZoneConfig: { height: 85, hideOnLegacy: true, showInput: false } };
        me.dropZone = Ext.create('Shopware.apps.Article.view.image.DropZone', config);
        me.dropZone.mediaDropZone.height = 60;
   
        fieldset.add(me.dropZone);
        return fieldset;
    }

});
//
<?php }} ?>