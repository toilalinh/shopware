/**
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
 *
 * @category   Shopware
 * @package    Shopware_Config
 * @subpackage Config
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
//{block name="backend/config/model/form/country"}
Ext.define('Shopware.apps.Config.model.form.Country', {
    extend: 'Shopware.apps.Base.model.Country',

    fields: [
		//{block name="backend/config/model/form/country/fields"}{/block}
        { name: 'shippingFree', type: 'boolean' },
        { name: 'taxFree', type: 'boolean' },
        { name: 'taxFreeUstId', type: 'boolean' },
        { name: 'forceStateInRegistration', type: 'boolean' },
        { name: 'displayStateInRegistration', type: 'boolean' },
//        { name: 'taxFreeUstIdChecked', type: 'boolean' },
        { name: 'iso3', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'area', convert: function(v, record) {
            return record.raw && record.raw.area && record.raw.area.name;
        }, useNull: true },
        { name: 'areaId', convert: function(v, record) {
            return v || record.raw && record.raw.area && record.raw.area.id;
        }, useNull: true }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Base.model.CountryState',
        name: 'getStates',
        associationKey: 'states'
    },{
        type: 'hasMany',
        model: 'Shopware.apps.Base.model.CountryAttribute',
        name: 'getAttribute',
        associationKey: 'attribute'
    }]
});
//{/block}

//{block name="backend/config/model/form/country_attribute"}
Ext.define('Shopware.apps.Config.model.CountryAttribute', {
    extend: 'Ext.data.Model',

    fields : [
        { name: 'id', type: 'int' }
    ]
});
//{/block}