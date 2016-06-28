<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:45
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/controller/statistic.js" */ ?>
<?php /*%%SmartyHeaderCode:16546970475770f0dd985ab2-99555721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc2ae8801c33bba74f3eb325172536fbe0e8fe9' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/article/controller/statistic.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16546970475770f0dd985ab2-99555721',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0dd9cf954_35005370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0dd9cf954_35005370')) {function content_5770f0dd9cf954_35005370($_smarty_tpl) {?>/**
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
 * @subpackage Statistic
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Article backend module
 */
//
//
Ext.define('Shopware.apps.Article.controller.Statistic', {
    /**
     * The parent class that this class extends.
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Set component references for easy access
     * @array
     */
    refs: [
        { ref: 'mainWindow', selector: 'article-detail-window' },
        { ref: 'statisticList', selector: 'article-detail-window article-statistics-list' },
        { ref: 'statisticChart', selector: 'article-detail-window article-statistics-chart' }
    ],

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @params orderId - The main controller can handle a orderId parameter to open the order detail page directly
     * @return void
     */
    init: function () {
        var me = this;

        me.control({
            'article-statistics-list': {
                dateChange: me.onDateChange
            },

            'article-detail-window tabpanel[name=main-tab-panel]': {
                beforetabchange: me.onMainTabChange
            }
        });
        me.callParent(arguments);
    },


    /**
     * Event listener function of the main tab panel in the detail window.
     * Fired when the user changes the tab.
     */
    onMainTabChange: function (panel, newTab, oldTab) {
        if (newTab.name !== 'statistic-tab') {
            return;
        }

        var me = this,
            statisticListStore = me.getStatisticList().getStore(),
            statisticChartStore = me.getStatisticChart().getStore();

        if(!Ext.isEmpty(me.getMainWindow()) && !Ext.isEmpty(me.getMainWindow().article) && !Ext.isEmpty(me.getMainWindow().article.get('id'))) {
            //set the new article id to the extra params
            statisticListStore.getProxy().extraParams.articleId = me.getMainWindow().article.get('id');
            statisticChartStore.getProxy().extraParams.articleId = me.getMainWindow().article.get('id');
            statisticChartStore.getProxy().extraParams.chart = true;
        }
        //reload the list and the chart store
        statisticListStore.load();
        statisticChartStore.load();
    },

    onDateChange: function(fromDate, toDate) {
        var me = this;
        var store = me.getStatisticList().getStore();

        store.load({
            params: {
                fromDate: fromDate,
                toDate: toDate
            }
        });
    }

});
//
<?php }} ?>