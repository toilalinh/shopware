<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:33
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/view/menu.js" */ ?>
<?php /*%%SmartyHeaderCode:6345785915770f0d1cdf2e7-19015677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51ac0d6e561426004469a424fc9b89a29dfe7370' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/index/view/menu.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6345785915770f0d1cdf2e7-19015677',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0d1db91f3_83556267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0d1db91f3_83556267')) {function content_5770f0d1db91f3_83556267($_smarty_tpl) {?>/**
 * Shopware 4
 * Copyright © shopware AG
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

//

/**
 * Shopware Menu
 *
 * This component creates the main backend menu. The data for the items
 * array are placed in a global variable named "backendMenu".
 *
 * Note that this component are based on the Ext.toolbar.Toolbar instead
 * of Ext.menu.Menu.
 */
//
Ext.define('Shopware.apps.Index.view.Menu', {
    extend:'Ext.toolbar.Toolbar',
    alias:'widget.mainmenu',
    alternateClassName:'Shopware.Menu',
    cls: 'shopware-menu',
    dock:'top',
    height:40,
    width: Ext.Element.getViewportWidth(),

    /**
     * Creates the menu and sets the component items
     */
    initComponent: function () {

        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/backend/Index/menu';?>',
            async: false,
            success: function(response) {
                me.items = Ext.decode(response.responseText);

                me.fireEvent('menu-created', me.items);
            }
        });

        me.callParent(arguments);
        me.items.add(Ext.create('Shopware.Search'));

        // Add event listener which sets the width of the toolbar to the viewport width
        Ext.EventManager.onWindowResize(function(width, height) {
            me.setWidth(width);
        });
    },

    afterRender: function() {
        var me = this;

        Shopware.app.Application.baseComponentIsReady(me);

        me.add({ xtype: 'tbfill' }, {
            xtype: 'container',
            cls: 'x-main-logo-container',
            width: 23, height: 17
        });

        me.callParent(arguments);
    }
});
//
Ext.define('Shopware.apps.Index.view.SwagUpdateMenu', {
    override: 'Shopware.apps.Index.view.Menu',

    /**
     * @Override
     */
    initComponent: function() {
        var me = this, result;

        me.on('menu-created', function(items) {
            window.setTimeout(function() {
                me.performVersionCheck();
            }, 500);
        });
        result = me.callParent(arguments);

        return result;
    },

    /**
     * Triggers the version check
     */
    performVersionCheck: function() {
        var me = this,
                snippets;

        snippets = {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl'/'update'/'title','default'=>'A new version of Shopware is available','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'title','default'=>'A new version of Shopware is available','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A new version of Shopware is available!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'title','default'=>'A new version of Shopware is available','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl'/'update'/'button','default'=>'Display info','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'button','default'=>'Display info','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Detail info<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'button','default'=>'Display info','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            messageSticky: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl'/'update'/'message','default'=>'Version [0] of Shopware is available.','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'message','default'=>'Version [0] of Shopware is available.','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Version [0] is ready for download.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'message','default'=>'Version [0] of Shopware is available.','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        };

        /**
         * Perform the actual version check
         */
        Ext.Ajax.request({
            url: '<?php echo '/backend/SwagUpdate/popup';?>',
            async: true,
            success: function(response) {
                if (!response || !response.responseText) {
                    return;
                }

                var result = Ext.decode(response.responseText);

                if (!result.success) {
                    return;
                }

                // add badge class for help menu
                Ext.each(me.items.items, function(item) {
                    if (!item.iconCls) {
                        return true;
                    }

                    if (item.iconCls.indexOf('shopware-help-menu') > -1) {
                        item.addClass('x-btn-badge');
                    }
                });

                // Check if popups disabled for this version
                var skipVersion = localStorage.getItem('skipVersion');
                if (result.data.name == skipVersion) {
                    return;
                }

                // Create growl notification for the update
                Shopware.Notification.createStickyGrowlMessage({
                    title: snippets.title,
                    text: Ext.String.format(snippets.messageSticky, result.data.name),
                    btnDetail: {
                        text: snippets.button,
                        callback: function() {
                            Shopware.app.Application.addSubApplication({
                                name: 'Shopware.apps.SwagUpdate'
                            });
                        }
                    },

                    onCloseButton: function() {
                        Ext.MessageBox.confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"skip_update",'default'=>'Aktualisierung überspingen','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update",'default'=>'Aktualisierung überspingen','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Skip update<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update",'default'=>'Aktualisierung überspingen','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"skip_update_question",'default'=>'Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update_question",'default'=>'Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do you want to disable the notifications for this update permanently?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update_question",'default'=>'Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', skipUpdate);
                    }
                });

                function skipUpdate(button) {
                    if (button == 'yes') {
                        var version = result.data.name,
                            skipVersion = localStorage.getItem('skipVersion');

                        // No version skipped before or an old version
                        if(!skipVersion || skipVersion != version) {
                            localStorage.setItem('skipVersion', version);
                        }

                        Shopware.Notification.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"popups_disabled",'default'=>'Meldungen deaktiviert','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"popups_disabled",'default'=>'Meldungen deaktiviert','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Popups disabled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"popups_disabled",'default'=>'Meldungen deaktiviert','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"no_more_popups",'default'=>'Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"no_more_popups",'default'=>'Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No more popups will be shown for Shopware version [0].<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"no_more_popups",'default'=>'Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', version));
                    }
                }
            }
        });
    }
});
//<?php }} ?>