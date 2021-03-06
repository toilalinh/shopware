<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/application/Shopware.data.Model.js" */ ?>
<?php /*%%SmartyHeaderCode:9555721895770ed8fef6919-56789620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09b324ec70fef237858a6e83cd4ecaa918f18a9' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/application/Shopware.data.Model.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9555721895770ed8fef6919-56789620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed90090099_01190420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed90090099_01190420')) {function content_5770ed90090099_01190420($_smarty_tpl) {?>

//

//
Ext.define('Shopware.data.Model', {

    /**
     * The parent class that this class extends
     * @type { String }
     */
    extend: 'Ext.data.Model',

    /**
     * Get the reference to the class from which this object was instantiated.
     * Note that unlike self, this.statics() is scope-independent and it always
     * returns the class from which it was called, regardless of what this points to during run-time
     *
     * @type { Object }
     */
    statics: {

        /**
         * The displayConfig contains the default shopware configuration for this component.
         * To set the shopware configuration, you can use the configure function and set an object as return value
         *
         * @example
         *      Ext.define('Shopware.apps.Product.model.Product', {
         *          extend: 'Shopware.data.Model',
         *          configure: function() {
         *              return {
         *                  listing: 'Shopware.apps.Product.view.list.Product',
         *                  ...
         *              }
         *          }
         *      });
         */
        displayConfig: {

            /**
             * @required - For the base model.
             *
             * Class of the php controller
             * This property is required for the CRUD operations of the Shopware.data.Model.
             * The proxy api reference first on the base controller. The base controller
             * path will be replaced with this controller name.
             *
             * @example
             * PHP Controller = Shopware_Controllers_Backend_Article
             * value of this property => 'article'
             *
             * @type { String }
             */
            controller: undefined,

            /**
             * Listing component of this model.
             * The component configuration is used for the detail window of an application.
             * Listing components are used for OneToMany associations.
             * As default shopware creates a { @link Shopware.grid.Panel }.
             * Each view definition is required if you want to support
             * that other applications can be linked to your models.
             *
             * @type { String }
             */
            listing: 'Shopware.grid.Panel',

            /**
             * Detail component of this model.
             * The component configuration is used for the detail window of an application.
             * Detail components are used for OneToOne associations or for the base record of a detail window.
             * As default shopware creates a { @link Shopware.model.Container }.
             * Each view definition is required if you want to support
             * that other applications can be linked to your models.
             *
             * @type { String }
             */
            detail:  'Shopware.model.Container',

            /**
             * Related component of this model.
             * The component configuration is used for the detail window of an application.
             * Related components are used for ManyToMany associations.
             * As default shopware creates a { @link Shopware.grid.Association }.
             * Each view definition is required if you want to support
             * that other applications can be linked to your models.
             *
             * @type { String }
             */
            related: 'Shopware.grid.Association',

            /**
             * Field component of this model.
             * The component configuration is used for the detail window of an application.
             * Field components are used for ManyToOne associations.
             * As default shopware creates a { @link Shopware.form.field.Search }.
             * Each view definition is required if you want to support
             * that other applications can be linked to your models.
             *
             * @type { String }
             */
            field:   'Shopware.form.field.Search',

            /**
             * Model proxy which defines
             * the urls for the CRUD actions.
             */
            proxy: {
                type: 'ajax',
                api: {
                    detail:  '<?php echo '/backend/base/detail';?>',
                    create:  '<?php echo '/backend/base/create';?>',
                    update:  '<?php echo '/backend/base/update';?>',
                    destroy: '<?php echo '/backend/base/delete';?>'
                },
                reader: {
                    type: 'json',
                    root: 'data',
                    totalProperty: 'total'
                }
            }
        },

        /**
         * Static function to merge the different configuration values
         * which passed in the class constructor.
         * @param { Object } userOpts
         * @param { Object } definition
         * @returns Object
         */
        getDisplayConfig: function (userOpts, definition) {
            var config = { };

            if (userOpts && typeof userOpts.configure == 'function') {
                config = Ext.apply({ }, config, userOpts.configure());
            }
            if (definition && typeof definition.configure === 'function') {
                config = Ext.apply({ }, config, definition.configure());
            }
            config = Ext.apply({ }, config, this.displayConfig);

            return config;
        },

        /**
         * Static function which sets the property value of
         * the passed property and value in the display configuration.
         *
         * @param prop
         * @param val
         * @returns boolean
         */
        setDisplayConfig: function (prop, val) {
            var me = this;

            if (!me.displayConfig.hasOwnProperty(prop)) {
                return false;
            }
            me.displayConfig[prop] = val;
            return true;
        }
    },

    /**
     * Override required!
     * This function is used to override the { @link #displayConfig } object of the statics() object.
     *
     * @returns { Object }
     */
    configure: function() {
        return { };
    },

    /**
     * Class constructor.
     * Used to convert the proxy api urls.
     *
     * @param config
     */
    constructor: function (config) {
        var me = this;

        me._opts = me.statics().getDisplayConfig(config, this);
        me.convertProxyApi();
        me.callParent(arguments);
    },

    /**
     * Helper function to get config access.
     * @param prop string
     * @returns mixed
     * @constructor
     */
    getConfig: function (prop) {
        var me = this;
        return me._opts[prop];
    },

    /**
     * Helper function which removes the base controller
     * path of the store api urls.
     * The base controller will be remove with the
     * configured controller name.
     */
    convertProxyApi: function () {
        var me = this, value;

        if (!me.getConfig('controller')) {
            return;
        }

        me.setProxy(me.getConfig('proxy'));

        Object.keys(me.proxy.api).forEach(function (key) {
            value = me.proxy.api[key] + '';
            value = value.replace(
                '/backend/base/', '/backend/' + me.getConfig('controller') + '/'
            );
            me.proxy.api[key] = value;
        });
    },


    /**
     * Helper function to load the model detail data.
     * This function creates a temp store with the
     * model proxy to send an ajax request on the controller
     * detailAction.
     * This action is used to load the model detail data.
     *
     * @param options object
     * @returns Shopware.data.Model
     */
    reload: function (options) {
        var me = this, proxy = me.proxy;

        if (!Ext.isString(proxy.api.detail)) {
            if (options && Ext.isFunction(options.callback)) {
                options.callback(me);
            } else {
                return this;
            }
        }
        proxy.api.read = proxy.api.detail;

        var store = Ext.create('Ext.data.Store', {
            model: me.__proto__.$className,
            proxy: me.proxy
        });

        store.getProxy().extraParams.id = me.get('id');

        try {
            store.load({
                callback: function (records, operation) {
                    var record = records[0];
                    if (options && Ext.isFunction(options.callback)) {
                        options.callback(record, operation);
                    }
                }
            });
        } catch (e) {
            return e;
        }
    }
});
//

<?php }} ?>