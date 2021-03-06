<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:40
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/application/Shopware.store.Association.js" */ ?>
<?php /*%%SmartyHeaderCode:12619591125770ed90e93929-66383886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca7cd12f8ede7adb6142746947de022da69a766' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/base/application/Shopware.store.Association.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12619591125770ed90e93929-66383886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed90f0bf25_10201385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed90f0bf25_10201385')) {function content_5770ed90f0bf25_10201385($_smarty_tpl) {?>
//
//
Ext.define('Shopware.store.Association', {

    /**
     * The Store class encapsulates a client side cache of Model objects.
     * Stores load data via a Proxy, and also provide functions for sorting,
     * filtering and querying the model instances contained within it.
     *
     * @type { String }
     */
    extend: 'Ext.data.Store',

    /**
     * List of classes to mix into this class.
     * @type { Object }
     */
    mixins: {
        helper: 'Shopware.model.Helper'
    },

    /**
     * If data is not specified, and if autoLoad is true or an Object,
     * this store's load method is automatically called after creation.
     * If the value of autoLoad is an Object, this Object will be passed to the store's load method.
     */
    autoLoad: false,

    /**
     * Performs a batch of Operations, in the order specified by batchOrder. Used internally by Ext.data.Store's sync method.
     * @type { boolean }
     */
    batch: true,

    /**
     * True to defer any sorting operation to the server. If false, sorting is done locally on the client.
     * @type { boolean }
     */
    remoteSort: true,

    /**
     * True to defer any filtering operation to the server. If false, filtering is done locally on the client.
     * @type { boolean }
     */
    remoteFilter: true,

    /**
     * The number of records considered to form a 'page'.
     * This is used to power the built-in paging using the nextPage and
     * previousPage functions when the grid is paged using a PagingScroller.
     */
    pageSize: 20,

    /**
     * Get the reference to the class from which this object was instantiated. Note that unlike self, this.statics()
     * is scope-independent and it always returns the class from which it was called, regardless of what
     * this points to during run-time.
     *
     * The statics object contains the shopware default configuration for
     * this component. The different shopware configurations are stored
     * within the displayConfig object.
     *
     * @type { object }
     */
    statics: {
        /**
         * The statics displayConfig contains the default shopware configuration for
         * this component.
         * To set the shopware configuration, you can use the configure function and set an object as return value
         *
         * @example
         *      Ext.define('Shopware.apps.Product.store.Product', {
         *          extend: 'Shopware.store.Listing',
         *          configure: function() {
         *              return {
         *                  controller: 'Product'
         *                  ...
         *              }
         *          }
         *      });
         */
        displayConfig: {
            /**
             * @required
             *
             * Name of the php controller which loads the store data.
             *
             * @example
             * PHP Controller = Shopware_Controllers_Backend_Article
             * value of this property => 'article'
             *
             * @type { String }
             */
            controller: undefined,

            /**
             * Url for the search request. The "controller=base" path will be replaced with the
             * { @link #controller } property.
             *
             * @type { String }
             */
            searchUrl: '<?php echo '/backend/base/reloadAssociation';?>'
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

            if (config.controller) {
                config.searchUrl = config.searchUrl.replace(
                    '/backend/base/', '/backend/' + config.controller + '/'
                );
            }

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
     * Class constructor.
     * Used to convert the proxy api urls.
     *
     * @param config
     */
    constructor: function (config) {
        var me = this;

        me.association = config.association;
        me.extraParams = config.extraParams;
        me._opts = me.statics().getDisplayConfig(config, this);

        return me.callParent(config);
    },

    /**
     * Override of the { @link Ext.data.AbstractStore }.
     * The override is required to use a dynamically proxy to send the read request..
     *
     * @param options
     * @returns { Shopware.store.Association }
     */
    load: function(options) {
        var me = this,
            operation,
            proxy;

        me.checkRequirements();

        //create dynamically proxy to prevent a defined reader in the association store.
        //if an reader would be defined, the record data can't be read.
        proxy = Ext.create('Ext.data.proxy.Ajax', {
            url: me.getConfig('searchUrl'),
            extraParams: me.extraParams,
            reader: Ext.create('Ext.data.reader.Json', {
                root: 'data',
                totalProperty: 'total',
                model: me.model
            })
        });

        options = Ext.apply({
            action: 'read',
            filters: me.filters.items,
            sorters: me.getSorters()
        }, options);

        options.page = options.page || me.currentPage;
        options.start = (options.start !== undefined) ? options.start : (options.page - 1) * me.pageSize;
        options.limit = options.limit || me.pageSize;

        me.lastOptions = options;

        operation = new Ext.data.Operation(options);

        if (me.fireEvent('beforeload', me, operation) !== false) {
            me.loading = true;
            proxy.read(operation, me.onProxyLoad, me);
        }
        
        return me;
    },

    /**
     * Helper function which checks all component requirements.
     */
    checkRequirements: function() {
        var me = this;

        if (!me.getConfig('controller')) {
            me.throwException(me.$className + ": Reload not available. Please configure the store `controller` property.");
        }
    }
});
//
<?php }} ?>