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
 * @package    ProductFeed
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - ProductFeed backend module.
 *
 * The category model is used for the category filter tree
 */
//{block name="backend/product_feed/model/category_for_combo_tree"}
Ext.define('Shopware.apps.ProductFeed.model.CategoryForComboTree', {
    /**
     * Extends the default extjs 4 model
     * @string
     */
    extend : 'Ext.data.Model',
    /**
     * Defined items used by that model
     *
     * We use a reduces feature set here - just necessary fields are selected
     *
     * @array
     */
    fields : [
		//{block name="backend/product_feed/model/category_for_combo_tree/fields"}{/block}
        { name : 'name',     type: 'string' },
        { name : 'id',       type: 'int' },
        { name : 'parentId', type: 'int' },
        { name : 'cls',      type: 'string' }
    ],
    proxy : {
        type : 'ajax',
        api : {
            read : '{url controller=category action=getList}'
        },
        reader : {
            type : 'json',
            root: 'data'
        }
    }
});
//{/block}
