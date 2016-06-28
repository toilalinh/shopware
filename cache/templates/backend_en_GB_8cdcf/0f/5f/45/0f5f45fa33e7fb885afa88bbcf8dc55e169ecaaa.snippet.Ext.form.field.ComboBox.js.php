<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.form.field.ComboBox.js" */ ?>
<?php /*%%SmartyHeaderCode:16435420575770ed8f1ebc61-45808160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5f45fa33e7fb885afa88bbcf8dc55e169ecaaa' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.form.field.ComboBox.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16435420575770ed8f1ebc61-45808160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f1fe6c9_58747863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f1fe6c9_58747863')) {function content_5770ed8f1fe6c9_58747863($_smarty_tpl) {?>/**
 * Shopware UI - ComboBox Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element.
 *
 * shopware AG (c) 2012. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @author st.pohl
 * @date 2012-05-03
 * @license http://www.shopware.de/license
 * @package overrides
 */
Ext.override(Ext.form.field.ComboBox,
/** @lends Ext.form.field.ComboBox */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Additional suffix which will be added
     * to the value as a suffix
     */
    valueSuffix: '-table',

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

        if(me.el.dom) {
            var dom = me.el.dom,
                value = (me.listConfig) ? me.listConfig.action : me.name;

            dom.setAttribute('data-' + me.dataSuffix, value + me.valueSuffix);
        }
    }
});<?php }} ?>