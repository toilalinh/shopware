<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:25:30
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/template/preview.js" */ ?>
<?php /*%%SmartyHeaderCode:7597155595770f10a854fb7-36348833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da1f0b36e8123fceeadee84fed1d9dd3c13664d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/config/view/template/preview.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7597155595770f10a854fb7-36348833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f10a8ab187_35433267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f10a8ab187_35433267')) {function content_5770f10a8ab187_35433267($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.template.Preview', {
    extend: 'Enlight.app.SubWindow',
    alias: 'widget.config-template-preview',

    height: 768,
    width: 1024,

    layout: 'fit',
    basePath: '/templates/',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'template'/'preview_title','default'=>'Preview: [name]','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'preview_title','default'=>'Preview: [name]','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview: [name]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'template'/'preview_title','default'=>'Preview: [name]','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function() {
        var me = this;

        me.title = new Ext.Template(me.title).applyTemplate(me.template.data);

        Ext.applyIf(me, {
            items: {
                xtype: 'image',
                src: me.basePath + '/' + me.template.get('previewFull'),
                listeners : {
                    render : function(c) {
                        c.getEl().on('click', function(){ this.fireEvent('click', c); }, c);
                    }
                }
            }
        });

        me.callParent(arguments);
    }
});
//
<?php }} ?>