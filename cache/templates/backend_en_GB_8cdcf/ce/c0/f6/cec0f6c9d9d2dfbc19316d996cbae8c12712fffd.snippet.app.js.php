<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:37
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/app.js" */ ?>
<?php /*%%SmartyHeaderCode:19563615825770f0d55b0781-38801984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec0f6c9d9d2dfbc19316d996cbae8c12712fffd' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/app.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19563615825770f0d55b0781-38801984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d56901c3_62526550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d56901c3_62526550')) {function content_5770f0d56901c3_62526550($_smarty_tpl) {?>/**
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
 * Shopware Application - Article module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article', {

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Article',

    /**
     * Extends from our special controller, which handles the sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',

    /**
     * Enable bulk loading
     * @boolean
     */
    bulkLoad:true,

    /**
     * Sets the loading path for the sub-application.
     *
     * @string
     */
    loadPath:'<?php echo '/backend/Article/load';?>',

    /**
     * Array of views to require from AppName.view namespace.
     * @array
     */
    views:[
        'detail.Window',
        'detail.Settings',
        'detail.Properties',
        'detail.Prices',
        'detail.Base',
        'detail.Sidebar',
        'detail.sidebar.Option',
        'detail.sidebar.Link',
        'detail.sidebar.Similar',
        'detail.sidebar.Accessory',
        'category.Tree',
        'category.Seo',
        'category.List',
        'category.DropZone',
        'image.Upload',
        'image.List',
        'image.Info',
        'image.DropZone',
        'image.Mapping',
        'image.NewRule',
        'variant.List',
        'variant.Configurator',
        'variant.Detail',
        'variant.NumberProgress',
        'variant.Progress',
        'variant.configurator.Dependency',
        'variant.configurator.Sets',
        'variant.configurator.GroupEdit',
        'variant.configurator.Mapping',
        'variant.configurator.Template',
        'esd.List',
        'esd.Detail',
        'esd.Serials',
        'statistics.List',
        'statistics.Chart'
    ],

    /**
     * Array of stores to require from AppName.store namespace.
     * @array
     */
    stores:[
        'Batch',
        'Detail',
        'CategoryPath',
        'CategoryTree',
        'Variant',
        'Group',
        'Option',
        'Esd',
        'EsdFile',
        'Statistic',
        'Serial',
        'Surcharge',
        'Dependency',
        'ConfiguratorSet',
        'MediaMapping',
        'Property',
        'PropertyValue'
    ],

    /**
     * Array of models to require from AppName.model namespace.
     * @array
     */
    models: [
        'Batch',
        'PriceGroup',
        'Attribute',
        'PropertyGroup',
        'PropertyOption',
        'PropertyValue',
        'Template',
        'Category',
        'Media',
        'SeoCategory',
        'Unit',
        'Similar',
        'Accessory',
        'Article',
        'Price',
        'Detail',
        'Link',
        'Download',
        'Esd',
        'EsdFile',
        'Statistic',
        'Serial',
        'LinkAttribute',
        'DownloadAttribute',
        'EsdAttribute',
        'PriceAttribute',
        'MediaAttribute',
        'Configurator',
        'ConfiguratorGroup',
        'ConfiguratorSet',
        'ConfiguratorOption',
        'ConfiguratorTemplate',
        'Dependency',
        'PriceSurcharge',
        'Field',
        'MediaMapping',
        'MediaMappingRule',
        'Property'
    ],

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers: [ 'Main', 'Detail', 'Category', 'Media', 'Variant', 'Esd', 'Statistic' ]
});
//

<?php }} ?>