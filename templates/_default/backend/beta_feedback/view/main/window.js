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
 * @package    BetaFeedback
 * @subpackage Main
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//{namespace name=backend/beta_feedback/view/main}

/**
 * Shopware UI - Beta Feedback Main Window
 *
 * This file contains the business logic for the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//{block name="backend/beta_feedback/view/main/window"}
Ext.define('Shopware.apps.BetaFeedback.view.main.Window', {
    extend: 'Enlight.app.Window',
    title: '{s name=window/title}Feedback{/s}',
    alias: 'widget.beta-feedback-main-window',
    border: false,
    layout: 'fit',
    autoShow: true,
    height: '90%',
    width: 800,
    stateful: true,
    stateId: 'beta-feedback-main-window',

    /**
     * Property which represents the iframe "src"-URL
     * @string
     */
    requestUrl: 'http://jira.shopware.de/jira/index/viewport',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [{
            xtype: 'container',
            // We need to hack the iframe to inject it into the Ext.window.Window
            html: '<ifr' + 'ame id="iframe-' + Ext.id() + '" border="0" src="'+ me.requestUrl +'"></ifr' + 'ame>'
        }];
        me.callParent(arguments);
    }
});
//{/block}