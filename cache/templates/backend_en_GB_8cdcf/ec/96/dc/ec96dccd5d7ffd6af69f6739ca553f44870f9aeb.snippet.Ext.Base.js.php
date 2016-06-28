<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.Base.js" */ ?>
<?php /*%%SmartyHeaderCode:4776235525770ed8ece5382-74566507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec96dccd5d7ffd6af69f6739ca553f44870f9aeb' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.Base.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4776235525770ed8ece5382-74566507',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8ed480b6_74069070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8ed480b6_74069070')) {function content_5770ed8ed480b6_74069070($_smarty_tpl) {?>/**
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
 * Shopware 4 - Firefox 18 IonMonkey Fix
 *
 * This override contains all relevant fixes and patches which
 * fixes the bugs in IonMonkey.
 *
 * IonMonkey is the new javascript engine from Firefox which increase
 * the overall performance of webapps.
 * The new engine drops support for `arguments.caller` which is used
 * excessivly in the class and override system of ExtJS. `Function.caller`
 * is the new way to go but it isn't a standard complicated feature,
 * so we need to workaround this issue.
 *
 * @link MDN - arguments.caller:
 *   https://developer.mozilla.org/en-US/docs/JavaScript/Reference/Functions_and_function_scope/arguments/caller
 *
 * @link MDN - Function.caller:
 *   https://developer.mozilla.org/en-US/docs/JavaScript/Reference/Global_Objects/Function/caller
 *
 * @link Bugreports:
 *    https://bugzilla.mozilla.org/show_bug.cgi?id=828319
 *    https://bugzilla.mozilla.org/show_bug.cgi?id=818023
 *
 */
Ext.onReady(function () {

    if (Ext.firefoxVersion >= 18) {
        var noArgs = [];

        var callOverrideParent = function () {
            var method = callOverrideParent.caller.caller; // skip callParent (our caller)
            try {
            } catch (e) {
            } // FF 18 fix

            return method.$owner.prototype[method.$name].apply(this, arguments);
        };

        Ext.override = function (target, overrides) {
            if (target.$isClass) {
                target.override(overrides);
            } else if (typeof target == 'function') {
                Ext.apply(target.prototype, overrides);
            } else {
                var owner = target.self, name, value;

                if (owner && owner.$isClass) { // if (instance of Ext.define'd class)
                    for (name in overrides) {
                        if (overrides.hasOwnProperty(name)) {
                            value = overrides[name];
                            if (typeof value == 'function') {
                                value.$name = name;
                                value.$owner = owner;
                                value.$previous = target.hasOwnProperty(name) ? target[name] : callOverrideParent;
                            }
                            target[name] = value;
                        }
                    }
                } else {
                    Ext.apply(target, overrides);
                }
            }

            return target;
        };

        Ext.apply(Ext.Base, {
            callParent: function (args) {
                var method,
                    superMethod = (method = this.callParent.caller) && (method.$previous || ((method = method.$owner ?
                        method :
                        method.caller) && method.$owner.superclass[method.$name]));

                // Workarround for Firefox 18. I don't know why this works, but it does. Perhaps functions which have
                // a try-catch block are handled differently
                try {
                } catch (e) {
                }

                return superMethod.apply(this, args || noArgs);
            },
            callSuper: function (args) {
                var method, superMethod = (method = this.callSuper.caller) &&
                        ((method = method.$owner ? method : method.caller) &&
                                method.$owner.superclass[method.$name]);

                try {
                } catch (e) {
                } // Firefox 18 fix

                return superMethod.apply(this, args || noArgs);
            },
            statics: function () {
                var self = this.self, method = this.statics.caller;
                try {
                } catch (e) {
                } // Firefox 18 fix
                if (!method) return self;

                return method.$owner;
            }
        });

        Ext.apply(Ext.Error, {
            raise: function (err) {
                err = err || {};
                if (Ext.isString(err)) {
                    err = { msg: err };
                }

                var msg, method = this.raise.caller;
                try {
                } catch (e) {
                } // Firefox 18 fix

                if (method) {
                    if (method.$name) {
                        err.sourceMethod = method.$name;
                    }
                    if (method.$owner) {
                        err.sourceClass = method.$owner.$className;
                    }
                }

                if (Ext.Error.handle(err) !== true) {
                    msg = Ext.Error.prototype.toString.call(err);

                    Ext.log({
                        msg: msg,
                        level: 'error',
                        dump: err,
                        stack: true
                    });

                    throw new Ext.Error(err);
                }
            }
        });
    }
});<?php }} ?>