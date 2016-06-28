<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.form.field.Time.js" */ ?>
<?php /*%%SmartyHeaderCode:19974728395770ed8f207620-62041516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c85ed794e079dec82111fc97492602a106c7a694' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.form.field.Time.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19974728395770ed8f207620-62041516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f227d40_78443082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f227d40_78443082')) {function content_5770ed8f227d40_78443082($_smarty_tpl) {?>/**
 * Shopware UI - Time field Override
 *
 * Extends the default safeParse function to allow
 * parsing partial times using the alternative formats
 *
 * Shopware AG (c) 2013. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @author t.garcia
 * @date 2013-11-10
 * @license http://www.shopware.de/license
 * @package overrides
 */
Ext.override(Ext.form.field.Time,
/** @lends Ext.form.field.Time */
{
    /** Extends the default function to allow parsing partial times using the alternative formats. */
    safeParse: function(value, format){
        var me = this,
            utilDate = Ext.Date,
            parsedDate,
            result = null,
            altFormats = me.altFormats,
            altFormatsArray = me.altFormatsArray,
            j = 0,
            len;

        if (utilDate.formatContainsDateInfo(format)) {
            // assume we've been given a full date
            result = utilDate.parse(value, format);
        } else {
            // Use our initial safe date
            parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + format);
            if (parsedDate) {
                result = parsedDate;
            } else {
                if (!result && altFormats) {
                    altFormatsArray = altFormatsArray || altFormats.split('|');
                    len = altFormatsArray.length;
                    for (; j < len && !result; ++j) {
                        parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + altFormatsArray[j]);
                        if (parsedDate) {
                            result = parsedDate;
                        }
                    }
                }
            }
        }
        return result;
    }
});<?php }} ?>