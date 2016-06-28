<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.app.Application.js" */ ?>
<?php /*%%SmartyHeaderCode:20939713315770ed8edd35f6-50961849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c98b54695d2f8990f2f6c95922d5892d1703d1' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.app.Application.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20939713315770ed8edd35f6-50961849',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8ee25b27_04811130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8ee25b27_04811130')) {function content_5770ed8ee25b27_04811130($_smarty_tpl) {?>/**
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
 * @package    ExtJS
 * @subpackage Application
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     Mitchel Simoens https://github.com/mitchellsimoens
 * @author     $Author$
 */

//

/**
 * Ext.app.Application
 *
 * Override the default ext application
 * to add our sub application functionality
 */
Ext.override(Ext.app.Application, {

    loadingMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'application'/'loading','default'=>'Loading [0] ...','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'application'/'loading','default'=>'Loading [0] ...','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading [0] ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'application'/'loading','default'=>'Loading [0] ...','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

	/**
	 * Adds a new controller to the application
	 *
	 * @param controller
	 * @param skipInit
	 */
	addController: function(controller, skipInit) {

		if (Ext.isDefined(controller.name)) {
			var name = controller.name;
			delete controller.name;

			controller.id = controller.id || name;

			controller = Ext.create(name, controller);
		}

		var me          = this,
			controllers = me.controllers;

		controllers.add(controller);


		if (!skipInit) {
			controller.init();
		}

		return controller;
	},

	/**
	 * Remove a controller from the application
	 *
	 * @param controller
	 * @param removeListeners
	 */
	removeController: function(controller, removeListeners) {
		removeListeners = removeListeners || true;

		var me          = this,
			controllers = me.controllers;

		controllers.remove(controller);

		if (removeListeners) {
			var bus = me.eventbus;

			bus.uncontrol([controller.id]);
		}
	},

	/**
	 * Adds a new sub application to the
	 * main application
	 *
	 * @param subapp
	 */
	addSubApplication: function(subapp, skipInit, fn, showLoadMask) {
        skipInit = (skipInit === undefined) ? false : true;
		subapp.app = this;

        if(subapp.hasOwnProperty('showLoadMask')) {
            showLoadMask = subapp.showLoadMask;
        }

        showLoadMask = (showLoadMask === undefined) ? true : showLoadMask;
        if(showLoadMask) {
            this.moduleLoadMask = new Ext.LoadMask(Ext.getBody(), {
                msg: Ext.String.format(this.loadingMessage, (subapp.localizedName) ? subapp.localizedName : subapp.name),
                hideModal: true
            });
            this.moduleLoadMask.show();
        }

        fn = fn || Ext.emptyFn;
        Ext.require(subapp.name, Ext.bind(function() {
            this.addController(subapp, skipInit);
            fn(subapp);
        }, this));
	},

    /**
      * Helper method which returns all open windows.
      *
      * @private
      * @param [boolean] deprecated Wheather or not to include Shopware.apps.Deprecated.view.main.Window in the listing
      * @return [array] active windows
      */
    getActiveWindows: function(deprecated) {
        var activeWindows = [];

        if (deprecated === undefined) {
            deprecated = true;
        }

        Ext.each(Ext.WindowManager.zIndexStack, function (item) {
            if (typeof(item) !== 'undefined') {
                var className = item.$className;
                if ((className == 'Ext.window.Window' || className == 'Enlight.app.Window' || className == 'Ext.Window' || (deprecated && className == 'Shopware.apps.Deprecated.view.main.Window')) && className != "Ext.window.MessageBox") {
                    activeWindows.push(item);
                }

                className = item.alternateClassName;
                if ((className == 'Ext.window.Window' || className == 'Enlight.app.Window' || className == 'Ext.Window' || (deprecated && className == 'Shopware.apps.Deprecated.view.main.Window')) && className != "Ext.window.MessageBox") {
                    activeWindows.push(item);
                }
            }
        });

        return activeWindows;
    }
});
<?php }} ?>