<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/main/iframe.js" */ ?>
<?php /*%%SmartyHeaderCode:18648839405770f10ac2d9c8-53516475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c5dc55c5157c3b515b18a3a77c66914a14dc4ee' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/main/iframe.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18648839405770f10ac2d9c8-53516475',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10ac5c740_69627563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10ac5c740_69627563')) {function content_5770f10ac5c740_69627563($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.view.main.Iframe', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.config-main-window',
    layout: 'border',

    cls: Ext.baseCSSPrefix + 'template-main-window',
    hideNavigation: false,

    renderTo: Ext.getBody(),
    unstyled: true,
    width: '100%',
    height: '100%',

    loadTitle: function(record) {
        var me = this,
            title = me.titleTemplate;
        title = new Ext.Template(title).applyTemplate(record.data);
        me.setTitle(title);
    },

    /**
     *
     */
    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems()
        });
        me.callParent(arguments);
    },

    /**
     * @return array
     */
    getItems: function() {
        var me = this;
        me.contentPanel = Ext.create('Shopware.apps.Config.view.main.Panel', {
            region: 'center'
        });
        return [{
            region: 'west',
            hidden: me.hideNavigation,
            xtype: 'config-navigation'
        }, me.contentPanel ];
    }
});
//<?php }} ?>