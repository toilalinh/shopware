<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:16105241205770f10ab74261-04080837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f405eac3e20731fba3af347bfcee6b42adf74b1' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/main/window.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16105241205770f10ab74261-04080837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10abd6084_02380651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10abd6084_02380651')) {function content_5770f10abd6084_02380651($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.main.Window', {
    extend: 'Enlight.app.Window',
    alias: 'widget.config-main-window',
    layout: 'border',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','default'=>'Basic settings','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Basic settings','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Basic settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Basic settings','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    titleTemplate: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title_template','default'=>'Basic settings - [label]','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title_template','default'=>'Basic settings - [label]','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Basic settings - [label]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title_template','default'=>'Basic settings - [label]','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    cls: Ext.baseCSSPrefix + 'template-main-window',
    hideNavigation: false,
    width: 1100,
    height:'90%',

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

        if(me.mode && me.mode === 'iframe-mode') {
            me.title = '';
            me.renderTo = Ext.getBody();
            me.unstyled = true;
            me.width = '100%';
            me.height = '90%';
        }
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