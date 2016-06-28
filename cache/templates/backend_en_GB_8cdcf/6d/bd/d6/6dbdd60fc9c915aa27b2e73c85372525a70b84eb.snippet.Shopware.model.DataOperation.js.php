<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/application/Shopware.model.DataOperation.js" */ ?>
<?php /*%%SmartyHeaderCode:13843350485770ed906c3238-85914899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dbdd60fc9c915aa27b2e73c85372525a70b84eb' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/application/Shopware.model.DataOperation.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13843350485770ed906c3238-85914899',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed906ddcf5_22438383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed906ddcf5_22438383')) {function content_5770ed906ddcf5_22438383($_smarty_tpl) {?>
//
//

Ext.define('Shopware.model.DataOperation', {

    extend:'Ext.data.Model',

    phantom: true,

    fields:[
        { name: 'success', type: 'boolean' },
        { name: 'request' },
        { name: 'error', type: 'string' },
        { name: 'operation' },
    ]
});
//
<?php }} ?>