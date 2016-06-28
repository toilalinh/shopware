<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/app.js" */ ?>
<?php /*%%SmartyHeaderCode:18784038915770f10942d623-70510303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ead00da048e852a18eafac4acc32df8081c6cc' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/app.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18784038915770f10942d623-70510303',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10949b627_01097088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10949b627_01097088')) {function content_5770f10949b627_01097088($_smarty_tpl) {?>/**
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
 * @package    Shopware_Cache
 * @subpackage Cache
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Config module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config', {

    extend: 'Enlight.app.SubApplication',

    controllers: [ 'Main', 'Template', 'Document' ],

    bulkLoad: true,
    loadPath: '<?php echo '/backend/Config/load';?>',

    params: {},
    defaultController: 'Main',

    /**
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     */
    launch: function() {
        var me = this,
            controller = me.getController(me.defaultController);

        return controller.mainWindow;
    }
});
//

<?php }} ?>