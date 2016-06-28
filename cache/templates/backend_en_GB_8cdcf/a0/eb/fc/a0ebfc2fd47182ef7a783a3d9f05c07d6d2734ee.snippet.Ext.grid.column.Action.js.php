<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.grid.column.Action.js" */ ?>
<?php /*%%SmartyHeaderCode:11463442715770ed8f1c2c28-91201666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0ebfc2fd47182ef7a783a3d9f05c07d6d2734ee' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.grid.column.Action.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11463442715770ed8f1c2c28-91201666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f1d3a66_20215325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f1d3a66_20215325')) {function content_5770ed8f1d3a66_20215325($_smarty_tpl) {?>/**
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
 * @author     Benjamin Cremer
 * @author     $Author$
 */

/**
 * Overrides the Ext.grid.column.Actio to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
Ext.override(Ext.grid.column.Action, {

    /** Suffix for the data attribute */
    dataSuffix: 'action',

    constructor: function(config) {
        var me = this,
            cfg = Ext.apply({}, config),
            items = cfg.items || [me],
            l = items.length,
            i,
            item;

        // This is a Container. Delete the items config to be reinstated after construction.
        delete cfg.items;
        me.callParent([cfg]);

        // Items is an array property of ActionColumns
        me.items = items;

        // todo@all in Extjs 4.1 this has to be moved into the new defaultRenderer()-function
        me.renderer = function(v, meta) {
//          Allow a configured renderer to create initial value (And set the other values in the "metadata" argument!)
            v = Ext.isFunction(cfg.renderer) ? cfg.renderer.apply(this, arguments)||'' : '';

            meta.tdCls += ' ' + Ext.baseCSSPrefix + 'action-col-cell';
            for (i = 0; i < l; i++) {
                item = items[i];
                item.disable = Ext.Function.bind(me.disableAction, me, [i]);
                item.enable = Ext.Function.bind(me.enableAction, me, [i]);

                var dataString = '';
                if (item.action) {
                    dataString = ' data-' + me.dataSuffix + '="' + item.action + '" ';
                }
                //'" data-' + me.dataSuffix + '="' + item.action +

                v += '<img alt="' + (item.altText || me.altText) + '" src="' + (item.icon || Ext.BLANK_IMAGE_URL) +

                        '" class="' + Ext.baseCSSPrefix + 'action-col-icon ' + Ext.baseCSSPrefix + 'action-col-' + String(i) + ' ' + (item.disabled ? Ext.baseCSSPrefix + 'item-disabled' : ' ') + (item.iconCls || '') +
                        ' ' + (Ext.isFunction(item.getClass) ? item.getClass.apply(item.scope||me.scope||me, arguments) : (me.iconCls || '')) + '"' +
                        ((item.tooltip) ? ' data-qtip="' + item.tooltip + '"' : '') + dataString + ' />';
            }
            return v;
        };
    }
});

<?php }} ?>