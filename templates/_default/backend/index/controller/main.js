/**
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

/**
 * SHOPWARE UI - Index Controller
 *
 * This file contains the index application which represents
 * the basic backend structure.
 *
 * @date 2012-05-19
 * @package Shopware_Controller
 * @subpackage Main
 */

//{namespace name=backend/index/controller/main}
//{block name="backend/index/controller/main"}
Ext.define('Shopware.apps.Index.controller.Main', {
	extend: 'Ext.app.Controller',

	/**
	 * Creates the neccessary event listener for this
	 * specific controller and opens a new Ext.window.Window
	 * to display the subapplication
     *
     * @public
     * @return void
	 */
	init: function() {
        var me = this,
            mainApp = Shopware.app.Application,
            viewport = mainApp.viewport = Ext.create('Shopware.container.Viewport');

        /** Create our menu and footer */
        me.menu =  me.getView('Menu').create();
        me.footer = me.getView('Footer').create();

        viewport.add(me.menu);
        viewport.add(me.footer);

        me.addKeyboardEvents();
        me.checkLoginStatus();
	},

    /**
     * This method provides experimental support
     * for shortcuts in the Shopware Backend.
     *
     * @return void
     */
    addKeyboardEvents: function() {
        var me = this, map,
            msg = Shopware.Notification;

        map = new Ext.util.KeyMap(document, [
            // New article - CTRL + ALT + N
            {
                key: 'n',
                ctrl: true,
                alt: true,
                fn: function() {
                    msg.createGrowlMessage('{s name=title/key_pressed}{/s}', '{s name=content/article_open}{/s}');
                    openNewModule('Shopware.apps.Article', {
                        params: {
                            articleId: null
                        }
                    });
                }
            },

            // Article overview - CTRL + ALT + U
            {
                key: "o",
                ctrl: true,
                alt: true,
                fn: function(){
                    msg.createGrowlMessage('{s name=title/key_pressed}{/s}', '{s name=content/article_overview_open}Article overview module will be opened.{/s}');
                    openNewModule('Shopware.apps.ArticleList');
                }
            },

            // Order overview - CTRL + ALT + B
            {
                key: "b",
                ctrl: true,
                alt: true,
                fn: function() {
                    msg.createGrowlMessage('{s name=title/key_pressed}{/s}', '{s name=content/order_open}{/s}');
                    openNewModule('Shopware.apps.Order');
                }
            },

             // Order overview - CTRL + ALT + K
            {
                key: "k",
                ctrl: true,
                alt: true,
                fn: function(){
                    msg.createGrowlMessage('{s name=title/key_pressed}{/s}', '{s name=content/customer_open}{/s}');
                    openNewModule('Shopware.apps.Customer');
                }
            },

            // Shopware Community - CTRL + ALT + H
            {
                key: 'h',
                ctrl: true,
                alt: true,
                fn: function() {
                    createKeyNavOverlay();
                }
            },

            // Plugin Manager - CTRL + ALT + P
            {
                key: 'p',
                ctrl: true,
                alt: true,
                fn: function() {
                    msg.createGrowlMessage('{s name=title/key_pressed}{/s}', '{s name=content/plugin_open}{/s}');
                    openNewModule('Shopware.apps.PluginManager');
                }
            },

            // Cache Manager - CTRL + ALT + TFX
            {
                key: 'tfx',
                ctrl: true,
                alt: true,
                handler: function(keyCode, e) {
                    switch(keyCode) {
                        // Frontend Cache - CTRL + ALT + F
                        case 70: var action = 'Frontend'; break;
                        // Template Cache - CTRL + ALT + T
                        case 84: var action = 'Template'; break;
                        // Config Cache - CTRL + ALT + X
                        case 88: var action = 'Config'; break;
                        default: return;
                    }
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Performance',
                        action: action
                    });
                }
            }
        ]);
    },

    /**
     * Helper method which sends each 5 seconds an request
     * to the backend and checks if the user is logged in.
     *
     * The method registers an new task runner which checks
     * the status.
     *
     * @private
     * @return void
     */
    checkLoginStatus: function() {
        Ext.TaskManager.start({
            interval: 30000,
            run: function() {
                Ext.Ajax.request({
                    url: '{url controller=login action=getLoginStatus}',
                    success: function(response) {
                        var json = Ext.decode(response.responseText);

                        if(!json.success) {
                            window.location.href = '{url controller=index}';
                        }
                    },
                    failure: function() {
                        window.location.href = '{url controller=index}';
                    }
                });
            }
        });
    }
});

Ext.define('Shopware.apps.Index.view.Main', {
	extend: 'Ext.panel.Panel',
	alias: 'widget.index-desktoppanel',
    cls: 'main-backend-holder',
    height: '100%',
    width: '100%',
    border: false,
    plain: true,
    frame: false,
    region: 'center',
    layout: 'fit',
    bodyStyle: 'background: transparent'
});


/**
 * Wrapper methods which allows to open deprecated
 * modules in the new ExtJS 4 structure.
 *
 * Note that this method is only an alias and isn't
 * needed for new modules. New modules will be loaded
 * with the method Shopware.app.Application.addSubApplication
 * or the shorthand openNewModule()
 *
 * @param [string] module - the module to load
 * @param [boolean] forceNewWindow - has no impact
 * @param [object] requestConfig - additional params which will passed to the module
 * @return void
 */
loadSkeleton = function(module, forceNewWindow, requestConfig) {

	var options = { };
    options.name = 'Shopware.apps.Deprecated';
    options.moduleName = module;
    options.requestConfig = requestConfig || {};

    Shopware.app.Application.addSubApplication(options);
};

/**
 * Wrapper method which loads newer modules. This method
 * is mostly used by backend modules which are shipped
 * within a plugin
 *
 * @param [string] controller - the controllername to load
 * @return void
 */
openAction = function(controller, action) {
    var options =  {};
    options.name = 'Shopware.apps.Deprecated';
    options.controllerName = controller;
    options.actionName = action;
    Shopware.app.Application.addSubApplication(options);
};

/**
 * Initialize a new sub application. This method
 * will be used in the future to load new
 * backend modules
 *
 * @param [string] subapp - the complete name of the controller
 * @param [object] options - additional options
 * @return void
 *
 * @example openModule('Shopware.apps.Auth')
 */
openNewModule = function(subapp, options) {
    options = options || { };
    options.name = subapp;
	Shopware.app.Application.addSubApplication(options);
};

createKeyNavOverlay = function() {
    var store = Ext.create('Ext.data.Store', {
        fields: [ 'name', 'key', 'alt', 'ctrl' ],
        data: [
            { name: '{s name=title/article}Article{/s}', key: 'n', alt: true , ctrl: true },
            { name: '{s name=title/article_overview}Article overview{/s}', key: 'o', alt: true , ctrl: true },
            { name: '{s name=title/order}Order{/s}', key: 'b', alt: true , ctrl: true },
            { name: '{s name=title/customer}Customer{/s}', key: 'k', alt: true , ctrl: true },
            { name: '{s name=title/plugin_manager}Plugin manager{/s}', key: 'p', alt: true , ctrl: true },
            { name: '{s name=title/cache_template}Clear template cache{/s}', key: 't', alt: true , ctrl: true },
            { name: '{s name=title/cache_config}Clear config cache{/s}', key: 'x', alt: true , ctrl: true },
            { name: '{s name=title/cache_frontend}Clear shop cache{/s}', key: 'f', alt: true , ctrl: true }
        ]
    });

    var tpl = new Ext.XTemplate(
        '{literal}<tpl for=".">',
            '<div class="row">',
                '<span class="title">{name}:</span>',
                '<div class="keys">',

                    // Ctrl key
                    '<tpl if="ctrl === true">',
                        '<span class="sprite-key_ctrl_alternative">ctrl</span>',
                    '</tpl>',

                    // Alt key
                    '<tpl if="alt === true">',
                        '<span class="key_sep">+</span>',
                        '<span class="sprite-key_alt_alternative">alt</span>',
                    '</tpl>',

                    // Output the actual key
                    '<span class="key_sep">+</span>',
                    '<span class="sprite-key_{key}">{key}</span>',
                '</div>',
            '</div>',
        '</tpl>{/literal}'
    );

    var dataView = Ext.create('Ext.view.View', {
        store: store,
        tpl: tpl
    });

    var win = Ext.create('Ext.window.Window', {
        modal: true,
        layout: 'fit',
        title: '{s name=title/keyboard_shortcuts}Keyboard shortcuts{/s}',
        width: 500,
        height: 400,
        bodyPadding: 20,
        autoScroll: true,
        cls: Ext.baseCSSPrefix + 'shortcut-overlay',
        items: [ dataView ]
    });
    win.show();

};

/**
 * Proxy method which opens up the specific module
 * if the user clicks on an entry in the search result.
 *
 * @public
 * @param [string] module - Name of the module
 * @param [integer] id - id of the item
 * @return [boolean]
 */
openSearchResult = function(module, id) {
    // Force the id to be an integer
    id = ~~(1 * id);

    // Hide search drop down
    Ext.defer(function() {
        Shopware.searchField.searchDropDown.hide();
    }, 100);

    switch(module) {
        case 'articles':
            Shopware.app.Application.addSubApplication({
                name: 'Shopware.apps.Article',
                action: 'detail',
                params: {
                    articleId: id
                }
            });
            break;
        case 'customers':
            Shopware.app.Application.addSubApplication({
                name: 'Shopware.apps.Customer',
                action: 'detail',
                params: {
                    customerId: id
                }
            });
            break;
        case 'orders':
            Shopware.app.Application.addSubApplication({
                name: 'Shopware.apps.Order',
                params: {
                    orderId: id
                }
            });
            break;
        default:
            break;
    }
    return false;
}

/**
 * Proxy method which creates an Message Box with
 * a notice that the module is currently not
 * available.
 *
 * @public
 * @deprecated deprecated since version 4.1
 * @return void
 */
createBetaMessage = function() {
    Ext.MessageBox.alert('{s name=title/missing_in_beta namespace=backend/index/view/menu}Feature is not available in the beta version{/s}', '{s name=content/missing_in_beta namespace=backend/index/view/menu}This feature is not yet available in the current beta version of Shopware 4, but will be available completely refactored in the final version.{/s}');
}

/**
 * Proxy method which just shows a growl like
 * message with the current version of Shopware.
 *
 * @public
 * @return void
 */
createShopwareVersionMessage = function() {

    var aboutWindow = Ext.create('Ext.window.Window', {
        autoShow: true,
        unstyled: true,
        baseCls: Ext.baseCSSPrefix + 'about-shopware',
        layout: 'border',
        width: 402,
        header: false,
        height: 302,
        resizable: false,
        closable: false,
        items: [{
            region: 'north',
            xtype: 'container',
            height: 126,
            cls: Ext.baseCSSPrefix + 'about-shopware-header-logo'
        }, {
            height: 35,
            xtype: 'container',
            region: 'south',
            cls: Ext.baseCSSPrefix + 'about-shopware-footer',
            html: '<a  href="http://www.shopware.de" target="_blank">{s name=about/footer}Copyright &copy; 2013 shopware AG. All rights reserved.{/s}</a>'
        }, {
            xtype: 'container',
            region: 'center',
            padding: '15 75',
            autoScroll: true,
            cls: Ext.baseCSSPrefix + 'about-shopware-content',
            html: '<p>' +
                    '<strong>Shopware {Shopware::VERSION} {Shopware::VERSION_TEXT}</strong>' +
                    '<span>Build Rev {Shopware::REVISION}</span></p>' +

                    '{if !$product}<p><strong>Community Edition under <a href="http://www.gnu.org/licenses/agpl.html" target="_blank">AGPL license</a></strong><span>No support included in this shopware package.</span></p>{else}' +
                    '<p><strong>{if $product == "PE"}Professional Edition {elseif $product == "EB"}Enterprise Business Edition {elseif $product == "EC"}Enterprise Cluster Edition{/if} under commercial / proprietary license</strong><span>See eula.txt / eula_en.txt (bundled with shopware) for details</span></p>{/if}' +

                    '<p><strong>Shopware 4 uses the following components</strong></p>' +
                    '<p><strong>Enlight 2.0</strong><span>BSD License</span><span>&nbsp;Origin: shopware AG</span></p>' +
                    '<p><strong>Zend Framework 1.11.0dev</strong><span>New BSD License</span><span>&nbsp;Origin: Zend Framework Foundation</span></p>' +
                    '<p><strong>ExtJS 4.1.1</strong><span>GPL v3 License</span><span>&nbsp;Origin: Sencha Corp.</span></p>' +
                    'If you want to develop proprietary extensions that makes use of ExtJS (ie extensions that are not licensed under the GNU Affero General Public License, version 3, or a compatible license), you´ll need to license shopware SDK to get the necessary rights for the distribution of your extensions / plugins.' +
                    '<p><strong>Doctrine 2.2.0</strong><span>MIT License</span><span>&nbsp;Origin: http://www.doctrine-project.org/</span></p>' +
                    '<p><strong>Gedmo 2.3.1-DEV</strong><span>MIT License</span><span>&nbsp;Origin: http://www.doctrine-project.org/</span></p>' +
                    '<p><strong>password_compat 1.0.0</strong><span>MIT License</span><span>&nbsp;Origin: https://github.com/ircmaxell/password_compat/</span></p>' +
                    '<p><strong>TinyMCE 3.5.0</strong><span>LGPL 2.1 License</span><span>&nbsp;Origin: Moxiecode Systems AB.</span></p>' +
                    '<p><strong>Symfony 2</strong><span>MIT License</span><span>&nbsp;Origin: SensioLabs</span></p>' +
                    '<p><strong>Smarty 3.1.8</strong><span>LGPL 2.1 License</span><span>&nbsp;Origin: New Digital Group, Inc.</span></p>' +
                    '<p><strong>Mpdf 5.0</strong><span>GPL License</span><span>&nbsp;Origin: http://www.mpdf1.com/mpdf/</span></p>' +
                    '<p><strong>CodeMirror</strong><span>BSD License</span><span>&nbsp;Origin: http://codemirror.net/</span></p>' +
                    '<p><strong>FPDF</strong><span>License</span><span>&nbsp;Origin: http://www.fpdf.org/</span></p>' + "</p>"
        }]
    });

    // Add event listener method closes the about window
    Ext.getBody().on('click', function() {
        this.destroy();
    }, aboutWindow, {
        single: true,
        stopEvent: true
    });
}
//{/block}
