<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.panel.Panel.js" */ ?>
<?php /*%%SmartyHeaderCode:4340206305770ed8f240577-11606510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a122efc642810787c8dd9ddfa64f4c5e9dcbb4d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.panel.Panel.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4340206305770ed8f240577-11606510',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f275ee3_37091477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f275ee3_37091477')) {function content_5770ed8f275ee3_37091477($_smarty_tpl) {?>/**
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
 * Overrides the Ext.panel.Panel to disable for all browsers except Google
 * Chrome which performs well here.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2011, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
Ext.override(Ext.panel.Panel, {
    animCollapse: Ext.isChrome,

    /**
     * Initializes the component and forces the panel
     * to disable all animations.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.animCollapse = Ext.isChrome;
        me.callOverridden(arguments);
    },

     // private - used for dragging
    ghost: function(cls, windowMoving) {
        var me = this,
            ghostPanel = me.ghostPanel,
            box = me.getBox(),
            header;

        if (!ghostPanel) {
            ghostPanel = new Ext.panel.Panel({
                renderTo: document.body,
                floating: {
                    shadow: false
                },
                frame: me.frame && !me.alwaysFramed,
                alwaysFramed: me.alwaysFramed,
                overlapHeader: me.overlapHeader,
                headerPosition: me.headerPosition,
                baseCls: me.baseCls,
                cls: me.baseCls + '-ghost ' + (cls ||'')
            });
            me.ghostPanel = ghostPanel;
        }
        ghostPanel.floatParent = me.floatParent;
        if (me.floating) {
            ghostPanel.setZIndex(Ext.Number.from(me.el.getStyle('zIndex'), (windowMoving) ? -10 : 0));
        } else {
            if(!windowMoving) {
                ghostPanel.toFront();
            }
        }
        if (!(me.preventHeader || (me.header === false))) {
            header = ghostPanel.header;
            // restore options
            if (header) {
                header.suspendLayouts();
                Ext.Array.forEach(header.query('tool'), header.remove, header);
                header.resumeLayouts();
            }
            ghostPanel.addTool(me.ghostTools());
            ghostPanel.setTitle(me.title);
            ghostPanel.setIconCls(me.iconCls);
        }

        ghostPanel.el.show();
        ghostPanel.setPagePosition(box.x, box.y);
        Ext.defer(function() {
            ghostPanel.setSize(box.width, box.height);
        }, 10, me);
        me.el.hide();
        return ghostPanel;
    },

    // private
    unghost: function(show, matchPosition, windowMoving) {
        var me = this;
        if (!me.ghostPanel) {
            return;
        }
        if (show !== false) {
            // Show el first, so that position adjustment in setPagePosition
            // will work when relative positioned elements have their XY read.
            me.el.show();
            if (matchPosition !== false) {
                me.setPagePosition(me.ghostPanel.el.getXY());
                if (me.hideMode == 'offsets') {
                    // clear the hidden style because we just repositioned
                    delete me.el.hideModeStyles;
                }
            }
            if(!windowMoving) {
                Ext.defer(me.focus, 10, me);
            }

        }
        me.ghostPanel.el.hide();
    },
});<?php }} ?>