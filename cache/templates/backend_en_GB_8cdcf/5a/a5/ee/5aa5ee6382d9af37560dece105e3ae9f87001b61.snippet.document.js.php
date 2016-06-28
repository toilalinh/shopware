<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/store/detail/document.js" */ ?>
<?php /*%%SmartyHeaderCode:13185372225770f10ad20d59-97885256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa5ee6382d9af37560dece105e3ae9f87001b61' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/store/detail/document.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13185372225770f10ad20d59-97885256',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10ad7cae2_06865687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10ad7cae2_06865687')) {function content_5770f10ad7cae2_06865687($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.store.detail.Document', {
    extend: 'Ext.data.Store',
    model:'Shopware.apps.Config.model.form.Document',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getValues';?>?name=document',
        api: {
            create: '<?php echo '/backend/Config/saveValues';?>?name=document',
            update: '<?php echo '/backend/Config/saveValues';?>?name=document',
            destroy: '<?php echo '/backend/Config/deleteValues';?>?name=document'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>