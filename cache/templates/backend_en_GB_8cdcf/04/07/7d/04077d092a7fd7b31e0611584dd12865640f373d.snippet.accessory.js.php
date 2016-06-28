<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar/accessory.js" */ ?>
<?php /*%%SmartyHeaderCode:4161880625770f0d912e354-28800064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04077d092a7fd7b31e0611584dd12865640f373d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/sidebar/accessory.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4161880625770f0d912e354-28800064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d929ba41_87563788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d929ba41_87563788')) {function content_5770f0d929ba41_87563788($_smarty_tpl) {?>/**
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
 * Shopware UI - Article detail page - Sidebar
 * The accessory component is an extension of the sidebar.similar component.
 * These both components have the same fields and events. The accessory component
 * has an additional form field "display as bundle".
 * The events of this component handled in the detail controller.
 */
//
//
Ext.define('Shopware.apps.Article.view.detail.sidebar.Accessory', {

    /**
     * Define that the accessory component is an extension of the similar accordion item.
     */
    extend: 'Shopware.apps.Article.view.detail.sidebar.Similar',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-sidebar-accessory',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-sidebar-accessory',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'title','default'=>'Accessory articles','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'title','default'=>'Accessory articles','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Accessory items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'title','default'=>'Accessory articles','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        notice:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'notice','default'=>'At this point you have the option of linking other articles with the current article. The linked articles are automatically displayed on the article detail page.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'notice','default'=>'At this point you have the option of linking other articles with the current article. The linked articles are automatically displayed on the article detail page.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
At this point you have the option of linking other items to the current item. The linked items will automatically be displayed on this item\'s detail page.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'notice','default'=>'At this point you have the option of linking other articles with the current article. The linked articles are automatically displayed on the article detail page.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        articleSearch:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'article_search','default'=>'Article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'article_search','default'=>'Article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'article_search','default'=>'Article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        assignment: {
            field: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'assignment_field','default'=>'Assignment','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'assignment_field','default'=>'Assignment','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Designation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'assignment_field','default'=>'Assignment','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            box: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'assignment_box','default'=>'Assign each other','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'assignment_box','default'=>'Assign each other','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign items mutually<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'assignment_box','default'=>'Assign each other','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        bundle: {
            field: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'bundle_field','default'=>'Display','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'bundle_field','default'=>'Display','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'bundle_field','default'=>'Display','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            box: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'bundle_box','default'=>'Display as bundle','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'bundle_box','default'=>'Display as bundle','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display as bundle<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'bundle_box','default'=>'Display as bundle','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        button:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'button','default'=>'Add article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'button','default'=>'Add article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'button','default'=>'Add article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        gridTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'grid_title','default'=>'Assigned accessory articles','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'grid_title','default'=>'Assigned accessory articles','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assigned accessory items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'grid_title','default'=>'Assigned accessory articles','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        name:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'name','default'=>'Article name','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'name','default'=>'Article name','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'name','default'=>'Article name','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        edit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'edit','default'=>'Edit entry','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'edit','default'=>'Edit entry','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'edit','default'=>'Edit entry','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        delete:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'sidebar'/'accessory'/'delete','default'=>'Remove entry','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'delete','default'=>'Remove entry','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove entry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'sidebar'/'accessory'/'delete','default'=>'Remove entry','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Helper property which contains the name of the add event which fired when the user
     * clicks the button of the form panel
     */
    addEvent: 'addAccessoryArticle',

    /**
     * Helper property which contains the name of the remove event which fired when the user
     * clicks the action column of the grid panel
     */
    removeEvent: 'removeAccessoryArticle',

    listingName: 'accessory-listing',

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
    	this.addEvents(
            /**
             * Event will be fired when the user want to add a similar article
             *
             * @event
             */
            'addAccessoryArticle',

            /**
             * Event will be fired when the user want to remove an assigned similar article
             *
             * @event
             */
            'removeAccessoryArticle'
    	);
    },

    /**
     * Override of the createFormItems function of the sidebar.Similar component.
     * The accessory component has an additional field named "bundle" to display
     * the assigned article as bundle article.
     * @return
     */
    createFormItems: function() {
        var me = this;
        me.articleSearch = me.createArticleSearch();

        return [
            me.articleSearch,
            {
                xtype: 'checkbox',
                name: 'cross',
                fieldLabel: me.snippets.assignment.field,
                boxLabel: me.snippets.assignment.box,
                inputValue: true,
                uncheckedValue: false
            },
            {
                xtype: 'checkbox',
                name: 'bundle',
                hidden: true,
                fieldLabel: me.snippets.bundle.field,
                boxLabel: me.snippets.bundle.box,
                inputValue: true,
                uncheckedValue: false
            },
            me.createAddButton()
        ]
    }
});
//
<?php }} ?>