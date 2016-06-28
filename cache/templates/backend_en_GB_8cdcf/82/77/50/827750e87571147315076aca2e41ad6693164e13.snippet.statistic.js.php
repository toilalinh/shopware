<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/list/statistic.js" */ ?>
<?php /*%%SmartyHeaderCode:14229455695770f0d8c92126-99448967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827750e87571147315076aca2e41ad6693164e13' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/list/statistic.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14229455695770f0d8c92126-99448967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d8d6dc24_01567189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d8d6dc24_01567189')) {function content_5770f0d8d6dc24_01567189($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list statistic panel
 * Displayed on the left side of the order list module.
 */
//
Ext.define('Shopware.apps.Order.view.list.Statistic', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.panel.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-list-statistic',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'navigation-statistic',
    layout: 'fit',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Statistic','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Statistic','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statistics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Statistic','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        gridTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid','default'=>'Statistic details','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid','default'=>'Statistic details','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statistic details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid','default'=>'Statistic details','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columns: {
            description: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'description','default'=>'Description','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'description','default'=>'Description','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'description','default'=>'Description','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            value: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'value','default'=>'Value','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'value','default'=>'Value','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'value','default'=>'Value','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            summary: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'description'/'summary','default'=>'Total','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'description'/'summary','default'=>'Total','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'description'/'summary','default'=>'Total','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }

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
        me.items = [ me.createFieldContainer() ];
        me.title = me.snippets.title;
        me.callParent(arguments);
    },

    /**
     * Creates the outer field container for the statistic grid and chart.
     * @return Ext.container.Container - Contains the statistic grid and chart
     */
    createFieldContainer: function() {
        var me = this;

        return Ext.create('Ext.container.Container', {
            border: false,
            padding: 10,
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            items: [ me.createChart(), me.createGrid() ]
        });
    },

    createChart: function() {
        var me = this;

        return Ext.create('Ext.chart.Chart', {
            store: me.statisticStore,
            //Specifies whether the floating component should be given a shadow.
            shadow: true,
            //True for the default animation (easing: 'ease' and duration: 500) or a standard animation config object to be used for default chart animations.
            animate: true,
            width: 275,
            height: 250,
            cls: Ext.baseCSSPrefix + 'order-statistic-chart',
            series: [
                {
                    type: 'pie',
                    field: 'value',
                    label: {
                        field: 'description',
                        display: 'rotate',
                        contrast: true,
                        fontSize: 9
                    },
                    //If set to true it will highlight the markers or the series when hovering with the mouse.
                    highlight: {
                        segment: {
                            margin: 20
                        }
                    },
                    //Add tooltips to the visualization's markers. The options for the tips are the same configuration used with Ext.tip.ToolTip
                    tips: {
                        trackMouse: true,
                        width: 180,
                        height: 25,
                        cls: Ext.baseCSSPrefix + 'order-list-chart-tooltip',
                        //tip renderer of the chart
                        renderer: function(storeItem, item) {
                            // calculate and display percentage on hover
                            var total = 0;

                            me.statisticStore.each(function(rec) {
                                total += rec.get('value');
                            });

                            this.setTitle(storeItem.get('description') + ': ' + Math.round(storeItem.get('value') / total * 100) + '%');
                        }
                    }
                }
            ]
        });
    },

    /**
     * Creates the gird which displayed in the statistic panel on the left hand of the main window.
     * Displays the order data grouped by payment with an summary row at the end.
     * @return Ext.grid.Panel
     */
    createGrid: function() {
        var me = this;

        return Ext.create('Ext.grid.Panel', {
            //the grid an chart use the same store.
            store: me.statisticStore,
            flex: 1,
            title: me.snippets.gridTitle,
            //An array of grid Features to be added to this grid
            features: [{
                ftype: 'summary'
            }],
            cls: Ext.baseCSSPrefix + 'order-statistic-grid',
            columns: [
                {
                    header: me.snippets.columns.description,
                    dataIndex: 'description',
                    flex: 1,
                    //type of the summary function
                    summaryType: 'count',
                    //renderer for the summary row
                    summaryRenderer: function() {
                        return '<b>' + me.snippets.columns.summary + '</b>';
                    }
                },
                {
                    header: me.snippets.columns.value,
                    dataIndex: 'value',
                    flex: 1,
                    //column renderer function which formats the value with Ext.util.Format.currency()
                    renderer: me.valueColumn,
                    //type of the summary function
                    summaryType: 'sum',
                    //renderer for the summary row
                    summaryRenderer: function(value, summaryData, dataIndex) {
                        return '<b>' + Ext.util.Format.currency(value) + '</b>';
                    }
                }
            ]
        });

    },

    /**
     * Render function for the value column of the statistic grid.
     * @param value
     */
    valueColumn: function(value) {
        return Ext.util.Format.currency(value);
    }


});
//
<?php }} ?>