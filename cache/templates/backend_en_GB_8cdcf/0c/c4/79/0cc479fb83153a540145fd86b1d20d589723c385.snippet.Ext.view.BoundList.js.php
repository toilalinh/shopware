<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.view.BoundList.js" */ ?>
<?php /*%%SmartyHeaderCode:11227489475770ed8f1d9f37-45369575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc479fb83153a540145fd86b1d20d589723c385' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.view.BoundList.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11227489475770ed8f1d9f37-45369575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f1e4905_35079369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f1e4905_35079369')) {function content_5770ed8f1e4905_35079369($_smarty_tpl) {?>/**
 * Shopware UI - BoundList Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element. The value of the attribute is
 * either the "name" property of the ComboBox or
 * the action
 *
 * shopware AG (c) 2012. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @author st.pohl
 * @date 2012-05-02
 * @license http://www.shopware.de/license
 * @package overrides
 */
Ext.override(Ext.view.BoundList,
/** @lends Ext.view.BoundList# */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Adds an additional HTML5 "data"-attribute
     * to easier address the element in our
     * selenium tests.
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.el.dom && me.pickerField) {
            var dom = me.el.dom,
                value = me.action || me.pickerField.name;

            dom.setAttribute('data-' + me.dataSuffix, value);
        }
    }
});<?php }} ?>