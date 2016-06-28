<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:44
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/cron_job.js" */ ?>
<?php /*%%SmartyHeaderCode:9918404905770f11842f166-02754392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b55de3e084f1a5207db6f1e2de7f949640d5fc4' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/model/form/cron_job.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9918404905770f11842f166-02754392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f11846a0f1_02041482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f11846a0f1_02041482')) {function content_5770f11846a0f1_02041482($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.form.CronJob', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'action', type: 'string' },
        { name: 'data', type: 'string' },
        { name: 'next', type: 'date', useNull: true },
        { name: 'start', type: 'date', useNull: true },
        { name: 'end', type: 'date', useNull: true },
        { name: 'interval', type: 'int' },
        { name: 'active', type: 'boolean' },
        { name: 'informTemplate', type: 'string' },
        { name: 'informMail', type: 'string' },
        { name: 'pluginId', type: 'int', useNull: true, defaultValue: 0 },
        { name: 'deletable', type: 'boolean', convert: function(v, r) { return r.data.pluginId !== null; } }
    ]
});
//<?php }} ?>