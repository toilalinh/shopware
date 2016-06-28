<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/controller/document.js" */ ?>
<?php /*%%SmartyHeaderCode:7889831145770f109b87fa4-89051824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe828c86d9f24d2d419645b51f1eba5c508cdc67' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/controller/document.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7889831145770f109b87fa4-89051824',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f109baf3d8_68669603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f109baf3d8_68669603')) {function content_5770f109baf3d8_68669603($_smarty_tpl) {?>/**
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
 * Shopware Controller - Config backend module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.controller.Document', {

    extend: 'Enlight.app.Controller',

    views: [
		'form.Document'
    ],

    stores:[
		'form.Document',
		'detail.Document',
		'form.Number'
    ],

    models:[
		'form.Document',
		'form.DocumentElement'
    ],

    refs: [
        { ref: 'detail', selector: 'config-base-detail' }
    ],

    /**
     *
     */
    init: function () {
        var me = this;

        me.control({
			'config-form-document config-base-table': {
				selectionchange: function(table, records) {
					var me = this,
						elementFieldSet = me.getDetail().down('fieldset[name=elementFieldSet]'),
						contentField = elementFieldSet.down('tinymce[name$=Value]'),
						styleField = elementFieldSet.down('textarea[name$=Style]');

					Ext.each(elementFieldSet.items.items, function(item){
						if(item.xtype == 'tinymce' || item.xtype == 'textarea'){
							item.hide();
							item.setValue(null);
						}
					});
				}
			},
			'config-base-detail combo[name=elements]': {
				change: me.onSelectElement
			}
        });

        me.callParent(arguments);
    },

	onSelectElement: function(combo, newValue, oldValue){
		//If there is no new value selected, so the event got fired otherwise
		if(!newValue){
			return;
		}
		var me = this,
			elementFieldSet = me.getDetail().down('fieldset[name=elementFieldSet]'),
			elementComboBox = elementFieldSet.down('combo'),
			elementStore = elementComboBox.getStore();
		//Checks if there was an value selected before changing it
		//Needed to save the values to the record
		if(oldValue){
			var oldRecord = elementStore.getById(oldValue),
				oldFieldName = oldRecord.get('name'),
				oldContentField = elementFieldSet.down('tinymce[name=' + oldFieldName + '_Value]'),
				oldStyleField = elementFieldSet.down('textarea[name=' + oldFieldName + '_Style]');

			oldRecord.set('value', oldContentField.getValue());
			oldRecord.set('style', oldStyleField.getValue());
			oldContentField.hide();
			oldStyleField.hide();
		}

		var newRecord = elementStore.getById(newValue),
		    newFieldName = newRecord.get('name'),
			newContentField = elementFieldSet.down('tinymce[name=' + newFieldName + '_Value]'),
			newStyleField = elementFieldSet.down('textarea[name=' + newFieldName + '_Style]');


		//Show the dynamical fields and fill them
		newContentField.show();
		newStyleField.show();
		newContentField.setValue(newRecord.get('value'));
		newStyleField.setValue(newRecord.get('style'));
	}

});
//
<?php }} ?>