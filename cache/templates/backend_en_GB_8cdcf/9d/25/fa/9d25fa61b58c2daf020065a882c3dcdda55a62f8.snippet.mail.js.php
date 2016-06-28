<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:41
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/batch/mail.js" */ ?>
<?php /*%%SmartyHeaderCode:17093383435770f0d9194034-33698283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d25fa61b58c2daf020065a882c3dcdda55a62f8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/batch/mail.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17093383435770f0d9194034-33698283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9218aa3_33009084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9218aa3_33009084')) {function content_5770f0d9218aa3_33009084($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order batch window
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.batch.Mail', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.form.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.batch-mail-panel',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'batch-mail-panel',

    /**
     * Component layout definition
     * @object
     */
    layout: {
        align: 'stretch',
        type: 'vbox'
    },
    /**
     * Set flex value
     * @int
     */
    flex: 1,

    /**
     * A shortcut for setting a padding style on the body element. The value can either be a number to be applied to all sides, or a normal css string describing padding.
     * @int
     */
    bodyPadding: 10,

    /**
     * Enable collapse mode.
     * @boolean
     */
    collapsible: true,

    /**
     * Define that the panel collapse to right
     * @string
     */
    collapseDirection: 'right',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'mail'/'title','default'=>'Send an email to the customer','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mail'/'title','default'=>'Send an email to the customer','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send an email to the customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mail'/'title','default'=>'Send an email to the customer','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        subject: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'subject','default'=>'Subject','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'subject','default'=>'Subject','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Subject<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'subject','default'=>'Subject','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        to: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'to','default'=>'To','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'to','default'=>'To','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'to','default'=>'To','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button','default'=>'Send mail','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button','default'=>'Send mail','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button','default'=>'Send mail','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
	 */
    initComponent:function () {
        var me = this;

        me.registerEvents();

        me.items = me.getFormItems();
        me.collapsible = (me.mode !== 'single');

        me.title = me.snippets.title;
        me.callParent(arguments);
    },

    /**
     *
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the "generate documents" button which is
             * displayed within the form field set.
             *
             * @event
             * @param [Ext.form.Panel] - This component
             */
            'sendMail'
        );
    },

    /**
     *
     */
    getFormItems: function() {
        var me = this;


        return [
            {
                xtype: 'textfield',
                name: 'to',
                fieldLabel: me.snippets.to
            },
            {
                xtype: 'textfield',
                name: 'subject',
                fieldLabel: me.snippets.subject
            },
            {
                xtype: 'textarea',
                name: 'content',
                minHeight: 90,
                flex: 1
            },
            {
                xtype: 'button',
                text: me.snippets.button,
                handler: function() {
                    me.fireEvent('sendMail', me)
                }
            }
        ];
    }

});
//
<?php }} ?>