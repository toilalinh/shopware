<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/store/dispatch.js" */ ?>
<?php /*%%SmartyHeaderCode:2927599745770ed918e5050-13371576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f395a7108d49a8e5caebdd0c02ccfd8f5d79cc' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/store/dispatch.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2927599745770ed918e5050-13371576',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed918fcd35_44796972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed918fcd35_44796972')) {function content_5770ed918fcd35_44796972($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.Dispatch', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Dispatch',
    storeId: 'base.Dispatch',
    model : 'Shopware.apps.Base.model.Dispatch',
    pageSize: 1000,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/base/getDispatches';?>',
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>