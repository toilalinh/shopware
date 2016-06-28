<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:34
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/view/widgets/base.js" */ ?>
<?php /*%%SmartyHeaderCode:20253942375770f0d27288c9-87387905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6148da6f22687b29693c8e45f7cb1c77cda8cf85' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/view/widgets/base.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20253942375770f0d27288c9-87387905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d2734e15_70892170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d2734e15_70892170')) {function content_5770f0d2734e15_70892170($_smarty_tpl) {?>/**
 * Shopware 4
 * Copyright © shopware AG
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
 */

/**
 * Base for Shopware 4.x Widgets
 *
 * This file contains a basic class for all widgets in the backend. Please
 * note that this class is just a base file and does only contain base logic that applies to all widgets.
 */
Ext.define('Shopware.apps.Index.view.widgets.Base', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.widget-base',
    layout: 'fit',
    anchor: '100%',
    minHeight: 200,
    cls: Ext.baseCSSPrefix + 'widget-component',
    bodyPadding: 10,
    frame: true,
    closable: false,
    collapsible: false,

    initComponent: function() {
        var me = this,
            tools = me.tools || [],
            defaults = [{
                type: 'close',
                scope: me,
                handler: function() {
                    me.fireEvent('closeWidget', me);
                }
            }];

        me.tools = Ext.Array.merge(tools, defaults);

        me.callParent();
    }
});<?php }} ?>