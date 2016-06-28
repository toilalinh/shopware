<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/store/form/template.js" */ ?>
<?php /*%%SmartyHeaderCode:2752218795770f10a8b3fd0-52324187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '444be9bf78d6a251ccff96768128c34a8fa7cb8f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/store/form/template.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2752218795770f10a8b3fd0-52324187',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a90cfe2_47242025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a90cfe2_47242025')) {function content_5770f10a90cfe2_47242025($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.store.form.Template', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Config.model.form.Template',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 24,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getTemplateList';?>',
        api: {
            create: '<?php echo '/backend/Config/saveTemplate';?>',
            update: '<?php echo '/backend/Config/saveTemplate';?>',
            destroy: ''
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>