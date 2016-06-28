<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/list/document.js" */ ?>
<?php /*%%SmartyHeaderCode:3203697725770f0d8ee0b37-63262258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d4c30fcd8af00e30020fa74566abc01d0909953' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/order/view/list/document.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3203697725770f0d8ee0b37-63262258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d9093368_81734118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d9093368_81734118')) {function content_5770f0d9093368_81734118($_smarty_tpl) {?>/**
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
 * Shopware UI - Order list backend module
 *
 * The order document list
 */
//
Ext.define('Shopware.apps.Order.view.list.Document', {

    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend:'Ext.grid.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
    */
    alias:'widget.order-document-list',

    /**
     * Set css class
     * @string
     */
    cls:Ext.baseCSSPrefix + 'document-grid',

    /**
     * The view needs to be scrollable
     * @string
     */
    autoScroll:true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        columns: {
            name:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'name','default'=>'Name','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'name','default'=>'Name','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'name','default'=>'Name','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            date:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'date','default'=>'Date','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'date','default'=>'Date','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'date','default'=>'Date','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            amount:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'amount','default'=>'Amount','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'amount','default'=>'Amount','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Amount<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'amount','default'=>'Amount','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            downloadDocument: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'download','default'=>'Download','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'download','default'=>'Download','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'download','default'=>'Download','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
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
        me.columns = me.getColumns();
        me.pagingbar = me.getPagingBar();
        me.callParent(arguments);
    },


    /**
     * Creates the grid columns.
     */
    getColumns: function() {
        var me = this;

        return [
            {
                header: me.snippets.columns.date,
                dataIndex: 'date',
                flex: 1,
                renderer: me.dateColumn
            }, {
                header: me.snippets.columns.name,
                dataIndex: 'name',
                flex: 2,
                renderer: me.nameColumn
            }, {
                header: me.snippets.columns.amount,
                dataIndex: 'amount',
                flex: 1,
                renderer: me.amountColumn
            }
        ];
    },

    /**
     * Creates the paging bar for the document grid.
     */
    getPagingBar: function() {
        var me = this;

        return Ext.create('Ext.toolbar.Paging', {
            store: me.store,
            dock: 'bottom'
        })
    },

    /**
     * Column renderer function which formats the date column of the document grid.
     * @param value
     */
    dateColumn: function(value ) {

        if (!Ext.isDate(value)) {
            return value;
        }
        return Ext.util.Format.date(value);
    },

    /**
     * Columns renderer for the name column
     * @param value
     */
    nameColumn: function(value, metaData, record, rowIndex, colIndex, store, view) {
        var helper = new Ext.dom.Helper,
            display = '',
            type = record.getDocType().first();

        if (record.get('typeId') === 4) {
            display = type.get('name');
        } else {
            display = type.get('name') + ' ' + Ext.String.leftPad(record.get('documentId'), 8, '0');
        }

        var spec = {
            tag: 'a',
            html: display,
            href: '<?php echo '/backend/Order/openPdf';?>?id=' + record.get('hash'),
            target: '_blank'
        };

        return helper.markup(spec);
    },

    /**
     * Column renderer function which formats the amount column with the Ext.util.Format.currency() function.
     * @param value
     */
    amountColumn: function(value) {
        if (!Ext.isNumeric(value)) {
            return value;
        }
        return Ext.util.Format.currency(value);
    }

});
//

<?php }} ?>