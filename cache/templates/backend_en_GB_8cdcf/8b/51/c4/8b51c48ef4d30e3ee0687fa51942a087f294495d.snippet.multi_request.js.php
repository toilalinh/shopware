<?php /* Smarty version Smarty-3.1.12, created on 2016-06-27 11:24:42
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/controller/multi_request.js" */ ?>
<?php /*%%SmartyHeaderCode:18084873915770f0dacff0a8-28150961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b51c48ef4d30e3ee0687fa51942a087f294495d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/templates/_default/backend/category/controller/multi_request.js',
      1 => 1425975330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18084873915770f0dacff0a8-28150961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5770f0dae6cec8_97862797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f0dae6cec8_97862797')) {function content_5770f0dae6cec8_97862797($_smarty_tpl) {?>/**
 * Shopware 4.0
 * Copyright © 2013 shopware AG
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
 * @package    Shopware_Performance
 * @subpackage Cache
 * @copyright  Copyright (c) 2013, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * The multi request dialog controller takes care of actual requests
 */

//
//
Ext.define('Shopware.apps.Category.controller.MultiRequest', {
    extend: 'Enlight.app.Controller',

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        done: {
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'done_message','default'=>'Operation finished','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'done_message','default'=>'Operation finished','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Operation completed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'done_message','default'=>'Operation finished','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'done_title','default'=>'Successful','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'done_title','default'=>'Successful','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'done_title','default'=>'Successful','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    categoryId: null,

    /**
     * Indicates if the operations should be canceled after the next request
     */
    cancelOperation: false,

    init: function () {
        var me = this;

        me.control({
            'category-main-multi-request-tasks': {
                'multiRequestTasksWindowReady': me.onWindowReady,
                'multiRequestTasksStartProcess': me.startBatchMove
            }
        });

        me.callParent(arguments);
    },

    onWindowReady: function(window, categoryId) {
        var me = this;

        me.categoryId = categoryId;

        window.rebuildCategoryProgress.updateProgress(
            0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'progress'/'init'/'rebuildCategoryPath','default'=>'Rebuild category path','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'init'/'rebuildCategoryPath','default'=>'Rebuild category path','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rebuild category path<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'init'/'rebuildCategoryPath','default'=>'Rebuild category path','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        );

        window.removeOldAssignmentsProgress.updateProgress(
            0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'progress'/'init'/'removeOldAssignments','default'=>'Remove old assignments','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'init'/'removeOldAssignments','default'=>'Remove old assignments','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove old assignments<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'init'/'removeOldAssignments','default'=>'Remove old assignments','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        );

        window.rebuildAssignmentsProgress.updateProgress(
            0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'progress'/'init'/'rebuildAssignments','default'=>'Rebuild assignments','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'init'/'rebuildAssignments','default'=>'Rebuild assignments','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rebuild assignments<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'init'/'rebuildAssignments','default'=>'Rebuild assignments','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        );

        me.startBatchMove(window);
    },

    /**
     * Called after the user hits the 'start' button of the multiRequestDialog
     */
    startBatchMove: function(window) {
        var me = this, configs = [];

        configs.push({
            progress: window.rebuildCategoryProgress,
            requestUrl: '<?php echo '/backend/Category/rebuildCategoryPath';?>',
            initUrl:    '<?php echo '/backend/Category/getRebuildCategoryPathCount';?>',
            snippet:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'progress'/'rebuildCategoryPath','default'=>'Rebuild category path [0] of [1]','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'rebuildCategoryPath','default'=>'Rebuild category path [0] of [1]','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rebuild category path [0] of [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'rebuildCategoryPath','default'=>'Rebuild category path [0] of [1]','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        configs.push({
            progress: window.removeOldAssignmentsProgress,
            requestUrl: '<?php echo '/backend/Category/removeOldAssignments';?>',
            initUrl:    '<?php echo '/backend/Category/getRemoveOldAssignmentsCount';?>',
            snippet:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'progress'/'removeOldAssignments','default'=>'Remove old assignments [0] of [1]','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'removeOldAssignments','default'=>'Remove old assignments [0] of [1]','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove old assignments [0] of [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'removeOldAssignments','default'=>'Remove old assignments [0] of [1]','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        configs.push({
            progress: window.rebuildAssignmentsProgress,
            requestUrl: '<?php echo '/backend/Category/rebuildAssignments';?>',
            initUrl:    '<?php echo '/backend/Category/getRebuildAssignmentsCount';?>',
            snippet:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'progress'/'rebuildAssignments','default'=>'Rebuild assignments [0] of [1]','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'rebuildAssignments','default'=>'Rebuild assignments [0] of [1]','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rebuild assignments [0] of [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'progress'/'rebuildAssignments','default'=>'Rebuild assignments [0] of [1]','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        var currentConfig = configs.shift();

        me.initRequest(currentConfig, window, configs);
    },

    initRequest: function(currentConfig, dialog, configs) {
        var me = this;

        Ext.Ajax.request({
            url: currentConfig.initUrl,
            params: {
                categoryId: me.categoryId
            },
            success: function(response) {
                var json = Ext.decode(response.responseText);

                currentConfig.totalCount = json.data.count;
                currentConfig.batchSize  = json.data.batchSize;

                me.runRequest(0, dialog, currentConfig, configs);
            }
        });
    },

     /**
     * Runs the actual request
     * Method is called recursively until all data was processed
     */
    runRequest: function(offset, dialog, currentConfig, configs) {
        var me = this;

        var params = currentConfig.params;
        if (!(Ext.isObject(params))) {
            params = { };
        }

        //last batch size processed?
        if (offset >= currentConfig.totalCount) {

            //is progress bar configured?
            if (currentConfig.progress) {
                currentConfig.progress.updateProgress(1, me.snippets.done.message, true);
            }

            //no more request configurations exists?
            if (configs.length === 0) {
                // Show 'finished' message
                Shopware.Notification.createGrowlMessage(me.snippets.done.title, me.snippets.done.message);

                // Enable close button, set progressBar to 'finish'
                dialog.closeButton.enable();
                dialog.hide();
            } else {

                //cancel button pushed?
                if (me.cancelOperation) {
                    dialog.closeButton.enable();
                    return;
                }

                //get next config and call again
                currentConfig = configs.shift();
                me.initRequest(currentConfig, dialog, configs);
            }
            return;
        }

        //cancel button pushed?
        if (me.cancelOperation) {
            dialog.closeButton.enable();
            return;
        }

        //has the current request a progress bar?
        if (currentConfig.progress) {
            // updates the progress bar value and text, the last parameter is the animation flag
            currentConfig.progress.updateProgress(
                (offset + currentConfig.batchSize) / currentConfig.totalCount,
                Ext.String.format(currentConfig.snippet, ( offset + currentConfig.batchSize), currentConfig.totalCount),
                true
            );
        }

        //set the params single, to support additional request params
        params.offset = offset;
        params.limit  = currentConfig.batchSize;
        params.categoryId = me.categoryId;

        Ext.Ajax.request({
            url: currentConfig.requestUrl,
            timeout: 400000, // increase timeout to 400 seconds
            method: 'POST',
            params: params,
            success: function(response) {
                var json = Ext.decode(response.responseText);

                // start recusive call here
                me.runRequest((offset + currentConfig.batchSize), dialog, currentConfig, configs);
            },
            failure: function(response) {
                me.shouldCancel = true;
                me.runRequest((offset + currentConfig.batchSize), dialog, currentConfig, configs);
            }
        });
    }
});
//
<?php }} ?>