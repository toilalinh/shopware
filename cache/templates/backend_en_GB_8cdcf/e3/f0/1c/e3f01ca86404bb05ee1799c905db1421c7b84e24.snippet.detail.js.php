<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:45
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/customer_group/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:11034827015770f1193befe3-77375200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f01ca86404bb05ee1799c905db1421c7b84e24' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/customer_group/detail.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11034827015770f1193befe3-77375200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f119477ea4_65880199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f119477ea4_65880199')) {function content_5770f119477ea4_65880199($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Config.view.customerGroup.Detail', {
    extend: 'Shopware.apps.Config.view.base.Detail',
    alias: 'widget.config-customergroup-detail',

    store: 'detail.CustomerGroup',

	snippets: {
		items:{
			name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'name','default'=>'Name','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'name','default'=>'Name','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'name','default'=>'Name','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			key: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'key','default'=>'Key','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'key','default'=>'Key','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Key<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'key','default'=>'Key','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			taxInput: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'tax_input','default'=>'Tax input','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'tax_input','default'=>'Tax input','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change default price to gross<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'tax_input','default'=>'Tax input','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			taxOutput: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'tax_output','default'=>'Tax output','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'tax_output','default'=>'Tax output','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gross price displayed in frontend<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'tax_output','default'=>'Tax output','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			discountMode:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'discount_mode','default'=>'Discount mode','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'discount_mode','default'=>'Discount mode','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Discount mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'discount_mode','default'=>'Discount mode','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			discount:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'discount','default'=>'Discount','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'discount','default'=>'Discount','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Discount<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'discount','default'=>'Discount','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			minimumOrder:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'items'/'minimum_order','default'=>'Min. order value','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'minimum_order','default'=>'Min. order value','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Min. order value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'items'/'minimum_order','default'=>'Min. order value','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			minimumOrderSurcharge:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'minimum_order_surcharge','default'=>'Order surcharge','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'minimum_order_surcharge','default'=>'Order surcharge','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Order surcharge<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'minimum_order_surcharge','default'=>'Order surcharge','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
		}
	},

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems()
        });

        me.callParent(arguments);
    },

    /**
     * Override the loadRecord method of config-base-detail in order to
     * and make the default's customer group key "EK" non-editable
     * @param record
     */
    loadRecord: function(record) {
        var me = this,
            groupKeyField;

        groupKeyField = me.down('field[name=key]');

        if(record && record.get('id') === 1 && groupKeyField) {
            groupKeyField.setDisabled(true);
        }else if(groupKeyField) {
            groupKeyField.setDisabled(false);
        }

        me.callOverridden(arguments);
    },

    getItems: function() {
        var me = this;
        return [{
            name: 'name',
            fieldLabel: me.snippets.items.name,
            allowBlank: false
        },{
            name: 'key',
            fieldLabel: me.snippets.items.key,
            allowBlank: false
        },{
            xtype: 'config-element-boolean',
            name: 'taxInput',
            fieldLabel: me.snippets.items.taxInput
        },{
            xtype: 'config-element-boolean',
            name: 'tax',
            fieldLabel: me.snippets.items.taxOutput
        },{
            xtype: 'config-element-boolean',
            name: 'mode',
            fieldLabel: me.snippets.items.discountMode,
            handler: function(button, value) {
                var form = button.up('form'),
                    discount = form.down('field[name=discount]');
                if(value) {
                    discount.show();
                } else {
                    discount.hide();
                }
            }
        },{
            xtype: 'config-element-number',
            name: 'discount',
            decimalPrecision: 2,
            fieldLabel: me.snippets.items.discount,
            hidden: true
        },{
            xtype: 'config-element-number',
            name: 'minimumOrder',
            decimalPrecision: 2,
            fieldLabel: me.snippets.items.minimumOrder
        },{
            xtype: 'config-element-number',
            name: 'minimumOrderSurcharge',
            decimalPrecision: 2,
            fieldLabel: me.snippets.items.minimumOrderSurcharge
        }, {
            xtype: 'config-customergroup-discount'
        }];
    }
});
//
<?php }} ?>