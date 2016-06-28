<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/window.js" */ ?>
<?php /*%%SmartyHeaderCode:9360036215770f0d7597465-97614609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29581a710a06ff8088f7bc0259de56388c1e7d5f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/view/detail/window.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9360036215770f0d7597465-97614609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d7bbd745_57395258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d7bbd745_57395258')) {function content_5770f0d7bbd745_57395258($_smarty_tpl) {?>/**
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
 * Shopware UI - Article detail window.
 * The detail window contains the definition of the base form and the element orientation within the form element.
 * The window passes the article record and the different stores to the form elements.
 *
 * shopware AG (c) 2012. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @date 2012-02-20
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Detail
 */
//
//
Ext.override(Ext.container.DockingContainer, {
    dockedItems: []
});
Ext.define('Shopware.apps.Article.view.detail.Window', {
    /**
     * Define that the order main window is an extension of the enlight application window
     * @string
     */
    extend:'Enlight.app.Window',
    /**
     * Set base css class prefix and module individual css class for css styling
     * @string
     */
    cls:Ext.baseCSSPrefix + 'article-detail-window',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-detail-window',
    /**
     * Set no border for the window
     * @boolean
     */
    border:false,
    /**
     * True to automatically show the component upon creation.
     * @boolean
     */
    autoShow:true,
    /**
     * Set border layout for the window
     * @string
     */
    layout:'fit',
    /**
     * Define window width
     * @integer
     */
    width:'80%',
    /**
     * Define window height
     * @integer
     */
    height:'90%',
    /**
     * True to display the 'maximize' tool button and allow the user to maximize the window, false to hide the button and disallow maximizing the window.
     * @boolean
     */
    maximizable:true,

    /**
     * True to display the 'minimize' tool button and allow the user to minimize the window, false to hide the button and disallow minimizing the window.
     * @boolean
     */
    minimizable:true,

    /**
     * A flag which causes the object to attempt to restore the state of internal properties from a saved state on startup.
     */
    stateful:false,

    /**
     * The unique id for this object to use for state management purposes.
     */
    stateId:'shopware-article-detail-window',

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        titleGeneral: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title_general','default'=>'Product details','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title_general','default'=>'Product details','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title_general','default'=>'Product details','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        titleNew: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','default'=>'Article details: new article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Article details: new article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item details: new item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Article details: new article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        titleEdit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title_edit','default'=>'Article details : [0]','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title_edit','default'=>'Article details : [0]','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item details : [0]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title_edit','default'=>'Article details : [0]','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        formTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base_data','default'=>'Base data','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base_data','default'=>'Base data','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Basic info<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base_data','default'=>'Base data','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category_data','default'=>'Categories','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category_data','default'=>'Categories','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category_data','default'=>'Categories','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        imageTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image_tab','default'=>'Images','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image_tab','default'=>'Images','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Images<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image_tab','default'=>'Images','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        propertyTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'property_tab','default'=>'Properties','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_tab','default'=>'Properties','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Properties<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property_tab','default'=>'Properties','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        variantTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant_tab','default'=>'Variants','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant_tab','default'=>'Variants','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Variants<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant_tab','default'=>'Variants','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        configuratorTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'configurator_tab','default'=>'Configurator','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'configurator_tab','default'=>'Configurator','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configurator<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'configurator_tab','default'=>'Configurator','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        linkTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'link_tab','default'=>'Links','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link_tab','default'=>'Links','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Links<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link_tab','default'=>'Links','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        downloadTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'download_tab','default'=>'Downloads','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'download_tab','default'=>'Downloads','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Downloads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'download_tab','default'=>'Downloads','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        crossSellingTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cross_selling_tab','default'=>'Cross-Selling','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cross_selling_tab','default'=>'Cross-Selling','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cross-selling<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cross_selling_tab','default'=>'Cross-Selling','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        esdTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd_tab','default'=>'ESD','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd_tab','default'=>'ESD','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ESD<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd_tab','default'=>'ESD','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        statisticTab:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'statistic_tab','default'=>'Statistics','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'statistic_tab','default'=>'Statistics','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statistics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'statistic_tab','default'=>'Statistics','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        save:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'save_button','default'=>'Save article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save_button','default'=>'Save article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save_button','default'=>'Save article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        cancel:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_button','default'=>'Cancel','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_button','default'=>'Cancel','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_button','default'=>'Cancel','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryNotice:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'category_notice','default'=>'Please select the category to which the product <strong>[0]</strong> is supposed to be assigned.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'category_notice','default'=>'Please select the category to which the product <strong>[0]</strong> is supposed to be assigned.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign the item <strong>[0]</strong> by selecting a category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'category_notice','default'=>'Please select the category to which the product <strong>[0]</strong> is supposed to be assigned.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryNoticeTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'category_assignment','default'=>'Assign categories','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'category_assignment','default'=>'Assign categories','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'category_assignment','default'=>'Assign categories','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        invalidPlugin: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_invalid_plugin','default'=>'The plugin [0] is not compatible with Shopware 4.1. Please uninstall the plugin or contact the provider regarding for a compatible version.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_invalid_plugin','default'=>'The plugin [0] is not compatible with Shopware 4.1. Please uninstall the plugin or contact the provider regarding for a compatible version.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The plugin [0] is not compatible with Shopware 4.1. Please uninstall the plugin or contact the provider for a compatible version.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_invalid_plugin','default'=>'The plugin [0] is not compatible with Shopware 4.1. Please uninstall the plugin or contact the provider regarding for a compatible version.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        descriptions: {
            title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'description'/'title','default'=>'Description','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'description'/'title','default'=>'Description','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'description'/'title','default'=>'Description','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        meta: {
            title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'title','default'=>'meta information','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'title','default'=>'meta information','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'title','default'=>'meta information','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            metaTitle: {
                label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'meta_title_label','default'=>'Title','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'meta_title_label','default'=>'Title','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'meta_title_label','default'=>'Title','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                support: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'meta_title_support','default'=>'Meta-Title for search engines','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'meta_title_support','default'=>'Meta-Title for search engines','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta-Title for search engines<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'meta_title_support','default'=>'Meta-Title for search engines','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            description: {
                label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'description_label','default'=>'Short description','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'description_label','default'=>'Short description','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Short description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'description_label','default'=>'Short description','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                support: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'description_support','default'=>'Short description for search engines, exports and overviews','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'description_support','default'=>'Short description for search engines, exports and overviews','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Short description for search engines, exports and overviews<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'description_support','default'=>'Short description for search engines, exports and overviews','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            keywords: {
                label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'keywords_label','default'=>'Keywords','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'keywords_label','default'=>'Keywords','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'keywords_label','default'=>'Keywords','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                support: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'meta'/'keywords_support','default'=>'Meta keywords for search engines and intelligent search','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'keywords_support','default'=>'Meta keywords for search engines and intelligent search','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta keywords for search engines and Smart Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'meta'/'keywords_support','default'=>'Meta keywords for search engines and intelligent search','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            }
        },
        additional: {
            title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'additional_fields'/'title','default'=>'Additional fields','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'title','default'=>'Additional fields','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Additional fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'title','default'=>'Additional fields','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            comment:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'additional_fields'/'comment','default'=>'Comment','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'comment','default'=>'Comment','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'comment','default'=>'Comment','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            attribute1:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'additional_fields'/'free_text_1','default'=>'Free text 1','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'free_text_1','default'=>'Free text 1','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'free_text_1','default'=>'Free text 1','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            attribute2:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'additional_fields'/'free_text_2','default'=>'Free text 2','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'free_text_2','default'=>'Free text 2','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Text 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'additional_fields'/'free_text_2','default'=>'Free text 2','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        basePrice: {
            title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'base_price'/'title','default'=>'Base price calculation','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'title','default'=>'Base price calculation','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Base price calculation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'title','default'=>'Base price calculation','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            content:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'base_price'/'content','default'=>'Content','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'content','default'=>'Content','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'content','default'=>'Content','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            unit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'base_price'/'unit','default'=>'Unit','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'unit','default'=>'Unit','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'unit','default'=>'Unit','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            basicUnit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'base_price'/'basic_unit','default'=>'Basic unit','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'basic_unit','default'=>'Basic unit','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Basic unit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'basic_unit','default'=>'Basic unit','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            packingUnit:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail'/'base_price'/'packing_unit','default'=>'Packing unit','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'packing_unit','default'=>'Packing unit','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Packing unit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail'/'base_price'/'packing_unit','default'=>'Packing unit','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            empty:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty','default'=>'Please select...','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        variant: {
            listing: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'listing_tab','default'=>'Listing','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'listing_tab','default'=>'Listing','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available variants<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'listing_tab','default'=>'Listing','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            configurator: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator_tab','default'=>'Configure variants','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator_tab','default'=>'Configure variants','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configuration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator_tab','default'=>'Configure variants','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            settings: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'settings_tab','default'=>'Settings','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'settings_tab','default'=>'Settings','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'settings_tab','default'=>'Settings','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            button: {
                listing: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'save_button_listing','default'=>'Save variants','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'save_button_listing','default'=>'Save variants','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save variants<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'save_button_listing','default'=>'Save variants','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                settings: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'save_button_settings','default'=>'Save settings','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'save_button_settings','default'=>'Save settings','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'save_button_settings','default'=>'Save settings','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                configurator: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'save_button_configurator','default'=>'Generate variants','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'save_button_configurator','default'=>'Generate variants','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generate variants<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'save_button_configurator','default'=>'Generate variants','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            }
        },
        esd: {
            button: {
                save: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'save_button','default'=>'Save ESD','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'save_button','default'=>'Save ESD','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save ESD<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'save_button','default'=>'Save ESD','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                back: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'back_button','default'=>'Back to overview','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'back_button','default'=>'Back to overview','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back to overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'back_button','default'=>'Back to overview','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            }
        },
        variantTabTooltip: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant_tab'/'tooltip','default'=>'Functionality isn\'t available in the split view mode.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant_tab'/'tooltip','default'=>'Functionality isn\'t available in the split view mode.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Functionality is not available in the split view mode.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant_tab'/'tooltip','default'=>'Functionality isn\'t available in the split view mode.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
    },

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
        me.bbar = me.createToolbar();
        me.registerEvents();
        me.callParent(arguments);
        me.changeTitle();

        // A incompatible plugin was found, throw a alert to inform the user.
        if(me._invalidPlugin) {
            Ext.MessageBox.alert(me.snippets.titleGeneral, Ext.String.format(me.snippets.invalidPlugin, '"' + me['_invalidClassName'] + '"'));
        }

        me.on('storesLoaded', me.onStoresLoaded, me);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the save button.
             *
             * @event
             * @param [object] The detail window
             * @param [Ext.data.Model] The article record.
             */
            'saveArticle',
            /**
             * Event will be fired when the user clicks the cancel button.
             *
             * @event
             * @param [object] The detail window
             */
            'cancel',

            'storesLoaded'
        );
    },

    /**
     * Creates the main tab panel which displays the different tabs for the article sections.
     * To extend the tab panel this function can be override.
     *
     * @return Ext.tab.Panel
     */
    createMainTabPanel: function() {
        var me = this, tooltip = '';


        if (me.subApp.splitViewActive) {
            tooltip = me.snippets.variantTabTooltip;
        }

        me.categoryTab = Ext.create('Ext.container.Container', {
            title: me.snippets.categoryTab,
            disabled: true,
            layout: 'border',
            name: 'category'
        });

        me.imageTab = Ext.create('Ext.container.Container', {
            layout: {
                type: 'hbox',
                align: 'stretch'
            },
            title: me.snippets.imageTab,
            name: 'image',
            disabled: true,
            cls: Ext.baseCSSPrefix + 'image-tab-container'
        });

        me.variantTab = Ext.create('Ext.container.Container', {
            title: me.snippets.variantTab,
            disabled: true,
            layout: 'fit',
            name: 'variant-tab',
            tabConfig: (me.subApp.splitViewActive) ? {
                tooltip: tooltip,
                tooltipType: Ext.isGecko ? 'title' : 'qtip'
            } : { }
        });

        me.esdTab = Ext.create('Ext.container.Container', {
            title: me.snippets.esdTab,
            disabled: true,
            name: 'esd-tab',
            layout: 'card',
            deferredRender: true
        });

        me.statisticTab = Ext.create('Ext.container.Container', {
            title: me.snippets.statisticTab,
            disabled: true,
            name: 'statistic-tab',
            layout: {
                align: 'stretch',
                padding: 10,
                type: 'vbox'
            }
        });

        return me.mainTab = Ext.create('Ext.tab.Panel', {
            name: 'main-tab-panel',
            items: [
                me.createBaseTab(),
                me.categoryTab,
                me.imageTab,
                me.variantTab,
                me.esdTab,
                me.statisticTab
            ]
        });
    },


    /**
     * Changes the title of the article detail window header and the footer button.
     */
    changeTitle: function() {
        var me = this, title, footerButton;

        title = me.snippets.titleNew;
        if (me.article && me.article.get('id')>0) {
            title = Ext.String.format(me.snippets.titleEdit, me.article.get('name'));
        }
        me.setTitle(title);

        // Change the title of the footer button
        if(me._toolbarBtn) {
            footerButton = me._toolbarBtn;
            footerButton.setText(title);
        }
    },

    /**
     * Creates the tab panel for the base data. Contains a form panel which allows the user
     * to edit the selected record
     * @return Ext.container.Container
     */
    createBaseTab: function() {
        var me = this;

        me.detailForm = Ext.create('Ext.form.Panel', {
            region:'center',
            name: 'detail-form',
            bodyPadding: 10,
            autoScroll: true,
            defaults: {
                labelWidth: 155
            },
            plugins: [{
                ptype: 'translation',
                pluginId: 'translation',
                translationType: 'article',
                translationMerge: false,
                translationKey: null
            }],
            items: [
                me.createBaseFieldSet(),
                me.createPriceFieldSet(),
                me.createDescriptionFieldSet(),
                me.createMetaFieldSet(),
                me.createBasePriceFieldSet(),
                me.createSettingsFieldSet(),
                me.createPropertiesFieldSet()
            ]
        });

        return me.detailContainer = Ext.create('Ext.container.Container', {
            layout: 'border',
            name: 'main',
            title: me.snippets.formTab,
            items: [
                me.detailForm,
                {
                    xtype: 'article-sidebar',
                    region: 'east',
                    article: me.article,
                    shopStore: me.shopStore
                }
            ]
        });
    },

    /**
     * Creates the field set for the article property configuration.
     */
    createPropertiesFieldSet: function() {
        return Ext.create('Shopware.apps.Article.view.detail.Properties');
    },

    /**
     * Creates the field set for the article setting configuration.
     */
    createSettingsFieldSet: function() {
        return Ext.create('Shopware.apps.Article.view.detail.Settings');
    },

    /**
     * Creates the base field set for the detail form.
     * @return Shopware.apps.Article.view.detail.Base
     */
    createBaseFieldSet: function() {
        return Ext.create('Shopware.apps.Article.view.detail.Base');
    },

    /**
     * Creates the field set for the article price configuration.
     */
    createPriceFieldSet: function() {
        var me = this;

        return Ext.create('Shopware.apps.Article.view.detail.Prices');
    },


    /**
     * Creates the field set for the article base price calculation.
     * @return Ext.form.FieldSet
     */
    createBasePriceFieldSet: function() {
        var me = this;

        me.unitComboBox = Ext.create('Ext.form.field.ComboBox', {
            name: 'mainDetail[unitId]',
            queryMode: 'local',
            fieldLabel: me.snippets.basePrice.unit,
            emptyText: me.snippets.basePrice.empty,
            displayField: 'name',
            editable:false,
            valueField: 'id',
            labelWidth: 155,
            anchor: '100%',
            xtype: 'textfield'
        });

        return Ext.create('Ext.form.FieldSet', {
            layout: 'anchor',
            cls: Ext.baseCSSPrefix + 'article-base-price-field-set',
            defaults: {
                labelWidth: 155,
                anchor: '100%',
                xtype: 'textfield'
            },
            title: me.snippets.basePrice.title,
            items: [
                me.unitComboBox, {
                    xtype: 'numberfield',
                    submitLocaleSeparator: false,
                    decimalPrecision: 4,
                    name: 'mainDetail[purchaseUnit]',
                    fieldLabel: me.snippets.basePrice.content
                }, {
                    xtype: 'numberfield',
                    submitLocaleSeparator: false,
                    name: 'mainDetail[referenceUnit]',
                    decimalPrecision: 3,
                    fieldLabel: me.snippets.basePrice.basicUnit
                }, {
                    name: 'mainDetail[packUnit]',
                    translationName: 'packUnit',
                    translatable: true,
                    fieldLabel: me.snippets.basePrice.packingUnit
                }
            ]
        });
    },

    /**
     * Creates the description field set for the main form panel.
     * Contains the keywords, short and long description.
     * @return Ext.form.FieldSet
     */
    createDescriptionFieldSet: function() {
        var me = this;

        return Ext.create('Ext.form.FieldSet', {
            layout: 'anchor',
            cls: Ext.baseCSSPrefix + 'article-description-field-set',
            defaults: {
                labelWidth: 155,
                anchor: '100%',
                translatable: true,
                xtype: 'textarea'
            },
            title: me.snippets.descriptions.title,
            items: [
                {
                    xtype: 'tinymce',
                    name: 'descriptionLong',
                    margin: '0 0 15',
                    cls: Ext.baseCSSPrefix + 'article-description-long',
                    height: 100
                }
            ]
        });
    },

    /**
     * Creates the meta field set for the main form panel.
     * Contains the keywords, and the short meta description
     * @return Ext.form.FieldSet
     */
    createMetaFieldSet: function () {
        var me = this;

        return Ext.create('Ext.form.FieldSet', {
            layout: 'anchor',
            cls: Ext.baseCSSPrefix + 'article-meta-field-set',
            defaults: {
                labelWidth: 155,
                anchor: '100%',
                translatable: true,
                xtype: 'textarea'
            },
            title: me.snippets.meta.title,
            items: [
                {
                    xtype: 'textfield',
                    name: 'metaTitle',
                    fieldLabel: me.snippets.meta.metaTitle.label,
                    supportText: me.snippets.meta.metaTitle.support
                },
                {
                    name: 'description',
                    height: 100,
                    fieldLabel: me.snippets.meta.description.label,
                    supportText: me.snippets.meta.description.support
                },
                {
                    name: 'keywords',
                    height: 100,
                    fieldLabel: me.snippets.meta.keywords.label,
                    supportText: me.snippets.meta.keywords.support
                }
            ]
        });
    },

    /**
     * Creates the tab panel tab for the category selection.
     * @return Array
     */
    createCategoryTab: function() {
        var me = this, rightContainer;

        me.categoryTree = Ext.create('Shopware.apps.Article.view.category.Tree', {
            store: me.categoryTreeStore,
            region: 'west'
        });

        me.seoCategoryList = Ext.create('Shopware.apps.Article.view.category.Seo', {
            flex: 1,
            store: me.article.getSeoCategories(),
            margin: 10,
            autoScroll: true
        });

        me.seoCategoryList.setCategoryStore(me.article.getCategory());

        me.categoryDropZone = Ext.create('Shopware.apps.Article.view.category.DropZone', {
            height: 120,
            autoScroll:true,
            margin: 10
        });

        me.categoryList = Ext.create('Shopware.apps.Article.view.category.List', {
            article: me.article,
            flex: 1,
            autoScroll:true,
            margin: 10
        });

        rightContainer = Ext.create('Ext.container.Container', {
            region: 'center',
            bodyPadding: 10,
            name: 'category-tab',
            plain: true,
            autoScroll:true,
            layout: {
                align: 'stretch',
                type: 'vbox'
            },
            items: [
                me.categoryDropZone, me.categoryList, me.seoCategoryList
            ]
        });

        return [ me.categoryTree, rightContainer ];
    },

    /**
     * Creates the image tab panel.
     * @return Array
     */
    createImageTab: function() {
        var me = this, leftContainer;

        me.imageList = Ext.create('Shopware.apps.Article.view.image.List', {
            article: me.article,
            margin: '0 10 10',
            flex: 1
        });
        me.imageUpload = Ext.create('Shopware.apps.Article.view.image.Upload', {
            article: me.article,
            margin: 10,
            flex: 1,
            autoScroll:true
        });
        me.imageInfo = Ext.create('Shopware.apps.Article.view.image.Info', {
            margin: 10,
            width: 390,
            configuratorGroupStore: me.configuratorGroupStore
        });

        leftContainer = Ext.create('Ext.container.Container', {
            flex: 1,
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            items: [
                me.imageUpload,
                me.imageList
            ]
        });

        return [ leftContainer, me.imageInfo ];
    },

    /**
     * Creates the window toolbar which docked bottom and contains the cancel and save button.
     * @return Ext.toolbar.Toolbar
     */
    createToolbar: function() {
        var me = this;

        //create the save button which fire the save event, the save event is handled in the detail controller.
        me.saveButton = Ext.create('Ext.button.Button', {
            cls:'primary',
            name: 'save-article-button',
            text: me.snippets.save,
            handler: function() {
                me.fireEvent('saveArticle', me, me.article);
            }
        });

        //creates the cancel button which fire the cancel event, the cancel event is handled in the detail controller.
        me.cancelButton = Ext.create('Ext.button.Button', {
            text: me.snippets.cancel,
            name: 'cancel-button',
            cls: 'secondary',
            handler: function() {
                me.fireEvent('cancel', me, me.article);
            }
        });

        //creates the global save button for the configurator
        me.configuratorSaveButton = Ext.create('Ext.button.Button', {
            text: me.snippets.variant.button.configurator,
            cls: 'primary',
            hidden: true,
            name: 'configurator-save-button',
            handler: function() {
                me.variantListing.fireEvent('createVariants', me.article);
            }
        });

        //creates the global save button for the esd
        me.esdSaveButton = Ext.create('Ext.button.Button', {
            text: me.snippets.esd.button.save,
            cls: 'primary',
            hidden: true,
            name: 'esd-save-button',
            handler: function() {
                me.esdListing.fireEvent('saveEsd');
            }
        });

        //creates the global save button for the esd
        me.esdBackButton = Ext.create('Ext.button.Button', {
            text: me.snippets.esd.button.back,
            cls: 'secondary',
            hidden: true,
            name: 'esd-back-button',
            handler: function() {
                me.esdListing.fireEvent('backToList');
            }
        });

        //creates the toolbar with a spaces, the cancel and save button.
        return Ext.create('Ext.toolbar.Toolbar', {
            items: [
                { xtype: 'tbfill' },
                me.cancelButton,
				/*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'save'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
                me.saveButton,
				/*<?php }?>*/
                me.configuratorSaveButton,
                me.esdBackButton,
                me.esdSaveButton
            ]
        });

    },

    /**
     * Creates the variant tab panel which contains the configuration elements for the article variants and configurator.
     * @return Ext.container.Container
     */
    createVariantTab: function() {
        var me = this, listing, configurator;
        listing = me.createVariantListingTab();
        configurator = me.createVariantConfiguratorTab();

        me.configuratorTab = Ext.create('Ext.tab.Panel', {
            name: 'configurator-tab',
            items: [
                listing,
                configurator
            ],
            margin: 10
        });

        return me.configuratorTab;
    },


    /**
     * Creates the listing component for the variant tab.
     * @return Ext.container.Container
     */
    createVariantListingTab: function() {
        var me = this;

        me.variantStore = Ext.create('Shopware.apps.Article.store.Variant');

        if (me.article) {
            me.variantStore.getProxy().extraParams.articleId = me.article.get('id');
        }

        me.variantListing = Ext.create('Shopware.apps.Article.view.variant.List', {
            border: false,
            store: me.variantStore
        });

        return Ext.create('Ext.container.Container', {
            items: [ me.variantListing ],
            layout: 'fit',
            name: 'listing',
            title: me.snippets.variant.listing
        });
    },

    /**
     * Creates the variant configurator for the variant tab panel.
     * @return Ext.container.Container.
     */
    createVariantConfiguratorTab: function() {
        var me = this;

        return Ext.create('Shopware.apps.Article.view.variant.Configurator', {
            title: me.snippets.variant.configurator,
            article: me.article,
            dependencyStore: me.dependencyStore,
            priceSurchargeStore: me.priceSurchargeStore,
            name: 'configurator',
            configuratorGroupStore: me.configuratorGroupStore,
            articleConfiguratorSet: me.articleConfiguratorSet
        });
    },

    /**
     * Creates the esd tab which contains the configuration for the esd options.
     * @return Ext.container.Container
     */
    createEsdTab: function() {
        var me = this;

        var esdStore      = Ext.create('Shopware.apps.Article.store.Esd');
        var filteredStore = Ext.create('Shopware.apps.Article.store.Esd');
        esdStore.addListener('beforeload', function(store, records) {
            filteredStore.load({
                params: {
                    filterCandidates: true
                }
            });
        });
        esdStore.getProxy().extraParams.articleId = me.article.get('id');
        filteredStore.getProxy().extraParams.articleId = me.article.get('id');

        me.esdListing = Ext.create('Shopware.apps.Article.view.esd.List', {
            esdStore: esdStore,
            filteredStore: filteredStore,
            article: me.article
        });

        return me.esdListing;
    },

    /**
     * Creates the statistic tab which contains a graph for the article sales.
     * @return Array
     */
    createStatisticTab: function() {
        var me = this;

        var statisticStore = Ext.create('Shopware.apps.Article.store.Statistic');
        var chartStore = Ext.create('Shopware.apps.Article.store.Statistic');

        statisticStore.getProxy().extraParams.articleId = me.article.get('id');
        chartStore.getProxy().extraParams.articleId = me.article.get('id');
        chartStore.getProxy().extraParams.chart = true;

        var list = Ext.create('Shopware.apps.Article.view.statistics.List', {
            flex: 1,
            article: me.article,
            store: statisticStore
        });

        var chart = Ext.create('Shopware.apps.Article.view.statistics.Chart', {
            height: 250,
            flex: 1,
            article: me.article,
            store: chartStore
        });

        return [ chart, list ];
    },

    onStoresLoaded: function(article, stores) {
        var me = this;
        me.article = article;
        me.detailForm.add(me.attributeFieldSet);

        me.unitComboBox.bindStore(stores['unit']);
        me.supplierStore = stores['suppliers'];
        window.setTimeout(function() {
            me.detailForm.loadRecord(me.article);
        }, 10);

        me.categoryTab.add(me.createCategoryTab());
        me.categoryTab.setDisabled(false);

        me.imageTab.add(me.createImageTab());
        me.imageTab.setDisabled(false);

        me.variantTab.add(me.createVariantTab());

        me.esdTab.add(me.createEsdTab());
        me.esdTab.setDisabled((me.article.get('id') === null));

        me.statisticTab.add(me.createStatisticTab());
        me.statisticTab.setDisabled(me.article.get('id') === null);

        me.variantListing.customerGroupStore = stores['customerGroups'];

        if(me.subApp.splitViewActive) {
            me.variantTab.setDisabled(true);
        }
    },

    /**
     * Helper method which is especially for third-party developers which want to to add an additional tab
     * to the main tab panel which is used in the article module. he method provides an easy-to-use way to add a new tab
     * and handles the event binding for further versions of Shopware.
     *
     * @example The following examples shows how to add a tab with a static content:
     * <code>
     * this.registerAdditionalTab({
     *    title: 'Test-Tab',
     *    tabConfig: { disabled: false },
     *    contentFn: function(article, stores, eOpts) {
     *       eOpts.tab.add({ xtype: 'panel', html: 'Tab-Content' });
     *    }
     * });
     * </code>
     *
     * @throws Ext.Error - If no configuration object is passed the method raises an global Ext.Error
     *         which kills the further processing of the method.
     *
     * @param  { Object } opts - Configuration object of the new tab
     *         opts.title - { String } Title of the tab
     *
     *         opts.articleChangeFn - { Function } (optional) The callback method which will be triggered when
     *         the article has been changed. The following parameters are passed to the callback function:
     *             store - { Object } Instance of the `Shopware.apps.Article.store.Batch` which includes the
     *             article data and all available associations which are used by the sub-components of this
     *             component.
     *             eOpts - { Object } Additional event parameters which are set by ExtJS. Please see the documentation
     *             of Ext.util.Observable#addListener` method to see all available parameters.
     *
     *         opts.contentFn - { Function } The callback method which will be used to set the content of the tab.
     *         The following parameters are passed to the callback function:
     *             article - { Object } The article model, e.g. `Shopware.apps.Article.model.Article`
     *             stores - { Object } All available stores of the article main window, which are used by it's sub-
     *             compontents.
     *             eOpts - { Object } Additional event parameters. The following custom paremeters are passed to the
     *             function:
     *                 tab - { Object } The newly created type
     *                 config - { Object } The configuration object which was used to create the tab
     *
     *         opts.insertIndex - { Number } (optional) Numeric position (starting by 0) where the tab will be injected.
     *         If the value is smaller than 0 or isn't passed, the tab will be inserted after the last available tab.
     *
     *         opts.tabConfig - { Object } (optional) Tab configuration of will be passsed in to create the tab
     *         container. To modify the type of the created container, please use the second parameter `containerType`.
     *
     *         opts.scope - { Object } (optional) The scope which will be used in the callback methods `opts.contentFn`
     *         and `opts.articleChangeFn`. If the parameter wasn't passed in, the scope will be set to this component,
     *         e.g. `Shopware.apps.Article.view.detail.Window`.
     *
     * @param  { String } containerType (optional) - ExtJS component name which will be used as the
     *         container for the tab content. The method supports full class names as well as
     *         `xtypes`. If a class name is been used, class name needs to be in the namespace `Ext` or `Shopware`.
     *         Default type is `Ext.container.Container`.
     *
     * @return { Boolean } - Truthy if the tab was sucessfully created, otherwise falsy.
     */
    registerAdditionalTab: function(opts, containerType) {
        var me = this, tabPanel = me.mainTab, tabContainer, cfg = {}, articleChangeFn,
            defaultOpts = {
                'title': 'Tab',
                'articleChangeFn': Ext.emptyFn,
                'contentFn': Ext.emptyFn,
                'insertIndex': -1,
                'tabConfig': {
                    'disabled': true,
                    'layout': 'fit'
                },
                'scope': me
            }, availableStores;

        // We're having no options for the new tab, so raise an error...
        if(!opts || opts.length) {
            Ext.Error.raise({
                sourceClass: me.$className,
                sourceMethod: 'registerAdditionalTab',
                msg: 'The method needs at least a configuration object as a first parameter which ' +
                     'includes the name of the tab and the callback method which inserts the content into '+
                     'the newly created tab. Please see the example usage.'
            });
            return false;
        }

        // Check if the user configuration includes an `contentFn` which creates the content of the tab
        if(!opts || !opts.hasOwnProperty('contentFn')) {
            Ext.Error.raise({
                sourceClass: me.$className,
                sourceMethod: 'registerAdditionalTab',
                msg: 'The method needs a callback method named `contentFn`, which will be used to insert the content ' +
                     'inserts the content of the newly created tab.'
            });
            return false;
        }

        // Modify the passed parameter(s)
        if(containerType && !containerType.match(/^(Ext|Shopware)/)) {

            // Support for passing a `xtype` for the containerType
            containerType = Ext.ClassManager.getNameByAlias(containerType);
        }
        containerType = (containerType && containerType.length) ? containerType : 'Ext.container.Container';

        // Merge the passed user configuration with our default configuration
        cfg = Ext.merge(cfg, defaultOpts, opts);
        articleChangeFn = cfg['articleChangeFn'];

        // Create the tab container
        tabContainer = Ext.create(containerType, Ext.apply(cfg.tabConfig, {
            title: cfg.title
        }));

        // Add the tab container to the main tab panel
        if(cfg.insertIndex >= 0) {
            tabPanel.insert(cfg.insertIndex, tabContainer);
        } else {
            tabPanel.add(tabContainer);
        }

        // Collects the available stores to provide a constant API which is compatible with further versions.
        // It doesn't look great but that is necessary to provide the goal...
        availableStores = {
            customerGroupStore: me.customerGroupStore,
            shopStore: me.shopStore,
            taxStore: me.taxStore,
            attributeFields: me.attributeFields,
            supplierStore: me.supplierStore,
            templateStore: me.templateStore,
            dependencyStore: me.dependencyStore,
            priceSurchargeStore: me.priceSurchargeStore,
            unitStore: me.unitStore,
            propertyStore: me.propertyStore,
            priceGroupStore: me.priceGroupStore,
            articleConfiguratorSet: me.articleConfiguratorSet,
            categoryTreeStore: me.categoryTreeStore,
            configuratorGroupStore: me.configuratorGroupStore
        };

        // Trigger the `contentFn` which sets the content of the tab container
        me.on('storesLoaded', function() {
            cfg['contentFn'].apply(cfg.scope, [ me.article, availableStores, { tab: tabContainer, config: cfg } ]);
        });

        // Bind event listener which triggers when the article store was changed
        me.subApplication.on('ProductModule:storesChanged', articleChangeFn, cfg.scope, {
            tab: tabContainer,
            config: cfg
        });

        return true;
    }
});
//
<?php }} ?>