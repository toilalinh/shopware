<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/model/article.js" */ ?>
<?php /*%%SmartyHeaderCode:7423793765770f0d6bf1fb1-79844135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a187ee891ec8bc22d416f0b833183280ddcf4caf' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/model/article.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7423793765770f0d6bf1fb1-79844135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d6d2e7e0_77443602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d6d2e7e0_77443602')) {function content_5770f0d6d2e7e0_77443602($_smarty_tpl) {?>/**
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
 * @subpackage Batch
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article models.
 * The article model contains all data about the article. Additional the model
 * contains the definition of the model associations. The article model
 * contains a proxy to define which request has to been sent to save, update and delete
 * the article.
 */
//
Ext.define('Shopware.apps.Article.model.Article', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'configuratorSetId', type: 'integer', useNull: true },
        { name: 'supplierId', type: 'int', useNull: true },
        { name: 'supplierName', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string', useNull: true },
        { name: 'descriptionLong', type: 'string' },
        { name: 'metaTitle', type: 'string', useNull: true },
        { name: 'keywords', type: 'string', useNull: true },
        { name: 'added', type: 'date', dateFormat: 'd.m.Y' },
        { name: 'changed', type: 'date' },
        { name: 'active', type: 'boolean', defaultValue: true },
        { name: 'taxId', type: 'int', useNull: true },
        { name: 'highlight', type: 'boolean' },
        { name: 'pseudoSales', type: 'int' },
        { name: 'priceGroupId', type: 'int', useNull: true },
        { name: 'priceGroupActive', type: 'boolean' },
        { name: 'filterGroupId', type: 'int', useNull: true },
        { name: 'lastStock', type: 'boolean' },
        { name: 'notification', type: 'boolean' },
        { name: 'template', type: 'string', useNull: true },
        { name: 'autoNumber', type: 'string' },
        {
            name: 'avoidCustomerGroups',
            type: 'string',
            useNull: true,
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.customerGroups) {
                    var customerGroups = [];
                    Ext.each(record.raw.customerGroups, function(customerGroup) {
                        customerGroups.push(customerGroup.id);
                    });
                    return customerGroups;
                }
                return null;
            }
        },
        {
            name: 'isConfigurator',
            type: 'boolean',
            convert: function(value, record) {
                if (value === true || value === false) {
                    return value;
                }
                return (record.get('configuratorSetId') !== null);
            }
        }
    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Detail', name: 'getMainDetail', associationKey: 'mainDetail' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Category', name: 'getCategory', associationKey: 'categories' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.SeoCategory', name: 'getSeoCategories', associationKey: 'seoCategories' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Accessory', name: 'getAccessory', associationKey: 'related' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Similar', name: 'getSimilar', associationKey: 'similar' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Link', name: 'getLink', associationKey: 'links' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Media', name: 'getMedia', associationKey: 'images' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Download', name: 'getDownload', associationKey: 'downloads' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Price', name: 'getPrice', associationKey: 'mainPrices' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorTemplate', name: 'getConfiguratorTemplate', associationKey: 'configuratorTemplate' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Attribute', name: 'getAttribute', associationKey: 'attribute' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorSet', name:'getConfiguratorSet', associationKey:'configuratorSet' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Dependency', name: 'getDependencies', associationKey: 'dependencies' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.PriceSurcharge', name: 'getPriceSurcharges', associationKey: 'priceSurcharges' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.CustomerGroup', name: 'getCustomerGroups', associationKey: 'customerGroups' }
    ],
    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            create: '<?php echo '/backend/Article/save';?>',
            update: '<?php echo '/backend/Article/save';?>',
            destroy: '<?php echo '/backend/Article/delete';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }

});
//
<?php }} ?>