<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.toolbar.Paging.js" */ ?>
<?php /*%%SmartyHeaderCode:15506507785770ed8f0f3ac2-65367989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a27be258d4eed5e37e96e1b9e9da31176066f39' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.toolbar.Paging.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15506507785770ed8f0f3ac2-65367989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f117e77_60755793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f117e77_60755793')) {function content_5770ed8f117e77_60755793($_smarty_tpl) {?>/**
 * Enlight
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://enlight.de/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@shopware.de so we can send you a copy immediately.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */

/**
 * Overrides the Ext.button.Button to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
Ext.override(Ext.toolbar.Paging, {
    getPagingItems: function() {
        var me = this;

        return [{
            itemId: 'first',
            tooltip: me.firstText,
            overflowText: me.firstText,
            iconCls: Ext.baseCSSPrefix + 'tbar-page-first',
            action: 'firstPage',
            disabled: true,
            handler: me.moveFirst,
            scope: me
        },{
            itemId: 'prev',
            tooltip: me.prevText,
            overflowText: me.prevText,
            iconCls: Ext.baseCSSPrefix + 'tbar-page-prev',
            action: 'prevPage',
            disabled: true,
            handler: me.movePrevious,
            scope: me
        },
        '-',
        me.beforePageText,
        {
            xtype: 'numberfield',
            itemId: 'inputItem',
            name: 'inputItem',
            cls: Ext.baseCSSPrefix + 'tbar-page-number',
            allowDecimals: false,
            minValue: 1,
            hideTrigger: true,
            enableKeyEvents: true,
            selectOnFocus: true,
            submitValue: false,
            width: me.inputItemWidth,
            margins: '-1 2 3 2',
            listeners: {
                scope: me,
                keydown: me.onPagingKeyDown,
                blur: me.onPagingBlur
            }
        },{
            xtype: 'tbtext',
            itemId: 'afterTextItem',
            text: Ext.String.format(me.afterPageText, 1)
        },
        '-',
        {
            itemId: 'next',
            tooltip: me.nextText,
            overflowText: me.nextText,
            iconCls: Ext.baseCSSPrefix + 'tbar-page-next',
            action: 'nextPage',
            disabled: true,
            handler: me.moveNext,
            scope: me
        },{
            itemId: 'last',
            tooltip: me.lastText,
            overflowText: me.lastText,
            iconCls: Ext.baseCSSPrefix + 'tbar-page-last',
            action: 'lastPage',
            disabled: true,
            handler: me.moveLast,
            scope: me
        },
        '-',
        {
            itemId: 'refresh',
            tooltip: me.refreshText,
            overflowText: me.refreshText,
            iconCls: Ext.baseCSSPrefix + 'tbar-loading',
            action: 'refreshPage',
            handler: me.doRefresh,
            scope: me
        }];
    },

    doRefresh : function(){
        var me = this,
            current = me.store.currentPage,
            refreshButton = me.child('#refresh');

        if(refreshButton) {
            refreshButton.disable();
        }

        if (me.fireEvent('beforechange', me, current) !== false) {
            me.store.loadPage(current);
        }
    }
});
<?php }} ?>