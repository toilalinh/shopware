<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/app.js" */ ?>
<?php /*%%SmartyHeaderCode:7472678115770f0d8e39e29-81395396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447e93b38394b3e91a5293a669aa3fbb1c5ab1aa' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/app.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7472678115770f0d8e39e29-81395396',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d8edf643_41772663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d8edf643_41772663')) {function content_5770f0d8edf643_41772663($_smarty_tpl) {?>/**
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
 * @package    Category
 * @subpackage Settings
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */
/*  */

/**
 * Shopware Application - Category Management Module
 * Contains the configuration for the category management backend module.
 * This component defines which controllers belong to the application and whether the bulk loading is activated or not.
 */

//
Ext.define('Shopware.apps.Category', {
    /**
     * Extends from our special controller, which handles the
     * sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',
    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Category',
    /**
     * Sets the loading path for the sub-application.
     *
     * Note that you'll need a "loadAction" in your
     * controller (server-side)
     * @string
     */
    bulkLoad: true,
    /**
     * PHP Controller to use for the bulk loading
     * @string
     */
    loadPath:'<?php echo '/backend/Category/load';?>',

    /**
     * Required stores for sub-application
     * @array
     */
    stores:[ 'Detail', 'Tree', 'Template', 'CustomerGroups', 'AvailableProducts', 'AssignedProducts' ],
    /**
     * Required views for this sub-application
     * @array
     */
    views: [
        'main.Window',
        'main.MultiRequestTasks',
        'category.Tree',
        'category.tabs.Settings',
        'category.tabs.ArticleMapping',
        'category.tabs.restriction'
    ],

    /**
     * Required models for sub-application
     * @array
     */
    models:[ 'Detail','Tree', 'Template', 'Attribute', 'Emotion', 'ProductAssignment' ],

    /**
     * Required controllers for sub-application
     * @array
     */
    controllers:[
        'Main',
        'Tree',
        'Settings',
        'ArticleMapping',
        'MultiRequest'
    ],

    /**
     * Returns the main application window for this is expected
     * by the Enlight.app.SubApplication class.
     * The class sets a new event listener on the "destroy" event of
     * the main application window to perform the destroying of the
     * whole sub application when the user closes the main application window.
     *
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     *
     * @private
     * @return [object] mainWindow - the main application window based on Enlight.app.Window
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return me.mainWindow = mainController.mainWindow;
    }
});
//
<?php }} ?>