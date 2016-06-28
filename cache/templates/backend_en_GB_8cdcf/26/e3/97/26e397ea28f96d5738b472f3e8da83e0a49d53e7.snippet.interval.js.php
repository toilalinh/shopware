<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:42
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/component/element/interval.js" */ ?>
<?php /*%%SmartyHeaderCode:13764542295770ed9287cdd1-92152273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26e397ea28f96d5738b472f3e8da83e0a49d53e7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/component/element/interval.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13764542295770ed9287cdd1-92152273',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed9296fdf0_90717719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed9296fdf0_90717719')) {function content_5770ed9296fdf0_90717719($_smarty_tpl) {?>//

/**
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
 * @package    Base
 * @subpackage Component
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Interval', {
    extend:'Ext.form.field.ComboBox',
    alias:[
        'widget.base-element-interval'
    ],

    queryMode: 'local',
    forceSelection: false,
    editable: true,

    store: [
        [0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'empty_value','default'=>'None (0 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'empty_value','default'=>'None (0 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None (0 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'empty_value','default'=>'None (0 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [120, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'2_minutes','default'=>'2 Minutes (120 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_minutes','default'=>'2 Minutes (120 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2 minutes (120 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_minutes','default'=>'2 Minutes (120 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [300, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'5_minutes','default'=>'5 Minutes (300 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'5_minutes','default'=>'5 Minutes (300 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
5 minutes (300 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'5_minutes','default'=>'5 Minutes (300 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [600, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'10_minutes','default'=>'10 Minutes (600 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'10_minutes','default'=>'10 Minutes (600 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
10 minutes (600 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'10_minutes','default'=>'10 Minutes (600 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [900, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'15_minutes','default'=>'15 Minutes (900 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'15_minutes','default'=>'15 Minutes (900 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
15 minutes (900 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'15_minutes','default'=>'15 Minutes (900 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [1800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'30_minutes','default'=>'30 Minutes (1800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'30_minutes','default'=>'30 Minutes (1800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
30 minutes (1800 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'30_minutes','default'=>'30 Minutes (1800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [3600, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'1_hour','default'=>'1 Hour (3600 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_hour','default'=>'1 Hour (3600 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1 hour (3600 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_hour','default'=>'1 Hour (3600 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [7200, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'2_hours','default'=>'2 Hours (7200 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_hours','default'=>'2 Hours (7200 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2 hours (7200 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_hours','default'=>'2 Hours (7200 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [14400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'4_hours','default'=>'4 Hours (14400 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'4_hours','default'=>'4 Hours (14400 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
4 hours (14400 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'4_hours','default'=>'4 Hours (14400 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [28800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'12_hours','default'=>'12 Hours (28800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'12_hours','default'=>'12 Hours (28800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
12 hours (28800 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'12_hours','default'=>'12 Hours (28800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [86400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'1_day','default'=>'1 Day (86400 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_day','default'=>'1 Day (86400 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1 day (86400 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_day','default'=>'1 Day (86400 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [172800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'2_days','default'=>'2 Days (172800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_days','default'=>'2 Days (172800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2 days (172800 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_days','default'=>'2 Days (172800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [604800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'1_week','default'=>'1 Week (604800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_week','default'=>'1 Week (604800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1 week (604800 sec.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_week','default'=>'1 Week (604800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
']
    ],

    initComponent:function () {
        var me = this;

        me.callParent(arguments);
    }
});<?php }} ?>