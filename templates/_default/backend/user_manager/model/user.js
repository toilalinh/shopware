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
 * @package    UserManager
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UserManager - User listing model
 *
 * todo@all: Documentation
 */
//{block name="backend/user_manager/model/user"}
Ext.define('Shopware.apps.UserManager.model.User', {
	extend: 'Ext.data.Model',
	fields: [
		//{block name="backend/user_manager/model/user/fields"}{/block}
		'id', 'username', 'groupname', 'name', 'email', 'active', 'admin', 'failedlogins', { name: 'lastLogin', type: 'date'} ],
	proxy: {
		type: 'ajax',
		api: {
			read: '{url controller="UserManager" action="getUsers"}',
			create: '{url controller="UserManager" action="createUser"}',
			update: '{url controller="UserManager" action="updateUser"}',
			destroy: '{url controller="UserManager" action="deleteUser"}'
		},
		reader: {
			type: 'json',
			root: 'data'
		}
	},
	validations: [
		{ field: 'username', type: 'length', min: 6 },
		{ field: 'password', type: 'length', min: 6 },
		{ field: 'name', type: 'length', min: 6 }
	],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.UserManager.model.Attribute', name: 'getAttributes', associationKey: 'attribute'}
    ]
});
//{/block}