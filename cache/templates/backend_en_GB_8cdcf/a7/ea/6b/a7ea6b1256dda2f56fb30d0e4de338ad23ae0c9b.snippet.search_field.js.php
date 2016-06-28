<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:45
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/store/form/search_field.js" */ ?>
<?php /*%%SmartyHeaderCode:6707277745770f11995aa82-38061580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ea6b1256dda2f56fb30d0e4de338ad23ae0c9b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/store/form/search_field.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6707277745770f11995aa82-38061580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f11999f4d2_54569143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f11999f4d2_54569143')) {function content_5770f11999f4d2_54569143($_smarty_tpl) {?>/**
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
 */

/**
 * todo@all: Documentation
 */

//
Ext.define('Shopware.apps.Config.store.form.SearchField', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Config.model.form.SearchField',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getTableList/name/searchField';?>',
        api: {
            create: '<?php echo '/backend/Config/saveTableValues/name/searchField';?>',
            update: '<?php echo '/backend/Config/saveTableValues/name/searchField';?>',
            destroy: '<?php echo '/backend/Config/deleteTableValues/name/searchField';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//<?php }} ?>