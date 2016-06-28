<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:10:39
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.form.Base.js" */ ?>
<?php /*%%SmartyHeaderCode:19009700765770ed8f130e67-85529224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122c993beca3c385674a4a1bd7dd571bd07e7b69' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Library/ExtJs/overrides/Ext.form.Base.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19009700765770ed8f130e67-85529224',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770ed8f16d302_97608813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770ed8f16d302_97608813')) {function content_5770ed8f16d302_97608813($_smarty_tpl) {?>Ext.override(Ext.form.Basic, {
    loadRecord: function(record) {
        var me = this;

        if(record && record.associations && record.associations.length) {
            var data = record.getAssociatedData(),
                values = Ext.clone(record.data);

            Ext.each(record.associations.items, function(item) {
                if(!Ext.isObject(item)) {
                    return;
                }
                if (data[item.name] !== Ext.undefined) {
                    var model = Ext.create(item.associatedName, data[item.name][0]);
                    Ext.each(model.fields.keys, function(key) {
                        values[item.associationKey + '[' + key + ']'] = model.data[key];
                    });
                }
            });

            me.setValues(values);
        }

        if(record) {
            me.callOverridden(arguments);
        } else {
            me._record = undefined;
            me.reset();
        }

        me.fireEvent('recordchange', me, record);
    },

    /**
     * The update record override allows to handle Ext.data.Model associations within a form panel.
     * @param record
     * @return
     */
    updateRecord: function(record) {
        record = record || this._record;

        var values = this.getValues(),
            fields = record.fields,
            data = {}, associationModel, associationUpdated;

        //iterate all record associations to update the model fields with the form data
        record.associations.each(function(association) {
            var associationStore = record[association.storeName];

            associationUpdated = false;

            //check if ExtJs has created a association store dynamically.
            if (!(associationStore instanceof Ext.data.Store)) {
                associationStore = Ext.create('Ext.data.Store', {
                    model: association.associatedName
                });
            }

            //if the association store already contains data use this data to update.
            if (associationStore.getCount() > 0) {
                associationModel = associationStore.first()
            } else {
                associationModel = Ext.create(association.associatedName);
            }

            Ext.each(associationModel.fields.keys, function(key) {
                var fieldName = association.associationKey + '['+ key +']';

                if (fieldName in values) {
                    associationModel.set(key, values[fieldName]);
                    associationUpdated = true;
                    delete values[fieldName];
                }
            });

            //if the store has no record, add the updated association model.
            if (associationStore.getCount() === 0 && associationUpdated) {
                associationStore.add(associationModel);
            }
            record[association.storeName] = associationStore;
        });

        fields.each(function(field) {
            var name = field.name;
            if (name in values) {
                data[name] = values[name];
            }
        });

        record.beginEdit();
        record.set(data);
        record.endEdit();

        return this;
    }
});<?php }} ?>